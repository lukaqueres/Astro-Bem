<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Home</title>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		@include('templates.head')
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/home.css') }}" />
	</head>
	<body>
	<div id="header" class="flex">
				<img class="logo" src="/assets/images/logo.png"/>
				<h2>Astro Bem</h2>
				{{--
				<a class="button flex-right">Articles</a>
				<a class="button button-style-2">About Us</a>
				--}}
		<div class="container">
			
			</div>
			<div class="image-holder">
                <img class="image" src="assets/images/bckg_pic.png" />
			</div>
			<div class="back-ground-color">
				<h1 class="header"> Welcome to Astrobem, school space science passionates </h1>
				<p class="text">
					We are working in our school, cooperationg with many teachers of various subjects.</br>
					Currently we are participating in Polish edition of <i>CanSat</i> project, that is organizated by POLSA - Polish Space Agency.

					Now we are right after sending our PDR documentation - first step in order to qualify to next stage of competition.
				</p>
			</div>
		</div>
		<div class="zapychacz">

		</div>
	</body>
</html>
