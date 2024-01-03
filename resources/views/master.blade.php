<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{route('categoryId', ['id' =>$category['id']])}}" class="dropdown-item">{{$category['name']}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</nav>


@yield('body')
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
