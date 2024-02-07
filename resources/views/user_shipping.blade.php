@extends("layout.layout")
<head>
    <title>Profile</title>
</head>
<body>
    <!--Navbar-->
    @include("layout.navbar")

<section class="container mt-5 mb-5">

        <!-- Sidebar Section -->
        @include("layout.user_sidebar")

                <!-- Main Content Area -->
            <div class="col-md-9">
                <!-- My Account Section -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-5">Shipping Address</h3>
                        <!-- Form for editing user details -->
                        <form id="myAccountForm">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">HouseNum/Street</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="New Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label d-flex justify-content-end">Province</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" placeholder="Confirm Password" aria-describedby="eye-toggle">
                                        <button class="btn btn-outline-secondary" type="button" id="eye-toggle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
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


    </div>

    <!--FOOTER-->
    @include('layout.footer')
    <script>
        // JavaScript for handling form submission and saving user details
        function saveUserDetails() {
            // Get values from the form
            var name = document.getElementById('name').value;
            var gender = document.getElementById('gender').value;
            var dob = document.getElementById('dob').value;
            var address = document.getElementById('address').value;

            // Perform AJAX request to update user details on the server
            // (You may need to implement server-side logic to handle this)

            // Provide feedback to the user (e.g., display a success message)
            alert('User details saved successfully!');
        }
    </script>
</body>
</html>
