@extends('layout')

@section('title','Usuarios')

	
@section('content')

   <h1>{{ $title }}</h1>
    
    <ul>
	
	@forelse($users as $user)

	<li> {{ $user->name }} -- {{ $user->email}} 
		<a href="{{ route('users.show',['id' => $user->id]) }}">Ver Detalle </a>
	</li>

	@empty
	  <li> No hay usuarios registrados </li>

	@endforelse

	</ul>

@endsection

@section('sidebar')
 
 	<h2> Barra lateral personalizada </h2>

@endsection
