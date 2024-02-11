@extends("layouts.app")
@section('content')

<head>
    <title>Your Product Name - Shoppe Style</title>
    <style>
        .checkout-card {
            width: 100%;
            margin: auto;
            display: flex;
        }

        .cart-items {
            flex: 1;
            padding-right: 20px;
            /* Spacing between items and summary */
        }

        .item-image {
            max-width: 50px;
            max-height: 50px;
            margin-right: 10px;
        }

        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;

        }

        .total {
            font-weight: bold;
            margin-top: 10px;
        }

        .checkout-btn {
            margin-top: 20px;
        }

        .summary {
            width: 100%;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    <div class="container mt-4" alt="product">
        <div class="card p-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets\images\1080.png') }}" alt="Product Image" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h2 class="mb-3">Your Product Name</h2>
                    <p class="text-muted">Product Description goes here. Provide all the necessary details about the product.</p>
                    <h5 class="mb-3">Feature</h5>
                    <dd>- black hot drink</dd>
                    <dd>- black hot drink</dd>
                    <dd>- black hot drink</dd>
                    <dd>- black hot drink</dd>

                    <h3 class="mb-3">Price: $99.99</h3>

                    <a class="nav-link" href="{{ url('/cart') }}">
                        <button class="btn btn-primary btn-block">Add to Cart</button>
                    </a>
                    <a class="nav-link" href="{{ url('/checkout') }}">
                        <button class="btn btn-primary btn-block">Buy Now</button>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-2 text-center">
                    <h3><u>Product Details</u></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
                    <!-- Add more product details as needed -->
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    @include('layouts.footer')
</body>