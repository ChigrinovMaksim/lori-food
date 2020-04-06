<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="OmQH0Y0Wzvthl-tAb2uReppZ8M6uSz6TR-oiFre_9rs" />
    <title>Lori food</title>

    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/styles.css') !!}

    {!! Html::script('js/jquery-3.1.0.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jqueryValidate.js') !!}

    @stack('styles')
    @stack('head-scripts')

    <script>let CSRFToken = '{{ csrf_token() }}';</script>
</head>

<body>

@include('header')

@yield('content')

@include('footer')
@include('modal.callback')

@stack('footer-scripts')

{!! Html::script('js/phone-mask.min.js') !!}
{!! Html::script('js/sweetalert.min.js') !!}
{!! Html::script('js/popper.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

</body>
</html>
