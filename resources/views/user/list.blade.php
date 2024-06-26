@include('layout.header')
    <title>Users list</title>
</header>
<body>
    <h1>Users list</h1>
    
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{$user->name}}</th>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td><a href="{{route('editUser', ['id'=>$user->id] )}}"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

@include('layout.footer')