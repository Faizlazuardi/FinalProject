@extends('partial.layout')
@section('content')
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="bg-dark p-4 vh-100 sticky-top">
            <h2 class="text-white">WonderToys</h2>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="text-white nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                    role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                        class="bi bi-grid me-2"></i>Dashboard</a>
                <a class="text-white nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                    role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                        class="bi bi-box-seam me-2"></i>Products</a>
                <a class="text-white nav-link" id="v-pills-users-tab" data-bs-toggle="pill" href="#v-pills-users"
                    role="tab" aria-controls="v-pills-users" aria-selected="false"><i
                        class="bi bi-people me-2"></i>Users</a>
            </div>
        </nav>
        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Tab content -->
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Tab -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                    </div>
                    <div class="row">
                        <!--Users-->
                        <div class="col-md-3 col-sm-6">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Users</h5>
                                    <p class="card-text">1234</p>
                                </div>
                            </div>
                        </div>
                        <!--Products-->
                        <div class="col-md-3 col-sm-6">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Products</h5>
                                    <p class="card-text">5678</p>
                                </div>
                            </div>
                        </div>
                        <!--Transaction-->
                        <div class="col-md-3 col-sm-6">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Transactions</h5>
                                    <p class="card-text">91011</p>
                                </div>
                            </div>
                        </div>
                        <!--Revenue-->
                        <div class="col-md-3 col-sm-6">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Revenue</h5>
                                    <p class="card-text">$123456</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products Tab -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Product List</h1>
                    </div>
                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        <!-- Search Form -->
                        <div class="pb-3">
                            <form class="d-flex" action="" method="get">
                                <input class="form-control me-1" type="search" name="katakunci"
                                    value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                                    aria-label="Search">
                                <button class="btn btn-secondary" type="submit">Cari</button>
                            </form>
                        </div>
                        <!-- Add Button -->
                        <div class="pb-3">
                            <a class="btn btn-primary" href="{{ url('/admin/create') }}">+ Tambah Data</a>
                        </div>
                        <!--Table-->
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th class="col-md-3">Image</th>
                                    <th class="col-md-2">Name</th>
                                    <th class="col-md-4">Description</th>
                                    <th class="col-md-1">Stock</th>
                                    <th class="col-md-1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="path/to/image.jpg" class="img-fluid" alt="Product Image"></td>
                                    <td>Product Name</td>
                                    <td>Product Description</td>
                                    <td>50</td>
                                    <td>
                                        <a href='' class="bi bi-pencil-square text-warning mx-2"></a>
                                        <a href='' class="bi bi-trash3-fill text-danger"></a>
                                    </td>
                                </tr>
                                <!-- More product rows -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Users Tab -->
                <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">User List</h1>
                    </div>
                    <div class="table-responsive shadow-sm rounded">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John Doe</td>
                                    <td>john.doe@example.com</td>
                                    <td>Admin</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jane Smith</td>
                                    <td>jane.smith@example.com</td>
                                    <td>User</td>
                                </tr>
                                <!-- More user rows -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
