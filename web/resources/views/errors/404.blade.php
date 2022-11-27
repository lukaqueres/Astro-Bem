<!DOCTYPE html>
<html>

<head>
	<title>Astro Bem | 404 Error</title>
	<meta name="description" content="Site about 'Astro Bem' - group participating in 'CanSat' project" />
	<meta name="keywords" content="Astro, Bem, CanSat" />
	<!--@include('templates.head')-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}" />
</head>
<style>

</style>

<body>
	<h1 id="H1" style="color: var(--gradient-text); text-align: center; font-size: 60px;">Error 404</h1>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	@include('templates.footer')

	<script>
		let footer = document.querySelector('footer');
		let height = footer.offsetHeight;

		// H1
		let h1 = document.querySelector('#H1');
		h1.style.marginTop = ((window.innerHeight - (height + 200)) / 2) + "px";
		h1.style.marginBottom = ((window.innerHeight - (height + 200)) / 2) + "px";
	</script>
</body>

</html>