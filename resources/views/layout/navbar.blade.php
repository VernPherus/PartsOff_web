<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py--2">
    <div class="container">
        <!-- Brand (left) -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="brand-box">
                <img src="{{ asset('assets\images\logo.png') }}" width="50" height="50" alt="">
            </div>
            <span class="fw-bold text-light">
                Parts Off
            </span>
        </a>


        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search (center) -->
            <form class="d-flex mx-auto my-2">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 400;" alt="search"> <!-- Adjust the width as needed -->
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <!-- Navbar Items (right) -->
            <div class="d-flex justify-content-center">
                <ul class="navbar-nav">
                    <!-- Cart -->
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="{{ url('/cart') }}">
                            <i class="bi bi-cart2" style="font-size: 2rem;"></i> <!-- Adjust the font-size as needed -->
                        </a>
                    </li>

                    <!-- Login/SignUp Button -->
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="{{ url('/login') }}">
                            <button type="button" class="btn btn-outline-primary">Login/SignUp</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
