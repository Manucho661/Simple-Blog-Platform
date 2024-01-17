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
    <form action="/blog" method="POST">
@csrf
<div class="loginform">
    <h3 style="margin-left:3vw; color:blue;">SOFTECH</h3> 

<label for="name"> Enter Name</label>
<input type="text" name="name">
<br>
<br>
<label for="email">Enter email</label>
<input type="email" name="email">
<br>
<br>
<label for="password"> Enter password</label>
<input type="password" name="password">
<br>
<br>
<button>Register</button>
</div>
    </form>
</body>
</html>