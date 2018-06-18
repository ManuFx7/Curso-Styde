<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    public function index(){

    	$title = "Listado de Usuarios";

        //$users = DB::table('users')->get();
        $users = User::all();

        return view('users',compact('title','users'));
    	
    	//return view('users',['users' => $users, 'title' => "Listado de Usuarios"]);

	  	
    }

    public function show(User $user){

    $title = "Mostrando usuario";

    //$user = User::findOrFail($id);

    /*if($user == null){

        return response()->view('errors.404',[], 404);
    }*/

    return view('users-show',compact('user','title'));

    }

    public function create(){

    $titulo = "Creación de Usuario";
    return view('create-users',compact('titulo'));
    }

    public function store(){

      $datos = request()->validate([
        'name' => 'required',
        'email' => ['required','email','unique:users,email'],
        'password' => 'required'
      ]);

      /* Pedir solo estos datos */
      //$datos = request()->only('name','email','password');

      User::create([
        'name' => $datos['name'],
        'email' => $datos['email'],
        'password' => $datos['password']
      ]);

      return redirect()->route('users');

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
