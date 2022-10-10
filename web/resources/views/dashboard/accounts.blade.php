<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Login</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/dashboard.css') }}" />
		@include('templates.head')
	</head>
    <body>
        <div class="container">
            @include('templates.menus.sidedashboard')
            <div class="main">
                Accounts
            </div>
        </div>
	</body>
</html>
