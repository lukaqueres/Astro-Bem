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
		<div class="container">
			<div id="header" class="flex">
				<img class="logo" src="/assets/images/logo.png"/>
				<h2>Astro Bem</h2>
				{{--
				<a class="button flex-right">Articles</a>
				<a class="button button-style-2">About Us</a>
				--}}
			</div>
			<div class="image-holder">
                <img src="assets/images/bckg_pic.png" />
			</div>
		</div>
	</body>
</html>
