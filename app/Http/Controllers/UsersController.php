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
