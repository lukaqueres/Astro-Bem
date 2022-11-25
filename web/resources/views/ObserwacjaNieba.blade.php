<!DOCTYPE html>
<html>
	<head>
		<title>Astro Bem | Obserwacja Nieba</title>
		<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
		<meta name="keywords" content="Astro, Bem, CanSat" />
		<!--@include('templates.head')-->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/kosmicznaSzkola.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
	</head>
    <body>
    @include('templates.header')
    @include('templates.footer')
</body>
</html>