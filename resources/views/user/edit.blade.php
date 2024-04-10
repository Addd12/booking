@include('layout.header')
    <title>Edit user</title>
</header>
<body>
    <h1>Edit user</h1>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ route('editUser', $user->id) }}" method='POST'>
                    @csrf
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control form-control-lg" value="{{$user->name}}">
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email" class="form-control form-control-lg" value="{{$user->email}}">
                    </div>

                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control form-control-lg mb-4">
                        <option value="admin" {{ $user->type == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="driver" {{ $user->type == 'driver' ? 'selected' : '' }}>Driver</option>
                        <option value="passenger" {{ $user->type == 'passenger' ? 'selected' : '' }}>Passenger</option>
                    </select>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Edit user</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

@include('layout.footer')