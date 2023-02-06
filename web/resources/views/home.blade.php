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
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						We would like to invite you to our Twitter account, where we will as well post about our project's progress!
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						On 28th January our group decided to go for a series of field tests of radio communication in Parzniew (Masovian Voivodeship). The tests were successful despite demanding and unsettled weather and we managed to establish a connection between the broadcasting and receiving station on a 1 km distance.
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						On 13th January 2023 our group met with our mentor Paweł Witkowski. In a meeting we had been discussing ways of radio communication between CanSat and our ground base. This gathering was a huge brainstorm, opening up for us many new possibilities of communication and building antennas for the project, but also many new secondary goals, which we can write about in our documentation.
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						We would like to invite you for our interview given on Radio Bogoria!
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						Our group just gave an interview for local radio. We would like to invite everyone for the broadcast tomorrow (7.12.2022) at 7:45. Replay of the interview will be aired at 16:45.
•FM frequency: 94,5
•Online player link: http://radiobogoria.pl/player
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						We got through! After sending our first report (PDR) we kept our fingers crossed for our work and recently got info on passing 1st stage! It's time to move from words to deeds and start building our satellite. We recently started learning how to code an Arduino, which will be CanSat's heart. We are counting on more successes in the future, and we are dreaming of launching our satellite in finals 🚀
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
			<div class="blog-post">
				<div class="blog-post_img">
					<img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
				<div class="blog-post_info">
					<div class="blog-post_date">
						<span>XXX</span>
					</div>
					<h1 class="blog-post_title">XXX</h1>
					<p class="blog-post_text">
						We did it! We just sent our first report of our mission! After a month and a half of working together on PDR (Preliminary Design Review), we can rest a little while waiting for results. The whole team worked on this project alone while overcoming many problems encountered during meetings. We’ve created a strong group of friends, where everybody can trust each other. We keep our fingers crossed for our work, we are counting on moving further in the competition and continuing our adventure with CanSat.
					</p>
					<a href="XXX"
						class="blog-post_cta">Facebook Post Link</a>
				</div>
			</div>
		</div>



		@include('templates.footer')
</body>

</html>
