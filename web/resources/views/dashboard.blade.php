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
						<h1>Accounts</h1>
						<table id="users-details-table">
							<tr>
								<th>Name</th>
								<th>Email</th>
                                <th>Created</th>
							</tr>
						<?php
						foreach ( App\Models\User::all() as $u ) { 
							echo '<tr class="user-details"><td class="name">' . $u->name .'</td><td class="email">' . $u->email .'</td><td>' . str_replace('-','.',substr($u->created_at, 0, -9)) . '</td></tr>';
						}
						unset($u);
						?>
                        @if (session('newUserStatus'))
						<tr id="add-new-user-reveal-button" class="hidden"><td colspan="4"><button onclick="showNewUserMenu()"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></td></tr>
                        <tr id="add-new-user-form" ><td colspan="3">
                        @else
						<tr id="add-new-user-reveal-button"><td colspan="3"><button onclick="showNewUserMenu()"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></td></tr>
                        <tr id="add-new-user-form" class="hidden" ><td colspan="3">
                        @endif
                        <form method="POST" action="{{ route('addUser') }}">
                            @csrf
                            <label for="name">Name:</label><input type="text" id="name" name="name" value="{{ old('name') }}"/>
                            <label for="email">Email:</label><input type="email" id="email" name="email" value="{{ old('email') }}"/>
                            <label for="password">Password:</label><input type="password" id="password" name="password"/>
                            <button type="submit">Add user</button>
                        </form>
                        <?php //@if (session('newUserStatus')) ?>
                        <div class="new-user-status">
					        {{ session('newUserStatus') }}
				        </div>
                        <?php //@endif ?>
                        </td></tr>
						</table>

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
