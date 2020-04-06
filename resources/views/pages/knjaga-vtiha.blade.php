@extends('base')

@push('styles')
    {!! Html::style('css/knjaga-vtiha.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/knjaga-vtiha.js') !!}
@endpush

@section('content')
    <div class="body_content">
        <div class="body_content_title">меню Княжа Втiха</div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/breakfast-salad.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/main-dishes.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/snacks.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/alcohol-bear-snacks.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/kebab-hot-drinks.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

            <div class="body_restaurant_knjaga_vtiha">
                <div class="knjaga_vtiha_restaurant_img">
                    <img src="images/fountain/alcohol-soup.jpg" class="knjaga_vtiha_restaurant_image">
                </div>
            </div>

        </div>
    </div>
@endsection