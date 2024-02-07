<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand mr-auto" href="{{ url('/') }}">
            <img src="{{ asset('assets\images\logo.png') }}" width="50" height="50" alt="">
            <span class="fw-bold text-secondary">
                Parts Off
            </span>
        </a>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search -->
            <form class="d-flex mx-auto">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" size="70">
            </form>

            <!-- Navbar Items -->
            <ul class="navbar-nav ms-auto">
                <!-- Cart -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cart') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </a>
                </li>

                <!-- My Account Button -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">
                        <button type="button" class="btn btn-outline-primary">Login/SignUp</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
