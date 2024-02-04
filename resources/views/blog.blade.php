<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    <h1>WELCOME TO BLOG CREATION PAGE</h1>
    <h4>CREATE POST</h4>
    <form action="/create_post" method="POST">
    @csrf
    <label for="title"> Title</label>
    <br>
<input type="text" name="title" id="" placeholder="title">
<br>
<br>
<label for="body"> Body</label>
<textarea name="body" id="" cols="30" rows="10" placeholder="content.."></textarea>
<button>save post</button>
    </form>
<h3>Your Posts</h3>
@foreach($posts as $posts)
<h5>{{$posts['title']}}</h5>
<h5>{{$posts['body']}}</h5>
@endforeach
    @else
    <h1>login first</h1>
    @endauth 
</body>
</html>