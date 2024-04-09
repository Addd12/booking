@include('layout.header')
<title>Bus list</title>
</header>
<body>
    <h1>Buses list</h1>
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <a class="btn btn-success mb-3" href="/addBus" role="button">+ Add new bus</a>

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
                        <td>
                            <a href="{{ route('editBus', ['id' => $bus->id]) }}"><i class="bi bi-pencil-square"></i></a> <!-- here the 'id' gets the value of $bus->id and it is the same as the id in the url: /editBus/{id} -->
                            <form action="{{ route('delete', ['id' => $bus->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

@include('layout.footer')