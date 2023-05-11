<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our project</title>
</head>

<body class="antialiased">
    <h2>Basic template</h2>
    @yield('content')
</body>

</html>