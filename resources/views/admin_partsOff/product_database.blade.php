@extends("layouts.app")
@section('content')

<head>
    <title>Profile</title>
</head>

<body>
    <section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layouts.admin_sidebar")

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
</body>
@stop