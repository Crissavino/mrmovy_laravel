<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	@include('partials.head')
	@yield('head')
</head>
<body>

	<div class="container">
		@include('partials.header')

		@yield('container')

		@include('partials.footer')
	</div>

	@include('partials.scripts')

</body>
</html>