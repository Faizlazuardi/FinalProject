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
<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 28rem;">
            <h3 class="text-center mb-3">Sign Up</h3>
            <form method="post">
                @csrf
                <div class="row mb-3">
                    <!-- First Name input -->
                    <div class="col">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstname">
                    </div>
                    <!-- Last Name input -->
                    <div class="col">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname">
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
