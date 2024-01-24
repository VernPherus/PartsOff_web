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
                    <!-- My Products Section -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">My Products</h5>
                            <!-- Form for adding new products -->
                            <form id="addProductForm">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                                </div>
                                <div class="mb-3">
                                    <label for="productImage" class="form-label">Product Image URL</label>
                                    <input type="text" class="form-control" id="productImage" placeholder="Enter product image URL">
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="productPrice" placeholder="Enter product price">
                                </div>
                                <div class="mb-3">
                                    <label for="productDescription" class="form-label">Product Description</label>
                                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
                                </div>
                                <!-- Add more fields for other product details as needed -->

                                <button type="button" class="btn btn-primary" onclick="addProduct()">Add Product</button>
                            </form>
                        </div>
                    </div>

                    <!-- Display My Products Section -->
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">My Products</h5>
                            <!-- Using Bootstrap grid to display my products -->
                            <div class="row" id="myProductsGrid">
                                <!-- Example Product - GTX 1080 TI -->
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('assets\images\1080.png') }}" class="card-img-top" alt="GTX 1080 TI">
                                        <div class="card-body">
                                            <h5 class="card-title">NVIDIA GeForce GTX 1080 TI</h5>
                                            <p class="card-text">Founders Edition 11GB GDDR5X Graphic Card</p>
                                            <p class="card-text">Price: PHP 19,082.31</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Example Product -->

                                <!-- Display products dynamically here (added via JavaScript) -->
                            </div>
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
        // JavaScript for handling adding new products
        function addProduct() {
            // Get values from the form
            var productName = document.getElementById('productName').value;
            var productImage = document.getElementById('productImage').value;
            var productPrice = document.getElementById('productPrice').value;
            var productDescription = document.getElementById('productDescription').value;

            // Create a new product card
            var productCard = document.createElement('div');
            productCard.className = 'col-md-4 mb-4';
            productCard.innerHTML = `
                <div class="card">
                    <img src="${productImage}" class="card-img-top" alt="${productName}">
                    <div class="card-body">
                        <h5 class="card-title">${productName}</h5>
                        <p class="card-text">${productDescription}</p>
                        <p class="card-text">Price: ${productPrice}</p>
                    </div>
                </div>
            `;

            // Append the new product card to the My Products grid
            document.getElementById('myProductsGrid').appendChild(productCard);

            // Provide feedback to the user (e.g., display a success message)
            alert('Product added successfully!');
        }
    </script>
</body>
</html>
