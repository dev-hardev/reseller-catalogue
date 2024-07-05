@extends('layouts.customer')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to {{ config('app.name') }}</h1>
        <p class="lead">Find the best products, because we are authorized Apple resellers.</p>
        <p>Explore our wide range of used mobiles and make your purchase today!</p>
        <img alt="" height="300px" src="https://www.apple.com/v/iphone/home/bv/images/meta/iphone__ky2k6x5u6vue_og.png">
    </div>

    <div class="container">
        <h2 class="my-4">Current Products</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="text-center">
                            <img alt="Product Image" src="{{ $product->image_url }}" width="100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('products.show', $product) }}">
                                    {{ $product->name }}
                                </a>
                            </h4>
                            <h5>Rs. {{ $product->price }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">★★★★☆</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
