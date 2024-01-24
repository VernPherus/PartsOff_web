<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\background.css') }}">
    <title>Parts Off - Checkout</title>
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

    <!-- Checkout Section -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h2>Checkout</h2>
                <div class="card">
                    <div class="card-body">
                        <!-- Displaying Cart Items -->
                        <h5 class="card-title">Cart Items</h5>

                        <!-- Example for one item (you can loop through all items in your cart) -->
                        <div class="cart-item">
                            <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" width="80" height="80">
                            <h5 class="card-title mt-3">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                            <h4 class="card-subtitle mb-2 text-muted">Price: PHP 19,082.31</h4>
                        </div>

                        <!-- User Information Form -->
                        <form id="checkoutForm" onsubmit="return processOrder()">
                            <h5 class="card-title mt-4">User Information</h5>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Shipping Address</label>
                                <textarea class="form-control" id="address" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Complete Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Turd:Re. All rights reserved.</p>
        </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script>
        function processOrder() {
            // Perform order processing logic here (e.g., send data to a server)
            alert('Order processed successfully!');
            return false; // Prevent form submission for this example
        }
    </script>
</body>
</html>