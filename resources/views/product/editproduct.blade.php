@extends('layouts.productLayout')

@section('content')
    <form action="{{ route('updateproduct',$product->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" value="{{$product->description}}">
        </div>
        <div class="mb-3">
            <input type="text" name="price" class="form-control" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
@endsection

@section('title')
    Edit Product
@endsection
