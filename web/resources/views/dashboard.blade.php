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
                        <ul class="user-details-list">
                        <?php
                        foreach ( App\Models\User::all() as $u ) { 
                            echo '<li class="user-details-expandable"><p class="username">' . $u->name .'</p><p class="email">' . $u->email .'</p></li>';
                        }
                        unset($u);
                        ?>
                        <li><button><ion-icon name="add-outline"></ion-icon></button><p>Add user</p></li>
                        </ul>

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
