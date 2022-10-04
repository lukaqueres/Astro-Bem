<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Dashboard</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
		<script type="text/javascript" src="/assets/js/app.js"></script>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		<meta name="author" content="Lukas" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <script src="/assets/js/dashboard.js"></script>
	<body>
		<div class="container">
			<div id="aside-menu">
				<div class="user-display">
					<button class="more-menu"><ion-icon name="apps-outline"></ion-icon></button>
					<p class="username"> {{ $user->name }} </p>
					<p class="email"> {{ $user->email }} </p>
				</div>
				<a href="{{ route('dashboard') }}/accounts">Accounts</a>
			</div>
			<div class="main">
				<div class="line"></div>
				<div class="main-content">
					@if ($category == 'accounts')
						<div id="users-details">
							<div class="columns-names">
								<p>Name</p>
								<p>Email</p>
                                <p>Created</p>
							</div>
						<?php
						foreach ( App\Models\User::all() as $u ) { 
							echo '<div class="user-details"><p class="name">' . $u->name .'</p><p class="email">' . $u->email .'</p><p class="create-date">' . str_replace('-','.',substr($u->created_at, 0, -9)) . '</p></div>';
						}
						unset($u);
						?>
                        @if (session('newUserStatus'))
						    <div id="add-new-user-reveal-button" class="hidden"><button onclick="showNewUserMenu()"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></div>
                            <div id="add-new-user-form" >
                        @else
						    <div id="add-new-user-reveal-button"><button onclick="showNewUserMenu()"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></div>
                            <div id="add-new-user-form" class="hidden" >
                        @endif
                            <form method="POST" action="{{ route('addUser') }}">
                                @csrf
                                <label for="name">Name:</label><input type="text" id="name" name="name" value="{{ old('name') }}"/>
                                <label for="email">Email:</label><input type="email" id="email" name="email" value="{{ old('email') }}"/>
                                <label for="password">Password:</label><input type="password" id="password" name="password"/>
                                <button type="submit">Add user</button>
                            </form>
                            @if (session('newUserStatus'))
                                <div class="new-user-status">
					               <p> {{ session('newUserStatus') }} </p>
				                </div>
                            @endif
                            </div>
						</div>

					@else
						Content
					@endif
					
				</div>
			</div>
		</div>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> <?php // For use of icons, read more here https://ionic.io/ionicons/usage ?>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>
