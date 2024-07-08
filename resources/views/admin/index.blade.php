@extends('partial.layout')
@section('content')
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="bg-dark p-4 vh-100 sticky-top">
            <h2 class="text-white">WonderToys</h2>
            <div class="nav flex-column nav-pills">
                <a class="text-white nav-link active" href="{{ url('/admin') }}">
                    <i class="bi bi-grid me-2"></i>Dashboard</a>
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
                <h1 class="h2">Dashboard</h1>
            </div>
            <div class="row">
                <!--Users-->
                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            {{-- <p class="card-text">{{ $totalUsers }}</p> --}}
                        </div>
                    </div>
                </div>
                <!--Toys-->
                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Toys</h5>
                            {{-- <p class="card-text">{{ $totalToys }}</p> --}}
                        </div>
                    </div>
                </div>
                <!--Categories-->
                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Categories</h5>
                            {{-- <p class="card-text">{{ $totalCategories }}</p> --}}
                        </div>
                    </div>
                </div>
                <!--Revenue-->
                <div class="col-md-3 col-sm-6">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Revenue</h5>
                            {{-- <p class="card-text">${{ number_format($totalRevenue, 2) }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
