<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function MCreatePost(Request $request){
        $BlogContent = $request -> validate ([
            'body' => 'required',
            'title' => 'required'
        
        ]);
        $BlogContent['user_id'] = auth()->id();

        Post::create($BlogContent);
        
    }
}
