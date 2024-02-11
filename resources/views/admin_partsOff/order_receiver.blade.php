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
    <!--Footer-->
    @include('layouts.footer')
</body>
@stop