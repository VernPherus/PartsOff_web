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
                        <h5 class="card-title">My Account</h5>
                        <!-- Form for editing user details -->
                        <form id="myAccountForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="Adrian James Naoe Bumagat">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3">123 Main St, City, Country</textarea>
                            </div>
                            <!-- Add more fields for other user details as needed -->

                            <button type="button" class="btn btn-primary" onclick="saveUserDetails()">Save Changes</button>
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
            var phone = document.getElementById('phone').value;
            var address = document.getElementById('address').value;

            // Perform AJAX request to update user details on the server
            // (You may need to implement server-side logic to handle this)

            // Provide feedback to the user (e.g., display a success message)
            alert('User details saved successfully!');
        }
    </script>
</body>
</html>