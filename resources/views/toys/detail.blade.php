@extends('partial.layout')

@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Toy Image -->
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img src="{{ $toy->image }}" alt="{{ $toy->name }}" class="img-fluid border border-dark"
                    style="max-height: 400px; object-fit: cover;">
            </div>

            <!-- Toy Details -->
            <div class="col-md-8">
                <div class="bg-light p-4 rounded shadow-sm border border-dark">
                    <h1 class="mb-3 text-dark">{{ $toy->name }}</h1>
                    <p><strong>Category:</strong> {{ $toy->category->name }}</p>
                    <p><strong>Description:</strong> {{ $toy->description }}</p>
                    <p><strong>Stock:</strong> {{ $toy->stock }}</p>
                    <p><strong>Price:</strong> ${{ number_format($toy->price, 2) }}</p>

                    @auth
                        <div class="d-flex justify-content-end mt-4">
                            <a class="btn btn-outline-dark" href="#">Add to cart</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
