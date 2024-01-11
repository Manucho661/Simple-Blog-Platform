<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    


    public function reg(){

        return view ('reg');
    }

    public function ShowBlogPage( Request $request){

        $registrationData= $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);
        User::create($registrationData);

        return view ('blog');
    }
}
