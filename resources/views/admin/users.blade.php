@extends('partial.layout')
@section('content')
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="bg-dark p-4 vh-100 sticky-top">
            <h2 class="text-white">WonderToys</h2>
            <div class="nav flex-column nav-pills">
                <a class="text-white nav-link" href="{{ url('/admin') }}">
                    <i class="bi bi-grid me-2"></i>Dashboard</a>
                <a class="text-white nav-link" href="{{ url('/admin/toys') }}">
                    <i class="bi bi-box-seam me-2"></i>Toys
                </a>
                <a class="text-white nav-link active" href="{{ url('/admin/users') }}">
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
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col-md-1">#</th>
                            <th scope="col-md-2">Name</th>
                            <th scope="col-md-2">Email</th>
                            <th scope="col-md-2">Money</th>
                            <th class="col-md-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + $users->firstItem() }}</td>
                                <td>{{ $user->firstName }} {{ $user->lastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->money }}</td>
                                <td>
                                    <a href='' class="bi bi-pencil-square text-warning mx-2"></a>
                                    <a href='' class="bi bi-trash3-fill text-danger"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
