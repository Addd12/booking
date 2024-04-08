@include('layout.header')
    <title>Users list</title>
</header>
<body>
    <h1>Users list</h1>

    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{$user->name}}</th>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>

@include('layout.footer')