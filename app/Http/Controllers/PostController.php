<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function MCreatePost(Request $request){
        $BlogContent = $request -> validate ([
            'body' => 'required',
            'title' => 'required',
            'categories' => 'required'
        
        ]);
        $BlogContent['user_id'] = auth()->id();

        Post::create($BlogContent);

        $blogPosts=Post::where('user_id',auth()->id())->get();
        return view('blog', ['posts' =>$blogPosts]);
    }

    public function Logout(){
        auth()->logout();
        return view('index');
    }

public function EditPostF(Post $posts){


return view(' EditPost',['posts' =>$posts]);

}

public function UpdatePostF(Post $posts, Request $request){
$IncommingFields= $request -> validate ([
    'title' => 'required',
    'body' => 'required'
]);


$posts->update($IncommingFields );
$blogPosts=auth()-> User()->retrieveposts()->latest()->get();

 return view('blog', ['posts' =>$blogPosts] );

}


public function deletePostF(Post $posts){
    if(auth()->user()->id===$posts['user_id']){
        $posts->delete();
    }
    $blogPosts=Post::where('user_id',auth()->id())->get();
 return view('blog', ['postsz' =>$blogPosts]);
}

}