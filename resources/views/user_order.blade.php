@extends("layout.layout")
<head>
    <title>Profile</title>
</head>
<body>
    <!--Navbar-->
    @include("layout.navbar")

<section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layout.user_sidebar")

                <!-- Main Content Area -->
                <div class="col-md-9">
                    <!-- Order History Section -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Order History</h5>
                            <!-- Using Bootstrap grid for order history -->
                            <div class="row">
                                <!-- Example Order 1 -->
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" class="img-fluid">
                                        <div class="card-body">
                                            <strong>Product:</strong> NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card<br>
                                            <strong>Price:</strong> PHP 19,082.31<br>
                                            <strong>Date:</strong> January 25, 2024<br>
                                            <!-- Add more order details as needed -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Example Order 2 -->
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" class="img-fluid">
                                        <div class="card-body">
                                            <strong>Product:</strong> NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card<br>
                                            <strong>Price:</strong> PHP 19,082.31<br>
                                            <strong>Date:</strong> February 5, 2024<br>
                                            <!-- Add more order details as needed -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Example Order 3 -->
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" class="img-fluid">
                                        <div class="card-body">
                                            <strong>Product:</strong> NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card<br>
                                            <strong>Price:</strong> PHP 19,082.31<br>
                                            <strong>Date:</strong> March 12, 2024<br>
                                            <!-- Add more order details as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</section>


    </div>

    <!--footer-->
    @include('layout.footer')

</body>
</html>
