<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">WonderToys</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Dropdown Button-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" action="{{ url('/{category->name}') }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <!-- Sign In Button -->
                    <form class="d-flex me-2" action="{{ url('/login') }}" method="get">
                        <button class="btn btn-outline-dark" type="submit">
                            Sign In
                        </button>
                    </form>
                    <!-- Sign Up Button -->
                    <form class="d-flex me-2" action="{{ url('/register') }}" method="get">
                        <button class="btn btn-outline-dark" type="submit">
                            Sign Up
                        </button>
                    </form>
                </div>
                <div class="d-flex align-items-center">
                    <!--Cart Button-->
                    <form class="d-flex ms-auto">
                        <button class="btn btn-outline-dark me-3" type="submit">
                            <i class="bi bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <!-- Logout Button -->
                    <form class="d-flex me-2" action="{{ url('/register') }}" method="get">
                        <button class="btn btn-outline-danger" type="submit">
                            Logout
                        </button>
                    </form>
                    <!-- Person Icon -->
                    <i class="bi bi-person-circle" style="font-size: 1.6rem;"></i>
                </div>
            </div>
        </div>
    </nav>
</body>
