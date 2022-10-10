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
				<div id="users-details">
				    <div class="columns-names">
					    <p>Name</p>
						<p>Email</p>
					    <p class="create-date-column">Created</p>
					</div>
					@forelse ( App\Models\User::all() as $u )
						<div class="user-details"><p class="name">{{ $u->name }}</p><p class="email">{{ $u->email }}</p><p class="create-date"><?php echo str_replace('-','.',substr($u->created_at, 0, -9)); ?></p></div>
					@empty
						<div>There are no users</div>
					@endforelse
					@if (session('addUserStatus'))
						<div class="new-user-status">
							<p> {{ session('addUserStatus') }} </p>
						</div>
					@endif
					@if (session('addUserError'))
						<div id="add-new-user-reveal-button" class="hidden"><button onclick="showNewUserMenu()"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></div>
						<div id="add-new-user-form" >
					@else
						<div id="add-new-user-reveal"><button onclick="showNewUserMenu()" class="x-center add-new-user-reveal-button"><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></div>
						<div id="add-new-user-form" class="hidden" >
					@endif
					<form id="addUser" method="POST" action="{{ route('addUser') }}" novalidate onsubmit="return validateNewUserForm(event)">
						@csrf
						<label for="name">Name:</label><input type="text" id="name" name="name" value="{{ old('name') }}"/>
						<label for="email">Email:</label><input type="email" id="email" name="email" value="{{ old('email') }}"/>
						<label for="password">Password:</label><input type="password" id="password" name="password"/>
						<button type="submit">Add user</button>
					</form>
					@if (session('addUserError'))
						<div class="new-user-error">
						   <p> {{ session('addUserError') }} </p>
						</div>
					@endif
					</div>
                </div>
			</div>
		</div>
	</body>
</html>
