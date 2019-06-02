<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/my.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/my.js') }}"></script>
</head>
<body>
@section('sidebar')
   <div class="container mb-3">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <a class="navbar-brand" href="#">Navbar</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarColor02">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Features</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Pricing</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">About</a>
                   </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Search">
                   <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
               </form>
           </div>
       </nav>
   </div>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>