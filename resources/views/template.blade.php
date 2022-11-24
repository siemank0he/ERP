<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System @yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <nav>
        <a href="{{ URL::to('invoices') }}">Faktury</a>
    </nav>

    @yield('content')

</body>

    <script src="{{ URL::asset('js/main.js') }}"></script>
</html>
