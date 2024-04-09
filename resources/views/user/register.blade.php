@include('layout.header')
    
<title>Register</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ url('/register') }}" method="POST">
                        @csrf
                        <!-- Name input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name="name" placeholder="Name" class="form-control form-control-lg"> 
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <!--the name attribute value is the connection between the input (email) you give to the form and the (email) variable in your controller-->
                            <input type="email" name="email" placeholder="Email" class="form-control form-control-lg">
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" name="password" placeholder="Password" class="form-control form-control-lg">
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <p>Already have an account? <a href="/login">Login here!</a></p>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@include('layout.footer')