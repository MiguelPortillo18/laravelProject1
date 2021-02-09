<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <style>
        .active{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
    
    <!-- script -->
</body>
</html>