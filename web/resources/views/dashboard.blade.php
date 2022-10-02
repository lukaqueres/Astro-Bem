<!DOCTYPE html>
<html>
    <head>
        <title>Astro Bem | Dashboard</title>
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
            <div id="header" class="flex">
            	<h2>Astro Bem</h2>
               	<a class="button flex-right">Articles</a>
                <a class="button button-style-2">About Us</a>
            </div>
            DASHBOARD FOR <?php $user = Auth::user();
            echo $user.name ?>
        </div>
    </body>
</html>
