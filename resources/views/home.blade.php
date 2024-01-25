<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets\css\custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\background.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\profile.css') }}">

    <title>Parts Off</title>
</head>

<body>


   <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!--logo-->
            <a class="navbar-brand mr-auto" href="{{ url('/home')  }}">
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
                <form class="d-flex mx-auto">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" size="70">
                </form>

                <ul class="navbar-nav ms-auto">
                    <!--Cart-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cart')  }}">Cart</a>
                    </li>

                    <!--Profile-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="MyAccount.html">Profile</a>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="signup.html">Sign Up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <!-- Header Section -->
    <header class="bg-primary text-white py-1">
        <div class="container text-center">
            <h1>Welcome to Parts Off</h1>
            <p>Explore our content</p>
        </div>
    </header>

    <!--
        *TODO Add rows for the cards, layout properly
    -->
    <!-- Content Section -->
    <div class="container mt-5" id="dashboard">

        <!--Header cards-->
        <div class="row justify-content-md-center">

            <!-- Card 1 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="product.html" class="card-link">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <!-- Add your image with the <img> tag -->
                                <img src="{{ asset('assets\images\1080.png') }}" alt="GPU Image" class="img-fluid">
                            </div>
                            <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                            <h4 class="card-subtitle mb-2">Price:PHP 19,082.31</h4>
                        </div>
                    </div>
                </a>
            </div>



            <!-- Card 2 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--Midset A-->
        <div class="row">

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--Midset B-->
        <div class="row">

            <div class="col">
                <div class="card w-100/">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

        </div>

        <!--End Cards-->
        <div class="row mb-4">

            <div class="col-md-8 col-sm-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--FOOTER-->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Turd:Re. All rights reserved.</p>
        </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
