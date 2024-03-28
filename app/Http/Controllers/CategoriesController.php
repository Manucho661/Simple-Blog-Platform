<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function lifestyle(){
        $blogPosts = Post::where('user_id', auth()->id())
                ->where('categories', 'lifestyle')
                ->get();
                return view('blog', ['posts' =>$blogPosts]);
    }
    

    public function education(){
        $blogPosts = Post::where('user_id', auth()->id())
                ->where('categories', 'education')
                ->get();
                return view('blog', ['posts' =>$blogPosts]);
    }

    public function politics(){
        $blogPosts = Post::where('user_id', auth()->id())
                ->where('categories', 'politics')
                ->get();
                return view('blog', ['posts' =>$blogPosts]);
    }
    public function relationships(){
        $blogPosts = Post::where('user_id', auth()->id())
                ->where('categories', 'relationships')
                ->get();
                return view('blog', ['posts' =>$blogPosts]);
    }
    public function all(){
                return redirect('/');
    }
}
