<!DOCTYPE html>
<html>

<head>
	<title>Astro Bem | CanSat</title>
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
						<li class="nav__item"><a href="/cansat" class="nav__link active">CanSat</a></li>
						<li class="nav__item"><a href="/articles" class="nav__link">Articles</a></li>
						<li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a></li>
						<li class="nav__item"><a href="/obserwacja-nieba" class="nav__link">Obserwacja Nieba</a></li>
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

	<h1 class="header-text">CanSat</h1>
		<div class="blog-list">
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="assets/images/Articles/twiter.jpg" 
						alt="" style="object-position: top">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>30.01.2023</span>
					</div>
					<h1 class="blog-post_title">Twitter account</h1>
					<p class="blog-post_text">
						
						CanSat is an international competition of the European Space Agency. 
						It consists in the independent construction of space probe simulators by students and conducting scientific research using them. 
						Thanks to this, young people have a chance to get involved in an original scientific and engineering project, 
						already at the stage of school education.
					</p>
					<a href="https://www.facebook.com/permalink.php?story_fbid=pfbid0rHEYPtU4S3c1tX1nYMpyWpmTsBHES5Af4XLwAhuq6ZePw9VeFnNjKpt2KH1bYUV1l&id=100086799296298"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
		</div>
	@include('templates.footer')
</body>

</html>