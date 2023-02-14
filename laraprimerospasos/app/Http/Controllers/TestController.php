<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function testing ()
    {
        $user = User::find(3);
        $html = "<h1>Esto es una prueba</h1>";
        $edad = 28;
        $nombres = ["Juan", "Esteban"];
        $array = [];
        return view("Test.test",compact( "user", "html", "edad" , "nombres" , "array"));
    }
}
