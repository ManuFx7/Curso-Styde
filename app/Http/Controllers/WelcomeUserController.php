<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname=null){

    if(!$nickname){
		return "Hola nombre {$name} no tienes apodo";
	}else{
		return "Hola {$name} con nick {$nickname}";
	}
    
   }
}
