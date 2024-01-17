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

        

            
    <form action="/blogOne" method="POST">
@csrf
<div class="loginform">
    

 <h3 style="margin-left:3vw; color:blue;">SOFTECH</h3> 
<label for="name"> Enter Name</label>
<br>
<input type="text" name="name">
<br>
<br>
<label for="email">Enter email</label>
<br>
<input type="email" name="email">

<br>
<br>
<label for="password"> Enter password</label>
<br>
<input type="password" name="password">
<br>
@error('email')
            <span class="error">{{ $message }}</span>
        @enderror

<br>


<button style="margin-left:5%;">Login</button>




</div>
    </form>



</body>
</html>