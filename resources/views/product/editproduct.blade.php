@extends('layouts.productLayout')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form action="{{ route('updateproduct', $product->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" value="{{ old('title')?old('title'):$product->title }}">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" value="{{ old('description')?old('description'):$product->description }}">
        </div>
        <div class="mb-3">
            <input type="text" name="price" class="form-control" value="{{ old('price')?old('price'):$product->price }}">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
@endsection

@section('title')
    Edit Product
@endsection
