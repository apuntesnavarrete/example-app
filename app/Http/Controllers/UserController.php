<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pruebaMVC(){
        return "HOLA";
    }

    public function mvc(){
        return view("mvc");
    }
    public function mvcvar(){
        $data = "hola compa";
        return view("mvcvar")->with('data', $data);
    }
}
