@extends('layout')
 @section('content')
	<h1> Info </h1>
	<ul>
	@forelse($admin as $adm)
	<li> {{ $adm}} </li>
	@empty
	<hr><h2>No tienes acceso aqui </h2>
	@endforelse
	</ul>
 @endsection
