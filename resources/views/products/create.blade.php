@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="d-flex justify-content-between">
                    <div class="float-left">
                        <h2>Add New Product</h2>
                    </div>
                    <div class="float-right">
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

                <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input class="form-control" name="name" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" name="description" placeholder="Description" style="height:150px"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input class="form-control" name="price" placeholder="Price" type="text">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                            <div class="form-group">
                                <strong>Stock:</strong>
                                <input class="form-control" name="stock" placeholder="Stock" type="text">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input class="form-control" id="" name="image_url" type="file">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 py-3 text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-3"></div>
        </div>
    </div>
@endsection
