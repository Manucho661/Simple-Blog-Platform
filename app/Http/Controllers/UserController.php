<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    


    public function reg(){

        return view ('reg');
    }

    public function log(){

        return view ('log');
    }



    public function ShowBlogPage( Request $request){

        $registrationData= $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);
        User::create($registrationData);

        return view ('log');
    }

    public function ShowBlogPageOne( Request $request){

        $registrationData= $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);
if (auth()->attempt(['email' => $registrationData['email'], 'password'=> $registrationData['password']])){

        return view ('blog');
}
else{
    
// Authentication failed
return back()->withErrors(['email' => 'Invalid credentials']);

}
    }

}
