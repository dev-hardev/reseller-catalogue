@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('products.index') }}">
                    <div class="card w-auto">
                        <div class="card-body px-5 py-4">
                            <svg class="bi bi-phone" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                            <span class="ms-2">
                                Manage Products
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
