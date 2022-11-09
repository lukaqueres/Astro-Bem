<!DOCTYPE html>
<html>
<head>
    <title>Astro Bem | Accounts</title>
    @include('templates.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/dashboard.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/articles.css') }}"/>
</head>
<body>
    <div class="container">
        @include('dashboard.sidemenu')
        <div class="art">

            Articles
            <div class = "ustawienia">

                ustawienia będą w gridzie

            </div>

            <div class="artykul">

                tu będzie artykul

            </div>

        </div>
    </div>
</body>
</html>
