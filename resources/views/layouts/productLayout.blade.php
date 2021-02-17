<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href=" {{ asset('css/bootstrap.min.css') }} " rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{asset('')}}">YAT Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == '/'?'active':'' }} " aria-current="page" href="{{asset('')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::fullUrl() == route('allproducts') ?'active':'' }}" href="{{route('allproducts')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::fullUrl() == route('addProducts') ?'active':'' }}" href="{{route('addProducts')}}">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::fullUrl() == route('allcategories') ?'active':'' }}" href="{{route('allcategories')}}">Categories</a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="w-75  p-5">
            @yield('content')

        </div>
    </div>
</body>

</html>
