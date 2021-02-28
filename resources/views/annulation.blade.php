@extends('layouts.default')

@section('content')

<!-- Navbar -->
@include('partials.navbar')

<header class="">
    <div class="header__logo-box">
        <img src="/img/logo-Roc.png" alt="Logo" class="u-margin-top-small header__logo">
    </div>
</header>

<main>
    <section class="section-tours" id="section-tours">
        <div class="row">
            <div class="col-1-of-3">
                <div class="card"></div>
            </div>
            <div class="col-1-of-3">
                <div class="card">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="notification isBadNotification u-margin-bottom-medium">
                                <p>{{ $error }}</p>
                            </div>
                        @endforeach
                    @endif

                    @if (session('error'))
                        <div class="notification isBadNotification u-margin-bottom-medium">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="card__side card__side--front">
                        <div class="card__picture" style=" background-image: url(/img/bg-price-1.jpg);">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Annulation</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Coach {{ $annulationRecap[0]->coach_select }}</li>
                                <li>{{ $annulationRecap[0]->hour_select }}</li>
                                <li>{{ $annulationRecap[0]->date_select }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Prix du cours pour 1 heure </p>
                                <p class="card__price-value">24.90€</p>
                            </div>
                            <form method="post" action="/reservation/annulation/{{$token}}">
                                @csrf

                                @if($token)
                                    <input type="hidden" name="token" value="{{ $token }}">
                                @endif

                                <div class="form__group">
                                    <input class="form__input" type="checkbox" checked id="cgu" name="cgu" required>
                                    <label class="form__label" for="cgu">
                                        J'ai lu et accepté les <a href="#">conditions d'utilisation</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn--white">Annuler !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card"></div>
            </div>
        </div>
    </section>
</main>

@endsection
