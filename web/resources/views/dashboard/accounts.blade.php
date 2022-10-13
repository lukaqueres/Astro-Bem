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
				<div class="cards-container">
					@forelse ( App\Models\User::all() as $u ) {{-- However it shows error here, it works just fine, DO NOT TOUCH IT  --}}
						<div class="card">
							<div class="main-content">
								@if ( $u->avatar )
									<img class="avatar" src="{{ $u->avatar }}" alt="User's profile picture'">
								@else 
									<img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'">
								@endif
								<p class="title">{{ $u->name }}</p>
								<p class="adnotation">Hover for details</p>
							</div>
							<div class="card-content">
								<p> Description </p>
								<p>
									<?php echo str_replace('-','.',substr($u->created_at, 0, -9)); ?>
								</p>
								<p class="email">{{ $u->email }}</p>
								<a href="#" class="button-light"> See More </a>
							</div>
						</div>
					@empty
						<div class="card"><p class="title">There are no users</p></div>
					@endforelse
                    <div class="card">
                        <div class="main-content">
                            <img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'" />
                            <p class="title"> Create user</p>
                            <a>Add new user</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</body>
</html>
