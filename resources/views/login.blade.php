<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\background.css') }}">
    <title>Parts Off</title>

</head>

<body class="bg-primary">
    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!--logo-->
            <img src="{{ asset('assets\images\logo.png') }}" width="50" height="50" alt="">
                <span class="fw-bold text-secondary">
                    Parts Off
                </span>
            </a>

            <!-- Toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!--search-->


                <ul class="navbar-nav ms-auto">


                    <!--Profile-->

                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Turd:Re. All rights reserved.</p>
        </div>
    </footer>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>


</html>
