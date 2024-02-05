<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!--logo-->
            <a class="navbar-brand mr-auto" href="{{ url('/')  }}">
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
                <!--search-->
                <form class="d-flex mx-auto">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" size="70">
                </form>

                <ul class="navbar-nav ms-auto">
                    <!--Cart-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cart')  }}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/myaccount')  }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/signup')  }}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login')  }}">Login</a>
                    </li>

                    <!--Profile
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="MyAccount.html">Profile</a>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="signup.html">Sign Up</a>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
