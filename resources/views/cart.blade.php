<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\background.css') }}">
    <title>Parts Off - Checkout</title>
</head>

<body class="bg-light">
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
                    <!--Profile-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/myaccount')  }}">Profile</a>
                            <a class="dropdown-item" href="{{ url('/login')  }}">Login</a>
                            <a class="dropdown-item" href="{{ url('/signup')  }}">Sign Up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Checkout Section -->
    <section style="margin-bottom: 369px;">
        <div class="container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Shopping Cart</h5>
                            <ul class="list-group mb-3">
                                <!-- Example item in the cart: GTX 1080 Ti -->
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h6>
                                        <small class="text-muted">High-performance graphics card for gaming</small>
                                    </div>
                                    <span class="text-muted">$19,082.31</span>
                                </li>

                                <!-- Add more items as needed -->

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (PHP)</span>
                                    <strong>$19,082.31</strong>
                                </li>
                            </ul>

                            <a href="{{ url('/checkout')  }}">
                                <button class="btn btn-primary" >Proceed to Checkout</button>
                            </a>
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
