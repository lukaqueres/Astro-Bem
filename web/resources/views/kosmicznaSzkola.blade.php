<!DOCTYPE html>
<html>
	<head class="dark-theme">
		<title>Astro Bem | Kosmiczna Szkoła</title>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		<!--@include('templates.head')-->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/kosmicznaSzkola.css') }}" />
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
						<li class="nav__item"><a href="https://esero.kopernik.org.pl/konkurs-cansat/" class="nav__link">CanSat</a></li>
						<li class="nav__item"><a href= "/articles" class="nav__link">Articles</a></li>
						<li class="nav__item"><a href= "/kosmiczna-szkola" class="nav__link active">Kosmiczna szkoła</a></li>
						<li class="nav__item"><a href= "/about-us" class="nav__link">About Us</a></li>
					</ul>
				</div>

				<div class="nav__social">
					<ion-icon class="nav__social-icon" name="contrast" onclick="ChangeTheme()"></ion-icon></a>
				</div>
			</div>
		</nav>
	</header>

			<!-- Przewijanie Zdjęc Hero Slider -->
			<div class="slider">
				<!-- Aby Dodać Zdjęcie trzeba dodać nowy element myslide fade oraz nową kropkę ! -->
				<div class="myslide fade">
					<div class="txt">
						<h1>Jakiś Tytuł</h1>
						<p>Lorem Impum Dolor Si Amen</p>
					</div>
					<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>Jakiś Tytuł</h1>
						<p>Lorem Impum Dolor Si Amen</p>
					</div>
					<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>Jakiś Tytuł</h1>
						<p>Lorem Impum Dolor Si Amen</p>
					</div>
					<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>Jakiś Tytuł</h1>
						<p>Lorem Impum Dolor Si Amen</p>
					</div>
					<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>Jakiś Tytuł</h1>
						<p>Lorem Impum Dolor Si Amen</p>
					</div>
					<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
				</div>

				<ion-icon name="caret-forward" class="next"  onclick="plusSlides(1)"></ion-icon>
				<ion-icon name="caret-back" class="prev"  onclick="plusSlides(-1)"></ion-icon>
				
				<div class="dotsbox" style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
				</div>
			</div>
			<!-- Ikony -->
			<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
			<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
			<!-- Przewijanie Zdjęc Hero Slider (Koniec) -->

	<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
		<defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path></defs>
		<g class="parallax">
			<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
			<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
			<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
			<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
		</g>
	</svg>
	<footer>
		<ul class="social_icon">
			<li><a href="#"><ion-icon name="logo-buffer"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-buffer"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-buffer"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-buffer"></ion-icon></a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Podstrona_1</a></li>
			<li><a href="#">Podstrona_2</a></li>
			<li><a href="#">Podstrona_3</a></li>
		</ul>
		<p>2022 Astro Bem | All Rights Reserved</p>
	</footer>

		 
	<script src="assets/js/HeroSliderJS.js"></script>
	<script src="assets/js/Navbar.js"></script>
	<script src="assets/js/ThemeColor.js"></script>
	</body>

</html>
