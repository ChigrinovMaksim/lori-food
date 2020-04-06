@extends('base')

{{--@push('styles')--}}
{{--    {!! Html::style('css/pizza-city.css') !!}--}}
{{--@endpush--}}

{{--@push('footer-scripts')--}}
{{--    {!! Html::script('js/pizza-city.js') !!}--}}
{{--@endpush--}}

@section('content')
    <div class="fountain_gallery">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/pizza_city/pasta.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/pizza_city/pasta.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/pizza_city/pasta.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <style>
        body {
            background-color: transparent;
        }
        .carousel-inner {
            max-width: 800px;
            height: auto;
            margin: 0 auto;
        }
        .carousel-item {
            width: 100%;
            height: 100%;
        }
    </style>
@endsection