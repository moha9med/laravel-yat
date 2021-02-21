@extends('layouts.productLayout')

@section('content')


    <div class="my-3">
        <a class="btn btn-primary btn-sm" href=" {{ route('addcategories') }} ">add category</a>
    </div>
    <ul class="list-group">
        @foreach ($categories as $category)
            {{-- {{dd($category->products)}} --}}
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('singlecategory', $category->id) }}">{{ $category->title }}</a>
                <span class="badge bg-primary rounded-pill">{{$category->products->count()}}</span>
            </li>
        @endforeach
    </ul>

@endsection


@section('title')
    Categories
@endsection
