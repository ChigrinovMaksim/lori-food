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
                <a href="{{ route('get::fountain') }}">
                <div class="restaurant_name_fountain">
                    <img src="images/fountain-logo.png" alt="">
                </div>
                    <div class="menu_restaurant_img">
                        <img src="images/fountain/face-fountain.jpg" alt="" class="fountain_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Базарная 1a</div>
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
                <a href="{{ route('get::pizza-city') }}">
                <div class="restaurant_name_pizza-city">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face_pizza.jpg" alt="" class="pizza-city_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Екатерининская 20</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a><br>
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.266278060462!2d30.735895415792182!3d46.48303957290236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631982ec71251%3A0xb49184fb6f69623a!2z0YPQuy4g0JXQutCw0YLQtdGA0LjQvdC40L3RgdC60LDRjywgMjAsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1586346515100!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <a href="{{ route('get::knjaga-vtiha') }}">
                <div class="restaurant_name_knjaga-vtiha">
                    <img src="images/knjaga-vtiha-logo.png" alt="">
                </div>
                    <div class="menu_restaurant_img">
                        <img src="images/knjaga-vtiha/face-knjaga-vtiha.png" alt="" class="menu_restaurant_img">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1155.1954679364528!2d30.75178325834503!3d46.47775074593154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63175b698df7f%3A0xdbc46efcd80e40d8!2z0KDQtdGB0YLQvtGA0LDQvSDQmtC90Y_QttCwINCS0YLRltGF0LA!5e0!3m2!1sru!2sua!4v1586346705329!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <a href="{{ route('get::pizza-city-2') }}">
                <div class="restaurant_name_pizza-city-2">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face_pizza.jpg" alt="" class="menu_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Базарная 1а</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380737224647" class="restaurant_phone_style">073-722-46-47</a><br>
                        <a href="tel:+380737224647" class="restaurant_phone_style">073-722-46-47</a><br>

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