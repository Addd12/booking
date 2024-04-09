@include('layout.header')
    <title>Edit bus</title>
</header>
<body>
    <h1>Edit bus</h1>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ route('editBus', $bus->id) }}" method='POST'>
                    @csrf
                    <!-- Brand input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" placeholder="Brand" class="form-control form-control-lg" value="{{$bus->brand}}">
                    </div>

                    <!-- Seats input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label for="seats">Seats</label>
                        <input type="number" name="seats" placeholder="Seats" class="form-control form-control-lg" value="{{$bus->seats}}">
                    </div>

                    <label for="available">Available</label>
                    <select name="available" id="available" class="form-control form-control-lg mb-4">
                        <option value="1" {{ $bus->available == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $bus->available == '0' ? 'selected' : '' }}>No</option>
                    </select>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Edit bus</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

@include('layout.footer')