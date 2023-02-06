<!DOCTYPE html>
<html>

<head>
	<title>Astro Bem | Obserwacja Nieba</title>
	<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<!--@include('templates.head')-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/kosmicznaSzkola.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
</head>

<body>
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
						<!--<li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a></li>-->
						<li class="nav__item"><a href="/obserwacja-nieba" class="nav__link active">Obserwacja Nieba</a>
						</li>
						<li class="nav__item"><a href="/about-us" class="nav__link">About Us</a></li>
					</ul>
				</div>

				<div class="nav__social">
					<ion-icon class="nav__social-icon" name="contrast" onclick="ChangeTheme()"></ion-icon></a>
				</div>
			</div>
		</nav>
	</header>
	@include('templates.header')
	@include('templates.footer')
</body>

</html>