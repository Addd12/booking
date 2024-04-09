@include('layout.header')
<title>Add bus</title>
</header>
<body>
    <h1>Add bus</h1>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="addBus" method='POST'>
                    @csrf
                    <!-- Brand input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="brand" placeholder="Brand" class="form-control form-control-lg">
                    </div>

                    <!-- Seats input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="number" name="seats" placeholder="Seats" class="form-control form-control-lg">
                    </div>

                    <select name="available" id="available" class="form-control form-control-lg mb-4">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>


                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Add new bus</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

@include('layout.footer')