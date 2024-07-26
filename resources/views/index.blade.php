@extends('partial.layout')
@section('content')
    @include('partial.header')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Your Ultimate Toy Wonderland</h1>
                <p class="lead fw-normal text-white-50 mb-0">Explore the magic of childhood with our wide range of toys!</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($toys as $toy)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ $toy->image }}" alt="{{ $toy->name }}" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $toy->name }}</h5>
                                    Rp. {{ number_format($toy->price, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('/toy/' . $toy->id) }}">View details</a></div>
                            </div>
                            @auth
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('partial.footer')
@endsection
