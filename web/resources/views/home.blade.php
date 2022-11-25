<!DOCTYPE html>
<html>
	<head class="dark-theme">
		<title>Astro Bem | Home</title>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		<!--@include('templates.head')-->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/home.css') }}" />
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
						<li class="nav__item"><a href="/" class="nav__link active">Home</a></li>
						<li class="nav__item"><a href="https://esero.kopernik.org.pl/konkurs-cansat/" class="nav__link">CanSat</a></li>
						<li class="nav__item"><a href= "/articles" class="nav__link">Articles</a></li>
						<li class="nav__item"><a href= "/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a></li>
						<li class="nav__item"><a href= "/obserwacja-nieba" class="nav__link">Obserwacja Nieba</a></li>
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
			<div class="welcome">
		<h1>Welcome to Astrobem, school space science passionates</h1>
		<p>We are working in our school, cooperationg with many teachers of various subjects.
			Currently we are participating in Polish edition of CanSat project, that is organizated by POLSA - Polish Space Agency. Now we are right after sending our PDR documentation - first step in order to qualify to next stage of competition.</p>
	</div>
	<h1 class="header-text">Aktualności</h1>
	<div class="blog-list">

		<div class="blog-post">
			<div class="blog-post_img">
				<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt="">
			</div>
			<div class="blog-post_info">
				<div class="blog-post_date">
					<span>Nov 12 2021</span>
				</div>
				<h1 class="blog-post_title">Konkurs ,, Astro-Bem ,, Zaćmienie Słońca widziane smartfonem”</h1>
				<p class="blog-post_text">
					Dnia 25-10-2022 obserwowaliśmy zaćmienie słońca. Okazało się, że wielu z nas zrobiło śliczne zdjęcia, dlatego ogłaszamy konkurs na najładniejszą fotografię. Zdjęcia proszę nadsyłać na dysk Astro-Bem.
					<br><br>
					Aby przesłać zdjęcie uczestnik musi skorzystać z poczty szkolnej. Termin nadsyłania zdjęć do końca listopada / 30.11.2022/. Ogłoszenie wyników 15.12.2022. Na zwycięzców czekają nagrody.
				</p>
				<a href="https://drive.google.com/drive/folders/1cv1l7dq6O7w3xKJSpBFUQGLz-OV0rApG" class="blog-post_cta">Link Do Dysku</a>
			</div>
		</div>
		<div class="blog-post">
			<div class="blog-post_img">
				<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt="">
			</div>
			<div class="blog-post_info">
				<div class="blog-post_date">
					<span>Nov 12 2021</span>
				</div>
				<h1 class="blog-post_title">Konkurs ,, Astro-Bem ,, Zaćmienie Słońca widziane smartfonem”</h1>
				<p class="blog-post_text">
					Dnia 25-10-2022 obserwowaliśmy zaćmienie słońca. Okazało się, że wielu z nas zrobiło śliczne zdjęcia, dlatego ogłaszamy konkurs na najładniejszą fotografię. Zdjęcia proszę nadsyłać na dysk Astro-Bem.
					<br><br>
					Aby przesłać zdjęcie uczestnik musi skorzystać z poczty szkolnej. Termin nadsyłania zdjęć do końca listopada / 30.11.2022/. Ogłoszenie wyników 15.12.2022. Na zwycięzców czekają nagrody.
				</p>
				<a href="https://drive.google.com/drive/folders/1cv1l7dq6O7w3xKJSpBFUQGLz-OV0rApG" class="blog-post_cta">Link Do Dysku</a>
			</div>
		</div>
	</div>


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
