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
					@forelse ( App\Models\User::all() as $u ) {{-- However it shows error here, it works just fine, DO - NOT - TOUCH - IT  --}}
						<div class="card id">
                            @if ( $u->avatar )
                                <img class="avatar" src="{{ $u->avatar }}" alt="User's profile picture'" />
                            @else
                                <img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'" />
                            @endif
                            <p class="name">{{ $u->name }}</p>
                            <p class="email">{{ $u->email }}</p>
							<p class="adnotation">Details</p>
                            <p> @php echo str_replace('-','.',substr($u->created_at, 0, -9)); @endphp </p>
                            <a href="#" class="button-light"> See More </a>
						</div>
					@empty
						<div class="card"><p class="title">There are no users</p></div>
					@endforelse
                    <div class="card">
                        <div class="front">
                            <img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'" />
                            <p class="title"> Create user</p>
                            <a href="#" class="button-full">Add new user</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</body>
</html>
