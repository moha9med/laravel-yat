@extends('layouts.productLayout')


@section('content')
 <div class="row">
        <h1><span>{{ $product->id }}-</span>Product Title: {{ $product->title }}</h1>
        <p>Product Description: {{ $product->description }}</p>
        <p>Product Price: {{ $product->price }}</p>
    </div>
    <div class="row my-3">
        <div class="col">
            @foreach ($product->categories as $pcategory)
                <span class="badge bg-success"><a href="{{ route('singlecategory',$pcategory->id)}}"> {{$pcategory->title}}</a></span>
            @endforeach
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary" href="{{ route('allproducts') }}">
            Return to Products
        </a>
    </div>
@endsection



@section('title')
    {{$product->title}}
@endsection