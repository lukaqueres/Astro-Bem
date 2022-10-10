<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/login.css') }}" />
        @include('templates.head')
	</head>
    <script src="/assets/js/form.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>
	<body>
		<div id="container" class="absolute-xy-center container">
			<p class="head">Login</p>
			<form method="POST" action="{{ route('authenticate') }}" onsubmit="return loginValidate(event)" novalidate>
				@csrf
				<label for="email" >Email:</label><input type="email" id="email" name="email" placeholder="Insert your email here" title="Email input" class="x-center" value="{{ old('email') }}"></input>
				<label for="password" >Password:</label><input type="password" id="password" name="password" placeholder="A safe place to input your password" title="Password input" class="x-center"></input>
				<button type="submit" class="x-center" title="Send login credentials">Authorize</button>
			</form>
            <script>
                function loginValidate(e) { // {{-- - This function validates login form. Must return `true` to send request - --}}
                    const form = new Form(e.target, 'error');
                    return form.validate({
                        'email': ['trim', 'required', 'email'],
                        'password': ['required'],
                    });
                }
            </script>
            <div id="error">
			    @error('email')
                    <div class="alert">{{ $message }}</div>
                @enderror
                @error('password')
                    <div class="alert">{{ $message }}</div>
                @enderror
            </div>
		</div>
	</body>
</html>
