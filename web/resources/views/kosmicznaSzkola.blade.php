<!DOCTYPE html>
<html>

<head>
	<title>AstroBem | Kosmiczna Szkoła</title>
	<meta name="description" content="Site about 'AstroBem' - group participating in 'CanSat' project" />
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
			<a href="#" class="header__logo">ASTROBEM</a>

			<ion-icon name="menu-outline" class="header__toggle" id="nav-toggle" style="margin-right: 2rem;"></ion-icon>

			<nav class="nav" id="nav-menu">
				<div class="nav__content bd-grid">

					<ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

					<div class="nav__perfil">
						<div class="nav__img">
							<img src="assets/images/logo.png" alt="">
						</div>

						<div>
							<a href="#" class="nav__name">ASTROBEM</a>
							<span class="nav__profesion">School Project</span>
						</div>
					</div>

					<div class="nav__menu">
						<ul class="nav__list">
							<li class="nav__item"><a href="/" class="nav__link">Home</a></li>
							<li class="nav__item"><a href="/cansat" class="nav__link">CanSat</a></li>
							<li class="nav__item"><a href="/articles" class="nav__link">Articles</a></li>
							<li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link active">Kosmiczna
									szkoła</a></li>
							<li class="nav__item"><a href="/obserwacja-nieba" class="nav__link">Obserwacja Nieba</a>
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
						<span></span>
					</div>
					<h1 class="blog-post_title">Kosmiczna szkoła - Projekt realizowany w ramach Pilotażu Szkół Kosmicznych pod patronatem PAK PAN</h1>
					<p class="blog-post_text">
					Architekt Główny-Łukasz Kocielnik klasa 3 Technikum Informatyczne
					</p>
					<p class="blog-post_text">
					Ekspert Zewnętrzny- Ika Gut Politechnika Łódzka

					</p>
					<p class="blog-post_text">
					Koordynatorzy- Anna Krzyczkowska nauczycielka fizyki, Paweł Świeczka  nauczyciel informatyki

					</p>
					<p class="blog-post_text">
					Grupa Projektowa- Rafał Durka, Eryk Godlewski, Mateusz Suwalski, Paweł Szymański klasa 3 TI

					</p>

				</div>
			</div>
		</div>	



		<div class="blog-list">
			<div class="blog-post_info">
				<div class="blog-post">
					<h1 class="blog-post_title">ZDJĘCIA Z REALIZACJI PROJEKTU ,,BAZA NA MARSIE”</h1>
				</div>
			</div>
				<div class="blog-post-before">
					<h1 class="blog-post_title">Tak wyglądały początki</h1>
				</div>
			

			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/1.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
				</div>
			</div>
			<div class="blog-post-before">
				<h1 class="blog-post_title">Dokładne dopasowanie grafiki do ścian</h1>
			</div>


			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/3.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/4.jpg" 
							alt="">
					</div>
				</div>
			</div>
			<div class="blog-post-before">
				<h1 class="blog-post_title">Przygotowanie ścian , gładzie oraz gipsowanie</h1>
			</div>


			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/5.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/6.jpg" 
							alt="">
					</div>
				</div>
			</div>

			<div class="blog-post-before">
				<h1 class="blog-post_title">Ciężka praca fizyczna</h1>
			</div>


			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
				</div>
			</div>
			<div class="blog-post-before">
				<h1 class="blog-post_title">Całkowicie nieistotny etap projektowania w Blenderze i renderowania do 2d (realizowany rok)</h1>
			</div>


			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
				</div>
			</div>
			<div class="blog-post-before">
				<h1 class="blog-post_title">Realizacja bazy 2D</h1>
			</div>


			<div class="blog-post">

				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/koszmiczna/2.jpg" 
							alt="">
					</div>
				</div>
			</div>
		</div>
		@include('templates.footer')
</body>

</html>