@extends('layout')

@section('title','Editando Usuario {$id}')

@section('content')

	 <h1>{{ $title }}</h1>

   		Mostrando detalle del usuario: {{ $id }}

@endsection

@section('sidebar')

	<h2> Barra Lateral Mostrado </h2>

@endsection