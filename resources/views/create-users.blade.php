@extends('layout')

@section('title','Crear Usuario')

@section('content')

	 <h1>{{ $titulo }}</h1>

   <!-- Mostrador de usuarios -->

    @if($errors->any())
    <div class="alert alert-danger">
    <ul> 
    @foreach($errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
    </ul>
    </div>
    @endif

   <form method="POST" action="{{ url('usuarios/crear')}}">
    {!! csrf_field() !!}


   <div class="form-group">
       <label for="name">Nombre:</label>
       <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name">
  </div>

  <div class="form-group">
       <label for="email">Email:</label>
       <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
       <label for="password">Password:</label>
       <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="password">
  </div>

   <button type="submit" value="Guardar Usuario">Guardar Usuario</button>

   </form>
   <a href="{{ url()->previous()}}">Regresar atras </a>
@endsection

@section('sidebar')

	<h2> Barra Lateral Mostrado </h2>

@endsection