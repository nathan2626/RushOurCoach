@extends('layouts.default')

@section('content')

<!-- Navbar -->
@include('partials.navbar')

<header class="hea">
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
                    <div class="card__side card__side--front">
                        <div class="card__picture" style=" background-image: url(/img/bg-price-1.jpg);">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Coach {{ $name }}</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>{{ $limit_reservation }} maximum</li>
                                <li>{{ $category }}</li>
                                <li>{{ $from }}</li>
                                <li>{{ $days }} : {{ $hours  }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Prix du cours pour {{ $reservation_time }} </p>
                                <p class="card__price-value">{{ $price }}</p>
                            </div>
                            <a href="/reservation" class="btn btn--white">Réserver !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card"></div>
            </div>
        </div>
        <div id="map" class="row"></div>

        <section class="row" style="display: flex; justify-content: center;">
            <div id="map" style="height:400px; width: 100%;"></div>
        </section>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyXu4bsQdGpWpnbm6gpVmYFKZU1b14aYE&callback=initMap&libraries=&v=weekly"
            async
        ></script>

{{--        <div class="row" style="display: flex; justify-content: center;">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.35245957368!2d2.3625182656748254!3d48.8705571292887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e0989542143%3A0x9384848c375ced98!2s%C3%89cole%20Webstart!5e0!3m2!1sfr!2sfr!4v1613583615590!5m2!1sfr!2sfr" width="800" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--        </div>--}}

    </section>
</main>

@endsection
