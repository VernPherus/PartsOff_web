@extends("layouts.app")
@section('content')

<head>
    <title>Parts Off</title>
</head>

<body>
    <!--Navbar-->
    @include("layouts.navbar")

    <section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layouts.user_sidebar")

        <!-- Main Content Area -->
        <div class="col-md-9">
            <!-- My Account Section -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-5">Change Password</h3>
                    <!-- Form for editing user details -->
                    <form id="myAccountForm">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">Old Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Old Password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">New Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="New Password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label d-flex justify-content-end">Confirm Password</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Confirm Password" aria-describedby="eye-toggle">
                                    <button class="btn btn-outline-secondary" type="button" id="eye-toggle">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <!-- Add more fields for other user details as needed -->

                        <button type="button" class="btn btn-primary mx-6" onclick="saveUserDetails()">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!--FOOTER-->
    @include('layouts.footer')
</body>
@stop