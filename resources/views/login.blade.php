@extends("layout.layout")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <svg class="my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>
                            </div>
                            <form action="#">
                                <input type="text" name="" id="" class="form-control my-4 py-2" placeholder="Username">
                                <input type="password" name="" id="" class="form-control my-4 py-2" placeholder="Password">
                                <div class="text-center">
                                    <button class="btn btn-primary">Login</button>
                                    <a href="signup.html" class="nav-link">Don't have an account?</a>
                                    <a href="#" class="nav-link">Forgot password?</a>
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
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>


</html>
