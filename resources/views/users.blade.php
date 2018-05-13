<!DOCTYPE html>
<html>
<head>
	<title>Listado de Usuarios</title>
</head>
<body>
	<h1>{{ $title }}</h1>

	<ul>
	
	@forelse($users as $user)

	<li> {{ $user }} </li>

	@empty
	  <li> No hay usuarios registrados </li>

	@endforelse
</body>
</html>