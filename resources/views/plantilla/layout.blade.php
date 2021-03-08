
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Actividades extracurriculares</title>
  
  @include('plantilla.styles')<!-- van en el head -->
  @stack('styles')
</head>
<body>
	<header class="space-inter">
		<div class="container container-flex space-between">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
				<a class="navbar-brand">  Actividades de alumnos</a>
			</nav>
		</div>
	</header><br>
	<div class="container">
		@yield('content')
	</div>
	@stack('scripts')
</body>
</html>