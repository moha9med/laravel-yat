@extends('layouts.productLayout')


@section('content')
    <div class="card">
        <div class="card-header">
            {{ $category->description }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $category->title }}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('editcategories',$category->id) }}" class="btn btn-sm btn-primary">Edit Category</a>
            <a href="{{ route('allcategories') }}" class="btn btn-sm btn-success">Return to all categories</a>
            <a href="{{ route('deletecategory',$category->id) }}" class="btn btn-sm btn-danger">Delete Category</a>
        </div>
    </div>
@endsection

@section('title')
    {{ $category->title }}
@endsection
