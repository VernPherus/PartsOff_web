@extends("layout.layout")

<head>
    <title>Parts Off - Checkout</title>
</head>

<body class="bg-light">
    <!--Navbar-->
    @include("layout.navbar")

    <!-- Checkout Section -->
    <section style="margin-bottom: 369px;">
        <div class="container mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Shopping Cart</h5>
                            <ul class="list-group mb-3">
                                <!-- Example item in the cart: GTX 1080 Ti -->
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">NVIDIA GeForce GTX 1080 TI Founders Edition 11GB GDDR5X Graphic Card</h6>
                                        <small class="text-muted">High-performance graphics card for gaming</small>
                                    </div>
                                    <span class="text-muted">$19,082.31</span>
                                </li>

                                <!-- Add more items as needed -->

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (PHP)</span>
                                    <strong>$19,082.31</strong>
                                </li>
                            </ul>

                            <a href="{{ url('/checkout')  }}">
                                <button class="btn btn-primary" >Proceed to Checkout</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    @include('layout.footer')
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
