@extends('partial.layout')
@section('content')
    <!-- Include header -->
    @include('partial.header')
    <!-- Hero Image-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Your Ultimate Toy Wonderland</h1>
                <p class="lead fw-normal text-white-50 mb-0">Explore the magic of childhood with our wide range of toys!</p>
            </div>
        </div>
    </header>
    <!--Include Toys-->
    @include('toys.index')
    <!-- Include footer -->
    @include('partial.footer')
@endsection
