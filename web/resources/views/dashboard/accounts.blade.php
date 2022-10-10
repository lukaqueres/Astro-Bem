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
					</div>
                </div>
			</div>
		</div>
	</body>
</html>
