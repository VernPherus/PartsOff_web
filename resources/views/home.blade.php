@extends("layout.layout")
<head>
    <title>Parts Off</title>
</head>

<body>
    <!--Navbar-->
    @include("layout.navbar")

    <!-- Header Section -->
    <header class="bg-primary text-white py-1">
        <div class="container text-center">
            <h1>Welcome to Parts Off</h1>
            <p>Explore our content</p>
        </div>
    </header>

    <!--
        *TODO Add rows for the cards, layout properly
    -->
    <!-- Content Section -->
    <div class="container mt-5" id="dashboard">

        <!--Header cards-->
        <div class="row justify-content-md-center">

            <!-- Card 1 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="{{ url('/product')  }}" class="card-link">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <!-- Add your image with the <img> tag -->
                                <img src="{{ asset('assets\images\1080.png') }}" alt="GPU Image" class="img-fluid">
                            </div>
                            <h5 class="card-title">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h5>
                            <h4 class="card-subtitle mb-2">Price:PHP 19,082.31</h4>
                        </div>
                    </div>
                </a>
            </div>



            <!-- Card 2 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--Midset A-->
        <div class="row">

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--Midset B-->
        <div class="row">

            <div class="col">
                <div class="card w-100/">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

        </div>

        <!--End Cards-->
        <div class="row mb-4">

            <div class="col-md-8 col-sm-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Title 1</h5>
                        <img src="{{ asset('assets\images\placeholder_logo.png') }}" class="card-img-top" alt="Image 1">
                        <h1 class="card-header">Header 1</h1>
                        <h4 class="card-subtitle mb-2 text-muted">Sub-header 1</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--footer-->
    @include('layout.footer')
</body>
