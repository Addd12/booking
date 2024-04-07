@include('layout.header')
    <title>Bus list</title>
</header>
<body>
    <h1>Buses list</h1>

    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Brand</th>
        <th scope="col">Seats</th>
        <th scope="col">Available</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buses as $bus)
        <tr>
            <th>{{$bus->brand}}</th>
            <td>{{$bus->seats}}</td>
            <td>{{$bus->available}}</td>
            <td><a href="{{ route('editBus', ['id' => $bus->id]) }}"><i class="bi bi-pencil-square"></i></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>

@include('layout.footer')