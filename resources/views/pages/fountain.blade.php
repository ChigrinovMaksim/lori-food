@extends('base')

@push('styles')
    {!! Html::style('css/fountain.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/fountain.js') !!}
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">
            <div class="restaurant_name_fountain">
                <img src="images/fountain-logo1.png" alt="">
            </div>
        </div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/1.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/2.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/3.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/4.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/5.jpg" class="fountain_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_fountain">
                <div class="fountain_restaurant_img">
                    <img src="images/fountain/6.jpg" class="fountain_restaurant_image">
                </div>
            </div>

        </div>
    </div>
@endsection