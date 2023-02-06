{{-- These lines will be injected in place of `@stack('body')` --}}


<!-- Przewijanie Zdjęc Hero Slider -->
<div class="slider">
	<!-- Aby Dodać Zdjęcie trzeba dodać nowy element myslide fade oraz nową kropkę ! -->
	<div class="myslide fade">
		<div class="txt">
			<h1>Welcome to Astrobem</h1>
			<p></p>
		</div>
		<img src="assets/images/bckg_pic.png" style="width: 100%; height: 100%;">
	</div>

	<div class="myslide fade">
		<div class="txt">
			<h1>Jakiś Tytuł</h1>
			<p>Lorem Impum Dolor Si Amen</p>
		</div>
		<img src="assets/images/baner2.png" style="width: 100%; height: 100%;">
	</div>

	<div class="myslide fade">
		<div class="txt">
			<h1>Jakiś Tytuł</h1>
			<p>Lorem Impum Dolor Si Amen</p>
		</div>
		<img src="assets/images/baner3.jpg" style="width: 100%; height: 100%;">
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

	<ion-icon name="caret-forward" class="next" onclick="plusSlides(1)"></ion-icon>
	<ion-icon name="caret-back" class="prev" onclick="plusSlides(-1)"></ion-icon>

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