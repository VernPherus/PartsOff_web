@extends("layout.layout")
<head>
    <title>Parts Off</title>
    <style>
        /* Add custom styles for fixed image size */
        .card-img-top {
            height: 150px; /* Set the desired height */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
        }
    </style>
</head>

<body>
    <!--Navbar-->
    @include("layout.navbar")
    
    <!-- Card Banner Section -->
    <div class="container mt-4 ">
        <div class="card ">
            <img src="{{ asset('assets/images/banner.gif') }}" class="card-img-top" alt="Banner Image">
        </div>
    </div>
    

    <!-- Content Section -->
    <div class="container mt-5 card bg-primary"  id="dashboard">
        <!-- Just For You Card -->
        <div class="card m-3">
            <div class="card-body text-center">
                <h5 class="card-title">Just For You</h5>
            </div>
        </div>

        <!-- Container Card for Product Cards -->
        <div class="card m-3">
            <!-- Cards Section -->
            <div class="card-body">
                <div class="row no-gutters"> <!-- Remove gutters (left and right margins) -->
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\1080.png') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\alex.jpg') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\1080.png') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Add more cards here for a total of 12, or modify the loop accordingly -->
                </div>
            </div>
        </div>
    </div>


            
    <!-- Content Section -->
    <div class="container my-5 card bg-primary" id="dashboard">
        <!-- Just For You Card -->
        <div class="card m-3">
            <div class="card-body text-center">
                <h5 class="card-title">New Arrival</h5>
            </div>
        </div>

        <!-- Container Card for Product Cards -->
        <div class="card m-3">
            <!-- Cards Section -->
            <div class="card-body">
                <div class="row no-gutters"> <!-- Remove gutters (left and right margins) -->
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\1080.png') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\alex.jpg') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">
                        <a href="{{ url('/product') }}" style="text-decoration:none" class="card-link">
                            <div class="card">
                                <img src="{{ asset('assets\images\1080.png') }}" class="card-img-top" alt="NVIDIA GeForce GTX 1080 TI Image">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                                    <p class="card-text">Price: PHP 19,082.31</p>
                                    <!-- Add any other details you want to display -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Add more cards here for a total of 12, or modify the loop accordingly -->
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    @include('layout.footer')
</body>
