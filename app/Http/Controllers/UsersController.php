<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

    	$title = "Listado de Usuarios";

    	if(request()->has('empty')){

    		$users = [];

    	}else{

    	$users = ["Joel",'Elie','Manu'];
    	
    	//return view('users',['users' => $users, 'title' => "Listado de Usuarios"]);
     }

	  	return view('users',compact('title','users'));

    }

    public function show($id){

    $title = "Mostrando usuario";

    return view('users-show',compact('id','title'));

    }

    public function create(){

    return "Creacion nuevo usuario";
    }

    public function edit($id){

     return "Editando usuario {$id}";

    }

    public function info(){

    	if(request()->has('pass')){

    		$admin = ['Manu','Paez','ManuFx7','Me gustan las bicis'];	
    	}else{
    	  $admin = []; 
    	}
   	return view("info",compact("admin"));
    }
}
