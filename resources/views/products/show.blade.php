@extends('layout')

@section('content')
    <div class="container">
        <h1>Show Product</h1>
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
        <div class="form-group">
            <strong>Description:</strong>
            {{ $product->description }}
        </div>
        <div class="form-group">
            <strong>Price:</strong>
            {{ $product->price }}
        </div>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
@endsection
