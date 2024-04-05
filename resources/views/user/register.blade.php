<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register a new user</h1>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"> 
        <input type="email" name="email" placeholder="Email"> <!--the name attribute value is the connection between the input (email) you give to the form and the (email) variable in your controller-->
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>
    
</body>
</html>