@extends("layout.layout")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets\css\profile.css') }}">
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
                        <h3 class="card-title mb-5">Account Detail</h3>
                        <!-- Form for editing user details -->
                        <form id="myAccountForm">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label d-flex justify-content-end">UserName:</label>
                                <div class="col-sm-9">
                                    <p>Adrian James Bumagat</p>
                                </div>
                            </div>
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
            </div>

</section>


    </div>

    <!--FOOTER-->
    @include('layout.footer')

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
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
