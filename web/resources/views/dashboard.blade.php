<!DOCTYPE html>
<html>

<head>
	<title>AstroBem | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css" />
	<meta name="description" content="Site about 'AstroBem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<meta name="author" content="Lukas" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script src="/assets/js/dashboard.js"></script>

<body>
	<div class="container">
		@include('dashboard.sidemenu')
		<div class="main">
			<div class="line"></div>
			<div class="content">
				<div class="content-header flex">
					<div class="user-menu dropdown-menu align-right"><button class="dropdown-button">{{ $user->name
							}}</button>
						<div class="dropdown-content cur-user-manage">
							<a href="{{ route('logout')}}">Log out</a>
						</div>
					</div>
				</div>
				<div class="main-content">
				</div>
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<?php // For use of icons, read more here https://ionic.io/ionicons/usage ?>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
    <script type="text/javascript" src="/assets/js/app.js"></script>
</html>
