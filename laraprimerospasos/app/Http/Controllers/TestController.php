<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function testing ()
    {
        $user = User::find(3);
        return view("Testing.testing",[ "user" => $user ]);
    }
}
