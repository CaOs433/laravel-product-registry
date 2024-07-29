@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity ?? 1) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
    </form>
</div>
@endsection
