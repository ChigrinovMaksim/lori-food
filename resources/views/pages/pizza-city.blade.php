@extends('base')

@push('styles')
    <link rel="stylesheet" href="{{ url('css/pizza-city.css') }}">
@endpush

@push('footer-scripts')
    <script type="text/javascript" src="{{ url('js/pizza.js') }}"></script>
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">меню pizza city</div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/pizza1.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/pizza2.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/pasta.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/meat-dishes.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/salad.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/salad2.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/burgers.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/first-dishes.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/breakfast.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/aperitif.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/vareniki.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/fish-dishes.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/bear-card.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/bar.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/hot-drinks.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/longdrinks.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_pizza_city">
                <div class="pizza_city_restaurant_img">
                    <img src="images/pizza_city/shotdrinks.jpg" class="pizza_city_restaurant_image">
                </div>
            </div>

        </div>
    </div>
@endsection