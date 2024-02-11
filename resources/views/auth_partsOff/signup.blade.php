@extends("layouts.app")
@section('content')

<head>
    <title>Parts Off</title>
</head>

<body class="bg-primary">
    <!--Navbar-->
    @include("layouts.navbar")

    <section style="margin-bottom: 369px;">
        <div class="container mt-5 pt-5">
            <div class="row align-items-center">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <h1>Sign Up</h1>
                            </div>
                            <form action="#">
                                <input type="firstname" name="" id="" class="form-control my-2 py-2" placeholder="Firstname">
                                <input type="lastname" name="" id="" class="form-control my-2 py-2" placeholder="Lastname">
                                <input type="email" name="" id="" class="form-control my-2 py-2" placeholder="Email">
                                <input type="password" name="" id="" class="form-control my-2 py-2" placeholder="Password">
                                <input type="passFord" name="" id="" class="form-control my-2 py-2 mb-3" placeholder="Confirm Password">
                                <div class="text-center">
                                    <button class="btn btn-primary">Sign Up</button>
                                    <a href="{{ url('/login') }}" class="nav-link">Already have an account? Log In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<!--footer-->
@include('layouts.footer')

</html>
@stop