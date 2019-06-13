<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/welcome.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Add comments !
                </div>

                <div class="links">
                    <a href="show-all">Show comments</a>
                    <a href="comment/create">Add comment</a>
                </div>
            </div>
        </div>
    </body>
</html>
