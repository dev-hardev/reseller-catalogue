@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input class="form-control" name="name" placeholder="Name" type="text" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" name="description" placeholder="Description" style="height:150px">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input class="form-control" name="price" placeholder="Price" type="text" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Stock:</strong>
                        <input class="form-control" name="stock" placeholder="Stock" type="text" value="{{ $product->stock }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input class="form-control" id="" name="image_url" placeholder="Choose new image" type="file">
                    </div>
                    <img alt="" src="{{ $product->image_url }}" width="500px">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection
