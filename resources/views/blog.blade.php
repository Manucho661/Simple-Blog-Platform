<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @auth
    <div class="BlogTopBar">
<div>Link</div>
<div>Link</div>
<div>Link</div>
<div>
<form action="/logout" method="POST">
@csrf
    <button>Log Out</button>
</form>



</div>

</div>
<br>
    <div class="logo">   <h1>SOFTECH TECHNOLOGIES</h1>  </div>
    
    <div class="cy">
        <div class="Create-Post">
        <h4>CREATE POST</h4>
        <form action="/create_post" method="POST">
        @csrf
        <label for="title"> Title</label>
        <br>
    <input type="text" name="title" id="" placeholder="title">
    <br>
    <br>
    <label for="body"> Body</label>
    <br>
    <textarea name="body" id="" cols="30" rows="10" placeholder="content.."></textarea>
    <br>
    <button>save post</button>
        </form>
        </div>
        {{-- end of the 'Create post class' div --}}


        <div class="YourPostsOne" >

            <h3>Your Posts</h3>
            <div class="yourPosts">
            @foreach($posts as $posts)
            <h5>{{$posts['title']}}</h5>
            <p>{{$posts['body']}}</p>
            <div class="ED">
         <a style="text-decoration:none;" href="/EditPost/{{$posts->id}}">Edit</a>
         <a style="text-decoration:none; margin-left:12px;" href="/DeletePost/{{$posts->id}}">Delete</a>

         <form action="/deletePost/ {{$posts->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>DELETE</button>
        </form>
         </div>
            @endforeach
        </div>
{{-- End of 'your posts' div--}}

        </div>
    {{-- End class 'YourPosts ONE'--}}


    <div class="Categories">
        <h3>Categories</h3>
        </div>
{{-- End of the 'categories' class --}}
   
   
    </div>
{{-- End of the 'Cy' class --}}

    @else
    <h1>login first</h1>
    @endauth 
</body>
</html>