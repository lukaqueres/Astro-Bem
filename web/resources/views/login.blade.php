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
		<div id="container" class="absolute-xy-center container">
			<p class="head">Login</p>
			<form method="POST" action="{{ route('authenticate') }}" onsubmit="return loginValidate()" novalidate>
				@csrf
				<label for="email" >Email:</label><input type="email" id="email" name="email" placeholder="Insert your email here" class="x-center" value="{{ old('email') }}"></input>
				<label for="password" >Password:</label><input type="password" id="password" name="password" placeholder="A safe place to input your password" class="x-center"></input>
				<button type="submit" class="x-center">Authorize</button>
			</form>
			@error('email')
                <div class="alert">{{ $message }}</div>
            @enderror
            @error('password')
                <div class="alert">{{ $message }}</div>
            @enderror
		</div>
	</body>
</html>
