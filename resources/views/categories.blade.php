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
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Découvrez l'ensemble de nos catégories !
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Catégorie Yoga</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Yoga-Hatha</li>
                                <li>Yoga-Ashtanga</li>
                                <li>Yoga-Vinyasa</li>
                                <li>Yoga-Prénatal</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">à partir de </p>
                                <p class="card__price-value">24.90€</p>
                            </div>
                            <a href="/categories/category" class="btn btn--white">Voir les coachs !</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">Catégorie Musculation</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Jambes</li>
                                <li>Bras</li>
                                <li>Haut du corps</li>
                                <li>Bas du corps</li>
                            </ul>
                        </div>

                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">à partir de</p>
                                <p class="card__price-value">22.90€</p>
                            </div>
                            <a href="/categories/category" class="btn btn--white">Voir les coachs !</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3">Catégorie autre</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Circuit Training</li>
                                <li>Zumba</li>
                                <li>Boxe</li>
                                <li>Pilates</li>
                            </ul>
                        </div>

                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">à partir de</p>
                                <p class="card__price-value">27.90€</p>
                            </div>
                            <a href="/categories/category" class="btn btn--white">Voir les coachs !</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection
