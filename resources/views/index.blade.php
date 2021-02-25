@extends('layouts.default')

@section('content')

<!-- Navbar -->
@include('partials.navbar')

<header class="header">
    <div class="header__logo-box">
        <img src="/img/logo-Roc.png" alt="Logo" class="header__logo">
    </div>

    <div class="header__text-box">
        <h1 class="heading-primary">
            <span class="heading-primary--main">Rush Our Coach</span>
            <span class="heading-primary--sub">Plateforme de mise en relation avec des coachs sportifs</span>
        </h1>

        <a href="/categories" style="margin-top: 5rem;" class="btn btn--white btn--animated">Nos catégories</a>
    </div>
</header>

<main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Des coachings disponibles en visio, à domicile et 24/24 !
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">Coachings en visioconférence</h3>
                <p class="paragraph">
                    Proposez à vos élèves des séances et des événements en
                    visio, à domicile ou en salle.
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">Pour vous les coachs, aucune commission !</h3>
                <p class="paragraph">
                    AUCUNE commission sur vos coachings. Soyez rémunérés à votre juste valeur !
                </p>

                <a href="#contactUs" class="btn-text">Contactez-nous &rarr;</a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">

                    <img srcset="/img/nat-1-Roc.png 300w, /img/nat-1-large-Roc.png 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 1"
                         class="composition__photo composition__photo--p1"
                         src="/img/nat-1-large-Roc.png">

                    <img srcset="/img/nat-2-Roc.png 300w, /img/nat-2-large-Roc.png 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 2"
                         class="composition__photo composition__photo--p2"
                         src="/img/nat-2-large-Roc.png">

                    <img srcset="/img/nat-3-Roc.png 300w, /img/nat-3-large-Roc.png 1000w"
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                         alt="Photo 3"
                         class="composition__photo composition__photo--p3"
                         src="/img/nat-3-large-Roc.png">

                </div>
            </div>
        </div>
    </section>

    <section class="section-features">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-quaternary">
                Les coachs de Rush Our les plus demandés !
            </h2>
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

    <section class="section-stories">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="/img/video.mp4" type="video/mp4">
                <source src="/img/video.webm" type="video/webm">
                Votre navigateur ne supporte pas la vidéo de fond
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Que pensent-ils de nous ?
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="/img/nat-8.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">Mary Smith</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Grâce à Rush Our, je me suis repris en main !</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="/img/nat-9.jpg" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">Jack Wilson</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Les meilleurs coachings personnalisés au monde !</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#contactUs" class="btn-text">Accéder au blog &rarr;</a>
        </div>
    </section>

    <section class="section-book" id="contactUs">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="#" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Contactez-nous
                            </h2>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Nom / Prénom" id="name" required>
                            <label for="name" class="form__label">Nom / Prénom</label>
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Votre email" id="email" required>
                            <label for="email" class="form__label">Votre email</label>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Votre message" id="message" required>
                            <label for="message" class="form__label">Votre message</label>
                        </div>

                        <div class="form__group u-margin-bottom-medium">
                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" id="coach" name="size">
                                <label for="coach" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Coach
                                </label>
                            </div>

                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" id="amateur" name="size">
                                <label for="amateur" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Amateur
                                </label>
                            </div>
                        </div>

                        <div class="form__group">
                            <button class="btn btn--green">Envoyer &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
