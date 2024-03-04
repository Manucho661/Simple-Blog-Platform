<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="/EditPost/{{$posts->id}}" method="POST">
    @csrf
     @method('PUT') 
    <label for="title"></label>
    <input type="text" name="title" value="{{$posts->title}}">
    <label for="body"></label>
    <textarea name="body" id="" cols="30" rows="10" >{{$posts->body}}</textarea>
    
    <button>Save changes</button>

</form> 
</body>
</html>