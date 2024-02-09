@extends("layout.layout")
<!DOCTYPE html>
<html lang="en">

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
                        <h2>Cart</h2>
                        <h6>Selected Item</h6>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <img src="https://via.placeholder.com/50" alt="Item 1" class="item-image">
                                        Item 1
                                    </label>
                                </div>
                                <span>$10.00</span>
                                <button class="btn btn-outline-danger btn-sm" onclick="removeItem('item1')">Remove</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="item2">
                                    <label class="form-check-label" for="item2">
                                        <img src="https://via.placeholder.com/50" alt="Item 2" class="item-image">
                                        Item 2
                                    </label>
                                </div>
                                <span>$20.00</span>
                                <button class="btn btn-outline-danger btn-sm" onclick="removeItem('item2')">Remove</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <img src="https://via.placeholder.com/50" alt="Item 1" class="item-image">
                                        Item 1
                                    </label>
                                </div>
                                <span>$10.00</span>
                                <button class="btn btn-outline-danger btn-sm" onclick="removeItem('item1')">Remove</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="item1">
                                    <label class="form-check-label" for="item1">
                                        <img src="https://via.placeholder.com/50" alt="Item 1" class="item-image">
                                        Item 1
                                    </label>
                                </div>
                                <span>$10.00</span>
                                <button class="btn btn-outline-danger btn-sm" onclick="removeItem('item1')">Remove</button>
                            </li>
                            <!-- Add more items as needed -->
                        </ul>
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
                            <button class="btn btn-primary btn-block">Proceed to CheckOut</button>
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
