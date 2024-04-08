@include('layout.header')
    <title>Edit bus</title>
</header>
<body>
    <h1>Edit bus</h1>
    <form action="{{ route('editBus', $bus->id) }}" method='POST'>
        @csrf
        <input type="text" name="brand" placeholder="Brand" value="{{$bus->brand}}">
        <input type="number" name="seats" placeholder="Seats" value="{{$bus->seats}}">
        <select name="available" id="available">
            <option value="1" {{ $bus->available == '1' ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ $bus->available == '0' ? 'selected' : '' }}>No</option>
        </select>
        <button type="submit">Edit</button>
    </form>
</body>

@include('layout.footer')