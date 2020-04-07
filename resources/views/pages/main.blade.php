@extends('base')

@push('styles')
    {!! Html::style('css/main.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/main.js') !!}
@endpush

@section('content')
    <div class="header_actions_message">
        <div class="header_actions_text">режим работы доставки<br>
            с 11:00 до 21:00
        </div>
        <div class="header_actions_border_animation"></div>
        <!--    <div class="header_actions_images">-->
        <!--        <img src="images/actions.png" alt="" class="actions_images">-->
        <!--    </div>-->
    </div>

    <div class="body_content">
        <div class="body_content_title">Наши заведения ждут Вас</div>
        <div class="body_restaurant" id="page_animation">

            <div class="body_restaurant_menu">
                <div class="restaurant_name_fountain">
                    <img src="images/fountain-logo.png" alt="">
                </div>
                <a href="{{ route('get::fountain') }}">
                    <div class="menu_restaurant_img">
                        <img src="images/fountain/face-fountain.jpg" alt="" class="fountain_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Базарная 1</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487224647" class="restaurant_phone_style">048-722-46-47</a><br>
                        <a href="tel:+380487224647" class="restaurant_phone_style">048-722-46-47</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.9450643216525!2d30.752117629257693!3d46.472860422311676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63170d5dc400f%3A0x2f10d47d6d04d440!2z0YPQuy4g0JHQsNC30LDRgNC90LDRjywgMSwg0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1586283265535!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <div class="restaurant_name_pizza-city">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
                <a href="{{ route('get::pizza-city') }}">
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face_pizza.jpg" alt="" class="pizza-city_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Екатерининская 22</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a><br>
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.312841530318!2d30.736038715792333!3d46.48211747296498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63199c942ed0f%3A0x6a0b48ce72abf8ae!2z0YPQuy4g0JXQutCw0YLQtdGA0LjQvdC40L3RgdC60LDRjywgMjIsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1586283332443!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <div class="restaurant_name_knjaga-vtiha">
                    <img src="images/knjaga-vtiha-logo.png" alt="">
                </div>
                <a href="{{ route('get::knjaga-vtiha') }}">
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face_pizza.jpg" alt="" class="menu_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Маразлиевская 1\11</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487594746" class="restaurant_phone_style">048-759-47-46</a><br>
                        <a href="tel:+380487594746" class="restaurant_phone_style">048-759-47-46</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.384399728024!2d30.748436215792232!3d46.48070037306121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631a0276684ed%3A0xcb7e061ffdf12dee!2z0LLRg9C70LjRhtGPINCc0LDRgNCw0LfQu9GW0ZfQstGB0YzQutCwLCAxMTEsINCe0LTQtdGB0LAsINCe0LTQtdGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1586283416782!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <div class="restaurant_name_pizza-city-2">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
                <a href="{{ route('get::pizza-city-2') }}">
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face_pizza.jpg" alt="" class="menu_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Ждем открытия</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380933736347" class="restaurant_phone_style">048-722-46-47</a><br>
                        <a href="tel:+380933736347" class="restaurant_phone_style">048-722-46-47</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.9450643216525!2d30.752117629257693!3d46.472860422311676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63170d5dc400f%3A0x2f10d47d6d04d440!2z0YPQuy4g0JHQsNC30LDRgNC90LDRjywgMSwg0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1586283265535!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>


        </div>
    </div>
@endsection