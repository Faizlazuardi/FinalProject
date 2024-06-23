@extends('partial.layout')

@section('content')
<div class="d-flex flex-column flex-md-row">
    <!-- Sidebar -->
    <nav class="bg-dark p-4 vh-100 sticky-top">
        <h2 class="text-white">WonderToys</h2>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-grid me-2"></i>Dashboard</a>
            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-box-seam me-2"></i>Products</a>
            <a class="nav-link" id="v-pills-users-tab" data-bs-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false"><i class="bi bi-people me-2"></i>Users</a>
        </div>
    </nav>
    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <!-- Summary Cards -->
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
    </main>
</div>
@endsection
