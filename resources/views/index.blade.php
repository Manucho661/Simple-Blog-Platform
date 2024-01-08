<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div style="position: relative; left:30%; color:blue">   <h1>SOFTECH TECHNOLOGIES</h1> </div>
    <p style="margin-left:10px">Welcome to SOFTECH technologies, a platform enables you to create and publish beautiful blog posts</p>
    <form action="/register" method="POST">
        @csrf
        <label for="email">Enter email</label>
<input type="email" name="email" placeholder="emmanu@gmail.com">
<label for="password">Enter password</label>
<input type="password" name="password" >
<button>Register</button>

    </form>
</body>
</html>