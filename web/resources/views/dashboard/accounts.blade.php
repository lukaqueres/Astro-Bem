<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Accounts</title>
		@include('templates.head')
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/dashboard.css') }}" />
		

	</head>
	<body>
		<div class="container">
			@include('dashboard.sidemenu')
			<div class="main">
				{{-- <div class="cards-container"> --}}
                <div class="grid">
					@forelse ( App\Models\User::all() as $u ) {{-- However it shows error here, it works just fine, DO - NOT - TOUCH - IT  --}}

                        <div class="konto">
                        @if ( $u->avatar )
                            <img src="{{ $u->avatar }}" alt="User's profile picture">
                            @else
                                <img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'" />
                            @endif
                            <div class="nazwa">
                                <h2>nazwa</h2>
                                <p> nazwa użytkownika</p>
                            </div>
                            <div class="OS">
                                <h2>Osiagnięcia</h2>
                                <p>w życiu </br>dużo osiągnąłem </br>czyli nic</p>
                            </div>
                            <div class="EM">
                                <h2>E-mail</h2>
                                <p>email</p>
                            </div>
                        </div>	

					@empty
						<div class="card"><p class="title">There are no users</p></div>
					@endforelse
                    
                </div>
			</div>
		</div>
	</body>
</html>
