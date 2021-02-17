@extends('layouts.productLayout')

@section('content')
    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $category->title }}
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
        @endforeach
    </ul>

@endsection


@section('title')
    Categories
@endsection
