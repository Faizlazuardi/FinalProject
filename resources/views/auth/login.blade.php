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

    <title>Sign In</title>
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 24rem;">
            <div class="card-body">
                <h3 class="text-center mb-3">Sign In</h3>
                <p class="text-center mb-4">Please enter your login and password!</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password input -->
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="row my-2">
                        <div class="col d-flex">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember"/>
                                <label class="form-check-label" for="remember"> Remember me </label>
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </div>
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Don't have an Account? <a href="/register">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
