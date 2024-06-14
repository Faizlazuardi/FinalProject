<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>WonderToys</title>
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 28rem;">
            <h3 class="text-center mb-3">Sign Up</h3>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="row mb-3">
                    <!-- First Name input -->
                    <div class="col">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstName">
                    </div>
                    <!-- Last Name input -->
                    <div class="col">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastName">
                    </div>
                </div>
                <!-- Email input -->
                <div class="form-group mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <!-- Password input -->
                <div class="form-group mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <!-- Submit button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
