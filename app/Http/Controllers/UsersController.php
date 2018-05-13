<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

	return "Zona Usuarios";
    }

    public function show($id){

    return "Usuario {$id}";

    }

    public function create(){

    return "Creacion nuevo usuario";
    }

    public function edit($id){

     return "Editando usuario {$id}";

    }
}
