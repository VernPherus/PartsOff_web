<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\background.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\profile.css') }}">

    <title>Profile</title>
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

<section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-purple">
                    <div class="sidebar">
                        <!-- Profile Section Card -->
                        <div class="card profile-card">
                            <div class="card-body text-center">
                                <div class="row justify-content-center">
                                    <div class="mb-5">
                                        <!-- Profile Picture -->
                                        <div class="profile-pic-container d-flex justify-content-center">
                                            <img src="{{ asset('assets\images\alex.jpg') }}" alt="Profile Picture" class="profile-img">
                                        </div>
                                        <!-- Profile Details -->
                                        <h6>Adrian James Naoe Bumagat</h6>
                                    </div>
                                    <!-- DashBoard -->
                                    <div class="col-12 mb-4">
                                        <div class="list-group">
                                            <a href="{{ url('/myaccount')  }}" class="list-group-item list-group-item-action">My Account</a>
                                            <a href="{{ url('/myorder')  }}" class="list-group-item list-group-item-action">My Orders</a>
                                            <!-- Add more links for other admin functionalities as needed -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="list-group">
                                            <a href="{{ url('/dashboard')  }}" class="list-group-item list-group-item-action">Dashboard</a>
                                            <a href="{{ url('/myproduct')  }}" class="list-group-item list-group-item-action">Products</a>
                                            <a href="{{ url('/order')  }}" class="list-group-item list-group-item-action">Orders</a>
                                            <!-- Add more links for other admin functionalities as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-md-9">
                    <!-- Order Receiver Section -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Order Receiver</h5>
                            <!-- Display Order Details Section -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">Order Details</h6>
                                    <!-- Example Order for GTX 1080 TI -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                            <p>Order ID: 123456</p>
                                            <p>Price: PHP 19,082.31</p>
                                            <p>Quantity: 1</p>
                                            <p>Customer: John Doe</p>
                                            <p>Shipping Address: 123 Main St, City, Country</p>
                                            <!-- Add more order details as needed -->
                                        </div>
                                    </div>
                                    <!-- End Example Order -->
                                </div>
                            </div>

                            <!-- Other Order Details Sections (for additional orders) -->
                            <!-- ... (Add more order details sections as needed) ... -->

                            <!-- Order Processing Form -->
                            <form id="orderProcessingForm">
                                <div class="mb-3">
                                    <label for="trackingNumber" class="form-label">Tracking Number</label>
                                    <input type="text" class="form-control" id="trackingNumber" placeholder="Enter tracking number">
                                </div>
                                <div class="mb-3">
                                    <label for="shippingStatus" class="form-label">Shipping Status</label>
                                    <select class="form-select" id="shippingStatus">
                                        <option value="shipped">Shipped</option>
                                        <option value="processing">Processing</option>
                                        <option value="delivered">Delivered</option>
                                    </select>
                                </div>
                                <!-- Add more fields for other order processing details as needed -->

                                <button type="button" class="btn btn-primary" onclick="processOrder()">Process Order</button>
                            </form>
                        </div>
                    </div>

                    <!-- Other sections and functionalities go here -->
                </div>

</section>


    </div>

    <!--FOOTER-->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Turd:Re. All rights reserved.</p>
        </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script>
        // JavaScript for handling order processing
        function processOrder() {
            // Get values from the form
            var trackingNumber = document.getElementById('trackingNumber').value;
            var shippingStatus = document.getElementById('shippingStatus').value;

            // Perform order processing logic (e.g., update order status in the database)

            // Provide feedback to the user (e.g., display a success message)
            alert('Order processed successfully!');
        }
    </script>
</body>
</html>
