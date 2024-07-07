@extends('partial.layout')
@section('content')
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="bg-dark p-4 vh-100 sticky-top">
            <h2 class="text-white">WonderToys</h2>
            <div class="nav flex-column nav-pills">
                <a class="text-white nav-link" href="{{ url('/admin') }}">
                    <i class="bi bi-grid me-2"></i>Dashboard</a>
                <a class="text-white nav-link active" href="{{ url('/admin/categories') }}">
                    <i class="bi bi-box-seam me-2"></i>Categories
                </a>
                <a class="text-white nav-link" href="{{ url('/admin/toys') }}">
                    <i class="bi bi-box-seam me-2"></i>Toys
                </a>
                <a class="text-white nav-link" href="{{ url('/admin/users') }}">
                    <i class="bi bi-people me-2"></i>Users
                </a>
            </div>
        </nav>
        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
