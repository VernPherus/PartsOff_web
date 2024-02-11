<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-purple">
            <div class="sidebar">
                <!-- Profile Section Card -->
                <div class="card profile-card">
                    <div class="card-body text-center">
                        <div class="row justify-content-center">
                            <div class="mb-3">
                                <!-- Profile Details -->
                                <h2>Adrian James Bumagat</h2>
                            </div>
                            <!-- DashBoard -->
                            <div class="col-12 mb-4">
                                <div class="list-group list-group-flush mb-3">
                                    <a class="list-group-item">
                                        <h4>My Account</h4>
                                    </a>
                                    <a class="list-group-item" href="{{ url('/profile')  }}"> Account Detail</a>
                                    <a class="list-group-item" href="{{ url('/changepassword')  }}"> Change Password</a>
                                    <a class="list-group-item" href="{{ url('/shipping')  }}"> Shipping Address</a>
                                </div>

                                <div class="list-group list-group-flush mb-3">
                                    <a class="list-group-item">
                                        <h4>Products</h4>
                                    </a>
                                    <a class="list-group-item" href="{{ url('/order')  }}">Order History</a>
                                </div>
                                <a class="nav-link" href="{{ url('/') }}">
                                    <button type="button" class="btn btn-outline-dark">LogOut</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>