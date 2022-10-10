<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Accounts</title>
		@include('templates.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/dashboard.css') }}" />
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
