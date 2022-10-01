<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Login</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/login.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
		<script type="text/javascript" src="/assets/js/app.js"></script>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		<meta name="author" content="Lukas" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <script src="/assets/js/login.js"></script>
	<body>
		<div id="container" class="absolute-xy-center">
			<p class="head">Login</p>
			<form action="/dashboard/authenticate">
				<label for="email" >Login:</label><input type="email" id="email" name="email" placeholder="Insert your email here" class="y-center" required></input>
				<label for="password" >Password:</label><input type="password" id="password" name="password" placeholder="A safe place to input your password" class="y-center" required></input>
				<button type="submit" class="y-center">Authorize</button>
			</form>
			<?php
				if (isset($data->email)) {
					echo $data->email;
				}
			?>
		</div>
	</body>
</html>
