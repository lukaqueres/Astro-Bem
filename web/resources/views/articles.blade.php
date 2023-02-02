<!DOCTYPE html>
<html>

<head class="dark-theme">
	<title>Astro Bem | Articles</title>
	<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<!--@include('templates.head')-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/articles.css') }}" />
	
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
							<li class="nav__item"><a href="/articles" class="nav__link active">Articles</a></li>
							<li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a>
							</li>
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

		<h1 class="header-text">Aktualności</h1>
		<div class="blog-list">

			<div class="blog-post">
				<div class="blog-post_img">
					<video width="100%" height="100%" controls>
						<source src="assets/videos/02022023.mp4" type="video/mp4">
					</video>
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>02 Jan 2023</span>
					</div>
					<h1 class="blog-post_title">Working on CDR</h1>
					<p class="blog-post_text">
						Hi! While working on CDR, we made a short promotion clip. Enjoy!
					</p>

				</div>
			</div>
		</div>
		@include('templates.footer')
</body>

</html>