<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{url('js/bootstrap.min.css')}}"></script>
    <title>CourseWare</title>
</head>
<body style="background-color:rgb(236, 232, 232);">

    @include('nav')

    <div class="container main-container" >
        @yield('content')
    </div>

    <footer>
        Copyright &copy; 2020. CourseWare. <br>
        All rights reversed.
    </footer>
</body>
</html>
