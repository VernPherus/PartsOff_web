@extends("layout.layout")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parts Off</title>
</head>

<body>
    <!--Navbar-->
    @include("layout.navbar")

    <!-- Product Details Section -->
    <div class="container mt-5" id="product-details">
        <div class="row justify-content-md-center">
            <!-- Product Image and Details -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Replace 'img/1080.png' with the actual path to your product image -->
                        <img src="img/1080.png" alt="Product Image" class="img-fluid">
                        <h5 class="card-title mt-3">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                        <h4 class="card-subtitle mb-2 text-muted">Price: PHP 19,082.31</h4>
                        <p class="card-text">Good GPU</p>
                        <!-- Add more product details as needed -->
                        <button class="btn btn-primary mt-3" onclick="addToCart()">Add to Cart</button>
                        <a href="{{ url('/checkout')  }}"><button class="btn btn-primary mt-3">Buy Now</button></a>

                    </div>
                </div>
            </div>

            <!-- Product Reviews and Related Products -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Product Reviews Section -->
                        <h5 class="card-title">Customer Reviews</h5>
                        <!-- Add customer reviews or a review section here -->
                            <!-- Example Review 1 -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">Jeremy Aldana</h6>
                                    <p class="card-text">
                                        "I bought this graphics card last month, and it's been performing exceptionally well.
                                        The gaming experience has improved, and the price is reasonable for the features it offers."
                                    </p>
                                    <p class="card-text text-muted">Posted on January 20, 2024</p>
                                </div>
                            </div>

                        <!-- Related Products Section -->
                        <h5 class="card-title mt-4">Related Products</h5>
                        <div class="row">
                            <!-- Example Related Product 1 -->
                            <div class="col-6 mb-3">
                                <!-- Make the card clickable -->
                                <a href="rtx.html" class="card-link">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="img/rtx2060.jpg" alt="Related Product 1" class="img-fluid">
                                            <h6 class="card-title mt-2">rtx2060</h6>
                                            <p class="card-text">Price: PHP 19,551.68</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Make the card clickable -->
                            </div>
                            <!-- Add more related products as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    @include('layout.footer')
4
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
