@extends("layout.layout")
<head>
    <title>Checkout</title>
    <style>
        .checkout-card {
            width: 100%;
            margin: auto;
            display: flex;
        }

        .cart-items {
            flex: 1;
            padding-right: 10px; /* Spacing between items and summary */
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
            height: 100px;
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
    <!--Navbar-->
    @include("layout.navbar")
    <div class="container my-4">
            <div class="row no-gutters">
                <div class="col-md-8 card m-2">
                    <div class="card-body cart-items">
                        <h2>Check Out</h2>
                        <h6>Shipping Address</h6>
                        <!-- Form for editing user details -->
                        <form id="Shipping Address">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gender" class="col-sm-2 col-form-label d-flex justify-content-end">Gender:</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="mb-3 row">
                                <label for="dob" class="col-sm-2 col-form-label d-flex justify-content-end">Date of Birth:</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="dob">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col-sm-2 col-form-label d-flex justify-content-end">Address:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Addresses">
                                </div>
                            </div>
                            <!-- Add more fields for other user details as needed -->

                            <button type="button" class="btn btn-primary mx-6" onclick="saveUserDetails()">Save Changes</button>
                        </form>
                    </div>
                </div>
                <div class="col card m-2">
                    <div class="card-body summary">
                        <h2>Summary</h2>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="height: 50">
                                Item 1
                                <span>$10.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"  style="height: 50">
                                Item 2
                                <span>$20.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"  style="height: 50">
                                Item 1
                                <span>$10.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="height: 50">
                                Item 1
                                <span>$10.00</span>
                            </li>
                            <!-- Add more items as needed -->
                        </ul>
                        <p class="total">Total: $30.00</p>
                        <a class="nav-link" href="{{ url('/checkout') }}">
                            <button class="btn btn-primary btn-block">Place Order</button>
                        </a>
                    </div>
                </div>
            </div>
    </div>

    <!--footer-->
    @include("layout.footer")

    <script>
        // Function to remove item (update as per your requirements)
        function removeItem(itemId) {
            // Implement item removal logic here
            console.log('Item removed:', itemId);
        }
    </script>
    
</body>
</html>
