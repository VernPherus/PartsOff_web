@extends("layout.layout")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\profile.css') }}">

    <title>Profile</title>
</head>
<body>
    <!--Navbar-->
    @include("layout.navbar")

<section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layout.seller_sidebar")
        
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

    <!--footer-->
    @include('layout.footer')

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
