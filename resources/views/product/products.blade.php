@extends('layouts.productLayout')

@section('content')


    <table class="table table-sm  table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('singleProduct', $product->id) }}">View</a>
                        <a class="btn btn-sm btn-success" href="{{ route('editproduct',$product->id)}}">edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('deleteproduct',$product->id)}}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->render() }}
@endsection



@section('title')
    Products
@endsection
