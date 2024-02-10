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
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">House Number:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">Barangay:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">City:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">Province:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name">
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
