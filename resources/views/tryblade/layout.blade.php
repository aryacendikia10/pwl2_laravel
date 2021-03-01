<!DOCTYPE html>
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @section('sidebar')
    this is the master sidebar
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

