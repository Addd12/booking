@include('layout.header')
    <title>Edit bus</title>
</header>
<body>
    <h1>Edit bus</h1>
    <form action="{{ route('editBus', $bus->id) }}" method='POST'>
        @csrf
        <input type="text" name="brand" placeholder="Brand">
        <input type="number" name="seats" placeholder="Seats">
        <select name="available" id="available">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <button type="submit">Edit</button>
    </form>
</body>

@include('layout.footer')