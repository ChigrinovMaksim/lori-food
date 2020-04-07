@extends('base')

@push('styles')
    {!! Html::style('css/knjaga-vtiha.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/knjaga-vtiha.js') !!}
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">
            <div class="restaurant_name_knjaga-vtiha">
                <img src="images/knjaga-vtiha-logo.png" alt="">
            </div>
        </div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/knjaga-vtiha/1.png" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/knjaga-vtiha/2.png" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/knjaga-vtiha/3.png" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/knjaga-vtiha/4.png" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>
        </div>
    </div>
@endsection