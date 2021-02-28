@extends('layouts.default')

@section('content')

<!-- Navbar -->
@include('partials.navbar')

<header class="">
    <div class="header__logo-box">
        <img src="/img/logo-Roc.png" alt="Logo" class="header__logo u-margin-top-small">
    </div>
</header>

<main>
    <section class="section-book">
        <div class="row">
            <div class="book">
                <div class="book__form">

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

                    @if (session('status'))
                        <div class="notification isGoodNotification u-margin-bottom-medium">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif

                    <form action="/reservation" method="POST" class="form">
                        @csrf
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Réserver le coach Harry Smith
                            </h2>
                        </div>

                        @if($token)
                            <input type="hidden" name="token" value="{{ $token }}">
                        @endif

                        <div class="form__group">
                            <input class="form__input" type="date" id="date_select" name="date_select" value="{{ old('date_select') }}" min="{{ $today }}" required>
                            <label class="form__label" for="date_select" id="date_select">Date</label>
                        </div>

                        <div class="form__group">
                            <input type="time" id="hour_select" class="form__input" value="{{ old('hour_select') }}" name="hour_select" min="09:00" max="18:00" step="3600" required>
                            <label for="hour_select" class="form__label">Heure</label>
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input" id="email" name="email" value="{{ old('email') }}" required>
                            <label for="email" class="form__label">Votre email</label>
                        </div>

                        <div class="form__group">
                            <input class="form__input" type="checkbox" checked id="cgu" name="cgu" required>
                            <label class="form__label" for="cgu">
                                J'ai lu et accepté les <a href="#">conditions d'utilisation</a>
                            </label>
                        </div>

                        <div class="form__group">
                            <button type="submit" class="btn btn--green">Réserver &rarr;</button>
                        </div>
                        <!-- Message du genre "Réservation réalisée checker votre boite mail-->
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
