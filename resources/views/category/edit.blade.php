@extends('layouts.productLayout')



@section('content')


    <form action="{{ route('updatecategories',$category->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="enter category title" value="{{$category->title}}">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" placeholder="enter category description" value="{{$category->description}}">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-primary">Update Category</button>
        </div>
    </form>

@endsection

@section('title')
    Edit Category
@endsection
