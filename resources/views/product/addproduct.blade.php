@extends('layouts.productLayout')


@section('content')

    <form action="{{ route('storeproducts') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="enter product title">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" placeholder="enter product description">
        </div>
        <div class="mb-3">
            <input type="text" name="price" class="form-control" placeholder="enter product price">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
        </div>
    </form>


@endsection


@section('title')
    Add Product
@endsection
