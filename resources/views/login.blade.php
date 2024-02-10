@extends("layout.layout")
<head>
    <title>Parts Off</title>
</head>

<body class="bg-primary">
    <!--Navbar-->
    @include("layout.navbar")

    <section style ="margin-bottom: 369px;">
        <div class="container mt-5 pt-5">
            <div class="row align-items-center">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <h1>Log In</h1>
                            </div>
                            <form action="#">
                                <input type="text" name="" id="" class="form-control my-3 py-2" placeholder="Username">
                                <input type="password" name="" id="" class="form-control py-2" placeholder="Password">
                                <a href="#" class="nav-link">Forgot password?</a>
                                <div class="text-center">
                                    <button class="btn btn-primary mt-3">Login</button>
                                    <a href="{{ url('/signup') }}" class="nav-link">Don't have an account? Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    @include('layout.footer')
</body>
