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
    <section class="section-features-category">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-quaternary">
                Les coachs de Rush Our pour la catégorie !
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-4 sub-item">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-4.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Oren N.</h3>
                        <p class="coach-description">Coach de Pilates</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-3.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Sharon L.</h3>
                        <p class="coach-description">Coach de Boxe</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-2.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Déborah Z.</h3>
                        <p class="coach-description">Coach de Fitness</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item ">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-1.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Noah H.</h3>
                        <p class="coach-description">Coach de Judo</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-1-of-4 sub-item introImage">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-4.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Oren N.</h3>
                        <p class="coach-description">Coach de Pilates</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item introImage">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-3.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Sharon L.</h3>
                        <p class="coach-description">Coach de Boxe</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item introImage">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-2.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Déborah Z.</h3>
                        <p class="coach-description">Coach de Fitness</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-1-of-4 sub-item introImage">
                <a href="/categories/category/coach" class="reset-link">
                    <div class="feature-box">
                        <div style="display: flex; justify-content: center;">
                            <img style="width: 110%;" src="/img/Coach-1.png" alt="Photo">
                        </div>
                        <h3 class="heading-tertiary u-margin-top-small">Noah H.</h3>
                        <p class="coach-description">Coach de Judo</p>
                        <p class="u-margin-bottom-small">⭐⭐⭐⭐⭐</p>
                        <p class="feature-box__text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit"
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>

@endsection
