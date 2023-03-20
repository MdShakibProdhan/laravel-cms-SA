<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>

    <div class="container">
        @yield('content')
    </div>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>


{{-- <!DOCTYPE html>
<html>

<head>
    <title>Your Page Title</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html> --}}
