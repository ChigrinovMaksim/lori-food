@extends('base')

@push('styles')
    {!! Html::style('css/fountain.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/fountain.js') !!}
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">меню У Фонтана</div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/breakfast-salad.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/main-dishes.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/snacks.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/alcohol-bear-snacks.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/kebab-hot-drinks.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/alcohol-soup.jpg" class="fountain_restaurant_image">
                </div>
            </div>

        </div>
    </div>
@endsection