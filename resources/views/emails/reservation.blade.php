@extends('layouts.default')

@section('content')

    <header class="header">
        <div class="header__logo-box">
            <img src="http://rushourcoach.herokuapp.com/img/logo-Roc.png" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Rush Our Coach</span>
                <span class="heading-primary--sub">Plateforme de mise en relation avec des coachs sportifs</span>
            </h1>

            <a href="http://rushourcoach.herokuapp.com/categories" style="margin-top: 5rem;" class="btn btn--white btn--animated">Nos catégories</a>
        </div>
    </header>
    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Votre réservation !
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">Email : {{ $email }}</h3>
                    <p class="paragraph">
                        Date : {{ $date_select }} à {{ $hour_select }}
                    </p>
                    <p class="paragraph">
                        Annulation : <a href="http://rushourcoach.herokuapp.com/reservation/annulation/{{$token}}">Annuler votre rendez-vous</a>
                    </p>
                </div>
            </div>
        </section>
    </main>

@endsection
