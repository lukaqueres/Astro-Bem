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
				<div id="cards-container">
					@forelse ( App\Models\User::all() as $u )
						<div class="card"><p class="title">{{ $u->name }}</p>
                            <p class="email">{{ $u->email }}</p>
                            <p class="preview"><?php echo str_replace('-','.',substr($u->created_at, 0, -9)); ?></p>
                            <div class="content">
                                <p> Description </p>
                                <p><?php echo str_replace('-','.',substr($u->created_at, 0, -9)); ?></p>
                                <a href="#"> See More </a>
                            </div>
                        </div>
					@empty
						<div class="card"><p class="title">There are no users</p></div>
					@endforelse
					</div>
                </div>
			</div>
		</div>
	</body>
</html>
