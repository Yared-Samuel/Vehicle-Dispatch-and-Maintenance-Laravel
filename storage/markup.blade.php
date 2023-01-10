<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
</head>
<body>
    @include('layouts.inc.navbar')
    

    @yield('content')

    <script src="{{ asset('frontend/js/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
</body>
</html>