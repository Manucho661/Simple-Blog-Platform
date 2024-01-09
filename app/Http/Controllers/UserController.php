<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'

        ]);
        return "Hello, it is time to login";
    }
}
