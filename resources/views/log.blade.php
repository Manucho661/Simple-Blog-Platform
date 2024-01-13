<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/blogOne" method="POST">
@csrf
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
<button>Login</button>

    </form>
</body>
</html>