{{-- These lines will be injected in place of `@stack('body')` --}}
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
						<li class="nav__item"><a href= "/articles" class="nav__link active">Articles</a></li>
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