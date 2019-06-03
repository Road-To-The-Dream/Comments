<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/my.css') }}">

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/my.js') }}"></script>
</head>
<body>
@section('sidebar')
    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Comments</a>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="add">View comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all">Add comments</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>