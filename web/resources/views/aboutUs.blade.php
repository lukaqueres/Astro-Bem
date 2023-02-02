<!DOCTYPE html>
<html>

<head class="dark-theme">
    <title>Astro Bem | About Us</title>
    <meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
    <meta name="keywords" content="Astro, Bem, CanSat" />
    <!--@include('templates.head')-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/aboutUs.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
</head>

<body>
    <div class="container">
        <!--<div id="header" class="flex">
				<img class="logo" src="/assets/images/logo.png"/>
				<h2>Astro Bem</h2>
				
				<a class="button flex-right">CanSat</a>
				<a class="button button-style-2">Articles</a>
				<a class="button button-style-2">Kosmiczna szkoła </a>
				<a class="button button-style-2">About Us</a>
				
			</div>-->
        <header class="header">
            <a href="#" class="header__logo">ASTRO BEM</a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle" style="margin-right: 2rem;"></ion-icon>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/images/logo.png" alt="">
                        </div>

                        <div>
                            <a href="#" class="nav__name">ASTRO BEM</a>
                            <span class="nav__profesion">School Project</span>
                        </div>
                    </div>

                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                            <li class="nav__item"><a href="/cansat" class="nav__link">CanSat</a></li>
                            <li class="nav__item"><a href="/articles" class="nav__link">Articles</a></li>
                            <li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a>
                            </li>
                            <li class="nav__item"><a href="/obserwacja-nieba" class="nav__link">Obserwacja Nieba</a>
                            </li>
                            <li class="nav__item"><a href="/about-us" class="nav__link active">About Us</a></li>
                        </ul>
                    </div>

                    <div class="nav__social">
                        <ion-icon class="nav__social-icon" name="contrast" onclick="ChangeTheme()"></ion-icon></a>
                    </div>
                </div>
            </nav>
        </header>


        @include('templates.header')

        <h1 class="header-text">Personel</h1>
        <div class="card_container">
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Anna Krzyczkowska</h2>
                    <h4 class="nick">"Pani Annia"</h4>
                    <p class="description">Falicytator - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/Kocielnik.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Łukasz Kocielnik</h2>
                    <h4 class="nick">"lukaqueres"</h4>
                    <p class="description">Lider - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Maksymilian Domański</h2>
                    <h4 class="nick">"Sumik"</h4>
                    <p class="description">Dokumentacja - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/Franek.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Franek Zarzycki</h2>
                    <h4 class="nick">"Franio"</h4>
                    <p class="description">Testy i Wykresy - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Jan Kaczmarek</h2>
                    <h4 class="nick">"Upo"</h4>
                    <p class="description">SocialMedia - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Jan Michalak</h2>
                    <h4 class="nick">"Jano"</h4>
                    <p class="description">Strona techniczna i Testy - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Adrian Wołowski</h2>
                    <h4 class="nick">""</h4>
                    <p class="description">Testy czujników - Grupa CanSat</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Wiktor Plawgo</h2>
                    <h4 class="nick">"sdassh"</h4>
                    <p class="description">Arduino</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Krzysztof Siwiński</h2>
                    <h4 class="nick">"Krzychulle"</h4>
                    <p class="description">Czujnik i programowanie</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Wiktor Góral</h2>
                    <h4 class="nick">"Hazu"</h4>
                    <p class="description">Budżet</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Piotr Główka</h2>
                    <h4 class="nick">"Główka"</h4>
                    <p class="description">Arduino i programowanie</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Kacper Grupa</h2>
                    <h4 class="nick">"Kontrol1"</h4>
                    <p class="description">Dokumentacja</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Michał Rowiński</h2>
                    <h4 class="nick">""</h4>
                    <p class="description"></p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/Suwal.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Mateusz Suwalski</h2>
                    <h4 class="nick">"Suwał"</h4>
                    <p class="description">Programowanie Strony oraz wsparcie mentalne </p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Rafał Durka </h2>
                    <h4 class="nick">"Overnex3"</h4>
                    <p class="description">Programowanie strony</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/Pablo.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Paweł Szymański</h2>
                    <h4 class="nick">"Pablo"</h4>
                    <p class="description">Programowanie strony</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/images/person/rafal-durka.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Szymon Wilczyński</h2>
                    <h4 class="nick">"TouDou"</h4>
                    <p class="description">Programowanie strony oraz pomoc technicza</p>
                </div>
            </div>
        </div>

        @include('templates.footer')
</body>

</html>