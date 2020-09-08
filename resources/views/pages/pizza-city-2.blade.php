@extends('base')

@push('styles')
    {!! Html::style('css/pizza-city-2.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/pizza-city-2.js') !!}
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">
            <div class="restaurant_name_pizza-city-2">
                <img src="images/pizza-city-logo.png" alt="">
            </div>
        </div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_pizza_city_2">
                <div class="pizza_city_2_restaurant_img">
                    <img src="images/pizza_city_2/1.jpg" class="pizza_city_2_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city_2">
                <div class="pizza_city_2_restaurant_img">
                    <img src="images/pizza_city_2/2.jpg" class="pizza_city_2_restaurant_image">
                </div>
            </div>

        </div>
    </div>
@endsection