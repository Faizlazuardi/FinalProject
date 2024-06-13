<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>WonderToys</title>
</head>
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


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Bootstrap core JS and dependencies-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzJp5tGpJQ4lKzJL6F2NO4E7P2Q5/Pp0h6XIHlEHiBI6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuVhLL5koVST6yU9/UD1ibm2qGjpYRTCR+yM5DyHQQ1bw1KPMphvq7HghfDywdf+M" crossorigin="anonymous"></script>
</body>
