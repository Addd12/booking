@include('layout.header')
    <title>Bus list</title>
</header>
<body>
    <h1>Buses list</h1>
    @foreach($buses as $bus)
    <ul>
        <li>{{$bus->brand}} with {{$bus->seats}} seats.</li>
    </ul>
    @endforeach
</body>

@include('layout.footer')