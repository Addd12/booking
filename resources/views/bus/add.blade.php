@include('layout.header')
    <title>Add bus</title>
</header>
<body>
    <h1>Add bus</h1>
    <form action="addBus" method='POST'>
        @csrf
        <input type="text" name="brand" placeholder="Brand">
        <input type="number" name="seats" placeholder="Seats">
        <select name="available" id="available">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <button type="submit">Add</button>
    </form>
</body>

@include('layout.footer')