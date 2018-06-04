@extends('layout')

@section('title','Editando Usuario {$id}')

@section('content')

	 <h1>{{ $title }}</h1>

   		Mostrando detalle del usuario: {{ $user->name }}

   		<ul>
   			<li> Nombre del Usuario {{ $user->name }} </li>
   			<li> Correo del Usuario: {{ $user->email }} </li>
   		</ul>

   		<!--<a href="{{ url()->previous() }}"> Regresar </a> -->

   		<!--<a href="{{ url('/usuarios') }}"> Volver atras </a> -->

   		<!--<a href="{{ action('UsersController@index') }}"> Regresar al listado de usuarios </a> -->

   		<a href="{{ route('users') }}"> Volver atras </a>

@endsection

@section('sidebar')

	<h2> Barra Lateral Mostrado </h2>

@endsection