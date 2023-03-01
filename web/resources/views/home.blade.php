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
							<li class="nav__item"><a href="/cansat" class="nav__link">CanSat</a></li>
							<li class="nav__item"><a href="/articles" class="nav__link">Articles</a></li>
							<li class="nav__item"><a href="/kosmiczna-szkola" class="nav__link">Kosmiczna szkoła</a></li>
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

		<div class="welcome">
			<h1>Welcome to Astrobem, school space science passionates</h1>
			<p>We are working in our school, cooperationg with many teachers of various subjects.
				Currently we are participating in Polish edition of CanSat project, that is organizated by POLSA -
				Polish Space Agency. Now we are right after sending our PDR documentation - first step in order to
				qualify to next stage of competition.</p>
		</div>
		<h1 class="header-text">Aktualności</h1>
		<div class="blog-list">
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="assets/images/konkurs.jpg"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>12 Nov 2021</span>
					</div>
					<h1 class="blog-post_title">Konkurs ,, Astro-Bem ,, Zaćmienie Słońca widziane smartfonem” - Zakończony</h1>
					<p class="blog-post_text">
						Dnia 25-10-2022 obserwowaliśmy zaćmienie słońca. Okazało się, że wielu z nas zrobiło śliczne
						zdjęcia, dlatego ogłaszamy konkurs na najładniejszą fotografię. 
						<br><br>
						Po lewej stronie  zwycięskie zdjęcie z konkursu po więcej informacji zapraszamy na Facebooka.
					</p>
					<a href="https://www.facebook.com/ZSBEM/posts/pfbid02m2D6kcbN4eyC7x2ULMPYFH9ttq18MyYPPHQUETLgUWqoP7Z63xNToEc799x2eXZvl"
						class="blog-post_cta">Link Do Facebooka</a>
				</div>
			</div>
		</div>



		@include('templates.footer')
</body>

</html>
