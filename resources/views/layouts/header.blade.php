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

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/my.css') }}">

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/my.js') }}"></script>
</head>
<body>
<div class="wrapper">

    @section('sidebar')
        <div class="container mb-3">
            <nav class="header navbar navbar-expand-lg navbar-dark">
                <a href="/" class="nav-link p-0 pr-2">
                    <img class="mr-2" src="/img/logo.png" alt="image">
                </a>
                <a href="/" class="name-logo">COMMENTS</a>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav list mr-auto">
                        <a href="/show-all">View comments</a>
                        <a href="/comment/create">Add comments</a>
                    </ul>
                </div>
            </nav>
        </div>
    @show

    <div class="content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @section('footer')
        <div class="container">
            <nav class="footer navbar navbar-expand-lg navbar-dark">
                <a href="https://www.instagram.com/road_.to_.the_.dream/" target="_blank" class="nav-link p-0 pr-2">
                    <img class="mr-3" src="/img/instagram.png" alt="image">
                </a>
                <a href="https://vk.com/id181602675" target="_blank" class="nav-link p-0 pr-2">
                    <img class="mr-5" src="/img/vk.png" alt="image">
                </a>

                <div class="foo">
                    <p class="main">Developer : </p>
                    <p>Sushko Sergey</p>
                    <div class="space"></div>
                    <p class="main">E-mail: </p>
                    <p>rpz14.sergey@gmail.com</p>
                </div>
            </nav>
        </div>
    @show

</div>
</body>
</html>