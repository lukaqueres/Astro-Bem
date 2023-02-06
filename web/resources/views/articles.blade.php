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
		<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>19.01.2023</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						On 13th January 2023 our group met with our mentor Paweł Witkowski. In a meeting we had been discussing ways of radio communication between CanSat and our ground base. This gathering was a huge brainstorm, opening up for us many new possibilities of communication and building antennas for the project, but also many new secondary goals, which we can write about in our documentation.
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
		@include('templates.footer')
</body>

</html>