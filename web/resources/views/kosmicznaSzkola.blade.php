<!DOCTYPE html>
<html>

<head>
	<title>Astro Bem | Kosmiczna Szkoła</title>
	<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<!--@include('templates.head')-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/kosmicznaSzkola.css') }}" />
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
					<a href="https://uczniowie.moa.edu.pl/kamerki-otworkowe-nauczka-za-nauczka/"
						class="blog-post_cta">Kamerki otworkowe – nauczka za nauczką</a>
				</div>
			</div>
		</div>	
		<div class="blog-list">
			<div class="blog-post">
				<div class="blog-grid">	
					<div class="blog-post_img">
						<img src="https://raw.githubusercontent.com/lukaqueres/Astro-Bem/abydzialalo/web/public/assets/images/Orle/Orle2.JPG"  
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Orle/Orle3.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="https://raw.githubusercontent.com/lukaqueres/Astro-Bem/abydzialalo/web/public/assets/images/Orle/Orle4.JPG" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="https://raw.githubusercontent.com/lukaqueres/Astro-Bem/abydzialalo/web/public/assets/images/Orle/Orle10.JPG" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Orle/pp.jpg" 
							alt="">
					</div>
					<div class="blog-post_img">
						<img src="assets/images/Orle/Orle7.jpg" 
							alt="">
					</div>
				</div>
			</div>
		</div>

		@include('templates.footer')
</body>

</html>