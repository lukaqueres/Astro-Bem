<!DOCTYPE html>
<html>

<head>
	<title>Astro Bem | Obserwacja Nieba</title>
	<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<!--@include('templates.head')-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/obserwacjanieba.css') }}" />
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
		<div class="blog-list">
			<div class="blog-post">
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>30.01.2023</span>
					</div>
					<h1 class="blog-post_title">Obserwacja Nieba</h1>
					<p class="blog-post_text">
					W lipcu 2022 roku w Orlu, gdzie mieści się Młodzieżowe Obserwatorium Astronomiczne został rozpoczęty eksperyment dydaktyczny Zespołu Szkół nr. 2 im. gen. J. Bema, polegający na notowaniu trajektorii ruchu Słońca na nieboskłonie w czasie 6 miesięcy. 
Została wykonana camera obscura skierowana na południe, zawieszona na słupie.
Bardzo precyzyjnie wykonany otwór- idealny owalny kształt był sprawdzany za pomocą obrazu interferencyjnego, przepuszczał promienie słoneczne, które wyświetlały kliszę umieszczoną po drugiej stronie puszki. Na przesłanym w lutym 2023 roku po zakończeniu eksperymentu przez dyrektora obserwatorium Grzegorza Sęka zdjęciu widzimy półkoliste linie zakreślane coraz niżej wraz z ruchem Ziemi. 

					</p>
					<a href="https://uczniowie.moa.edu.pl/kamerki-otworkowe-nauczka-za-nauczka/"
						class="blog-post_cta">Kamerki otworkowe – nauczka za nauczką</a>
				</div>
				<div class="blog-post_img">
					<img src="assets/images/Articles/twiter.jpg" 
						alt="" style="object-position: top">
				</div>
			</div>
		<div class="blog-list">
			<div class="blog-post">
				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/first.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/secend.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/third.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/fourth.jpeg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/five.jpeg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/six.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/seven.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Obserwacjanieba/eight.jpg" 
							alt="">
					</div>
				</div>
			</div>
		</div>
	@include('templates.footer')
</body>

</html>