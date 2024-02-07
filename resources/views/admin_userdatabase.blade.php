@extends("layout.layout")
<head>
    <title>Profile</title>
</head>
<body>
    <!--Navbar-->
    @include("layout.navbar")

<section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layout.admin_sidebar")

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

    <!--footer-->
    @include('layout.footer')
</body>
