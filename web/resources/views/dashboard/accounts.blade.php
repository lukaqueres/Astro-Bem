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
				<div class="cards-container">
					@forelse ( App\Models\User::all() as $u ) {{-- However it shows error here, it works just fine, DO - NOT - TOUCH - IT  --}}
					
					<div class="flex">
        <!-- div lewa strona + obrazek-->
        <div class="lewa">
		@if ( $u->avatar )
            <img src="{{ $u->avatar }}" class="imgp">
		@else
        <img class="imgp" src="/assets/images/default_picture.png" alt="User's profile picture'"  />
    	@endif
            <p>{{ $u->name }}</p>
        </div>
        <!-- div Prawa Strona-->
        <div class="prawo">
            <div class="info">
                <!-- div Informacje-->
                <h2>Information</h2>
                <div class="data">

				<p>Account created at: @php echo str_replace('-','.',substr($u->created_at, 0, -9)); @endphp </p>

                </div>
            </div>
            <!-- div email-->
            <div class="email">
                <h2>mail</h2>
                <div class="poczta">
                    
                    <p>{{ $u->email }}</p>
                    

                </div>

            </div>
            <!-- div projekty-->
            <div class="pro">
                <h2>projekty</h2>
                <div class="uzn">

                    <p>Jak to widzisz to działa</p>

                </div>
            </div >


        </div>
						
					@empty
						<div class="card"><p class="title">There are no users</p></div>
					@endforelse
                    	<div class="card">
                        <div class="front">
                            <img class="avatar" src="/assets/images/default_picture.png" alt="User's profile picture'" />
                            <p class="title"> Create user</p>
                            <a href="{{ route('accounts_create') }}" class="button-full">Add new user</a>
                        </div>
                    	</div>
					
                </div>
			</div>
		</div>
	</body>
</html>
