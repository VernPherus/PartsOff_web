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
                <!-- My Account Section -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Account</h5>
                        <!-- Form for editing user details -->
                        <form id="myAccountForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="Adrian James Naoe Bumagat">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3">123 Main St, City, Country</textarea>
                            </div>
                            <!-- Add more fields for other user details as needed -->

                            <button type="button" class="btn btn-primary" onclick="saveUserDetails()">Save Changes</button>
                        </form>
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
    <script>
        // JavaScript for handling form submission and saving user details
        function saveUserDetails() {
            // Get values from the form
            var name = document.getElementById('name').value;
            var gender = document.getElementById('gender').value;
            var dob = document.getElementById('dob').value;
            var phone = document.getElementById('phone').value;
            var address = document.getElementById('address').value;

            // Perform AJAX request to update user details on the server
            // (You may need to implement server-side logic to handle this)

            // Provide feedback to the user (e.g., display a success message)
            alert('User details saved successfully!');
        }
    </script>
</body>
</html>
