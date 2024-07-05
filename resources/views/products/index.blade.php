<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table-bordered table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
