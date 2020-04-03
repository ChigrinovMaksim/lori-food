<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lori food</title>

    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

    @stack('styles')
    @stack('head-scripts')
</head>

<body>

@include('header')

@yield('content')

@include('footer')

@stack('footer-scripts')

</body>
</html>
