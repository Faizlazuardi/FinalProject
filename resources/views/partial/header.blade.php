<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container px-0 px-lg-0">
        <!-- Left nav -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">WonderToys</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/') }}">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ url('/category=' . $category->id) }}"
                                    name="category">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <!--Right nav -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto d-flex align-items-center">
                @guest
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
                @endguest
                @auth
                    <!-- Cart Button -->
                    <form class="d-flex">
                        <button class="btn btn-outline-dark me-3" type="submit">
                            <i class="bi bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <!-- User Icon -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownUser" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" style="font-size: 1.6rem;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                                <li><a class="dropdown-item" href="#!"><i class="bi bi-sliders2 me-2"></i>Account</a>
                                </li>
                                <li><a class="dropdown-item" href="#!"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                <!-- logout-->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </div>
</nav>
