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

			<div class="konkurs">
				<h1 class="header">Test</h1>
					<p class="text">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Aenean ornare tincidunt sapien, eget maximus massa volutpat quis. Vestibulum accumsan leo risus, vel hendrerit odio tempus vitae. 
					Quisque tempor lacinia convallis. Pellentesque sagittis sed metus et placerat. 
					Proin tristique leo tortor, tristique faucibus nunc imperdiet nec. Etiam et felis eu tellus congue pretium. 
					Cras facilisis diam euismod magna dignissim, elementum cursus neque maximus.
					 In viverra orci erat. Sed egestas, lorem vel venenatis ullamcorper, sapien purus faucibus sem, eu dictum mauris sem gravida sem. 
					 Curabitur in eros lacus.
					Maecenas porta lacus et laoreet sollicitudin. Nam facilisis malesuada magna eget sagittis. 
					Pellentesque hendrerit fermentum ornare. Sed rhoncus augue eu egestas suscipit. 


					</p>


			</div>
		</div>
			

		<div class="zapychacz">
					
		</div>
	</body>

</html>
