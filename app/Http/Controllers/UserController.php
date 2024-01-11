<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function register(Request $request){

        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'

        ]);
        User::create($incomingFields);
        return "Hello, it is time to login";
    }


    public function reg(){
        return view ('reg');
    }
}
