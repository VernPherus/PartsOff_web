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
                                    <div class="col-12 mb-4">
                                        <div class="list-group">
                                            <a href="{{ url('/myaccount')  }}" class="list-group-item list-group-item-action">My Account</a>
                                            <a href="{{ url('/myaccount')  }}" class="list-group-item list-group-item-action">Profile</a>
                                            <a href="{{ url('/myorder')  }}" class="list-group-item list-group-item-action"> Change Password</a>
                                            <a href="{{ url('/myorder')  }}" class="list-group-item list-group-item-action"> Payment Method</a>
                                            <a href="{{ url('/myorder')  }}" class="list-group-item list-group-item-action"> My Orders</a>
                                            <a href="{{ url('/myorder')  }}" class="list-group-item list-group-item-action"> Orders</a>
                                            <a href="{{ url('/')  }}" class="list-group-item list-group-item-action"> LogOut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>