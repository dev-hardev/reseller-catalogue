@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="pull-left">
                <h2> Product Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>

        <div class="w-75 py-3 text-center">
            <div class="row">
                <div class="col-5">
                    <img alt="" src="{{ $product->image_url }}" width="300px">
                </div>

                <div class="col-7 text-start">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $product->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
