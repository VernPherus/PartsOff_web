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
                <!-- Statistics Section -->
                <div class="card mx-auto mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Website Statistics</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text">Total Products</p>
                                <h4>150</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Orders</p>
                                <h4>500</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Customers</p>
                                <h4>300</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Section -->
                <div class="card mx-auto mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Website Statistics</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text">Total Products</p>
                                <h4>150</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Orders</p>
                                <h4>500</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Customers</p>
                                <h4>300</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Section -->
                <div class="card mx-auto mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Website Statistics</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text">Total Products</p>
                                <h4>150</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Orders</p>
                                <h4>500</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Customers</p>
                                <h4>300</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Section -->
                <div class="card mx-auto mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Website Statistics</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text">Total Products</p>
                                <h4>150</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Orders</p>
                                <h4>500</h4>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text">Total Customers</p>
                                <h4>300</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content for each admin functionality goes here -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Product Management</h5>
                        <p class="card-text">View and manage products.</p>
                        <a href="#" class="btn btn-primary">Go to Product Management</a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Order Management</h5>
                        <p class="card-text">View and manage orders.</p>
                        <a href="#" class="btn btn-primary">Go to Order Management</a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Customer Management</h5>
                        <p class="card-text">View and manage customer information.</p>
                        <a href="#" class="btn btn-primary">Go to Customer Management</a>
                    </div>
                </div>
            </div>
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
</body>
</html>
