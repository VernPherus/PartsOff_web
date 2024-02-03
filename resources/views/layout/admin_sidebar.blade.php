<div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-purple">
                    <div class="sidebar">
                        <!-- Profile Section Card -->
                        <div class="card profile-card">
                            <div class="card-body text-center">
                                <div class="row justify-content-center">
                                    <div class="mb-5">
                                        <!-- Profile Picture -->
                                        <div class="profile-pic-container d-flex justify-content-center">
                                            <img src="{{ asset('assets\images\alex.jpg') }}" alt="Profile Picture" class="profile-img">
                                        </div>
                                        <!-- Profile Details -->
                                        <h6>Adrian James Naoe Bumagat</h6>
                                    </div>
                                    <!-- DashBoard -->
                                    <div class="col-12">
                                        <div class="list-group">
                                            <a href="{{ url('')  }}" class="list-group-item list-group-item-action">DashBoard</a>
                                            <a href="{{ url('/shop_profile')  }}" class="list-group-item list-group-item-action">Statistics</a>
                                            <a href="{{ url('/shop_Order')  }}" class="list-group-item list-group-item-action">User DataBase</a>
                                            <a href="{{ url('/shop_product')  }}" class="list-group-item list-group-item-action">Seller Database</a>
                                            <!-- Add more links for other admin functionalities as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>