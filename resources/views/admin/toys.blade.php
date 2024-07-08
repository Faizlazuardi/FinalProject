@extends('partial.layout')
@section('content')
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="bg-dark p-4 vh-100 sticky-top">
            <h2 class="text-white">WonderToys</h2>
            <div class="nav flex-column nav-pills">
                <a class="text-white nav-link" href="{{ url('/admin') }}">
                    <i class="bi bi-grid me-2"></i>Dashboard</a>
                <a class="text-white nav-link active" href="{{ url('/admin/toys') }}">
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
                <h1 class="h2">Toys List</h1>
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
                    <a class="btn btn-primary" action="{{ route('create') }}">+ Tambah Data</a>
                </div>
                <!--Table-->
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th class="col-md-1">#</th>
                            <th class="col-md-5">Name</th>
                            <th class="col-md-3">
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($categories as $category)
                                            <li><a class="dropdown-item" name="category">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li> --}}
                            </th>
                            <th class="col-md-2">price</th>
                            <th class="col-md-1">Stock</th>
                            <th class="col-md-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($toys as $index => $toy)
                            <tr>
                                <td>{{ $index + $toys->firstItem() }}</td>
                                <td>{{ $toy->name }}</td>
                                <td>{{ $toy->category }}</td>
                                <td>{{ $toy->price }}</td>
                                <td>{{ $toy->stock }}</td>
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
