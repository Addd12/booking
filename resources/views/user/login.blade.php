@include('layout.header')
    
<title>Login</title>
</head>
<body>
    <h1>Login page</h1>
    <form action="login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

@include('layout.footer')