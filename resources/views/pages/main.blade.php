@extends('base')

@push('styles')
    {!! Html::style('css/main.css') !!}
@endpush

@push('footer-scripts')
    {!! Html::script('js/main.js') !!}
@endpush

@section('content')
    <div class="header_actions_message">
        <div class="main_delivery_block">
            <div class="header_delivery_contacts">
                <div class="delivery_information">Доставка Lori-Food:<br>бесплатно от 500 грн</div>
                <div class="delivery_fountain">У Фонтана: <a href="tel:+380487224647">0487224647</a></div>
                <div class="delivery_knjaga-vtiha">Княжа Втiха: <a href="tel:+380487594746">0487594746</a></div>
                <div class="delivery_pizza-city">Пицца-Сити: <a href="tel:+380487224544">0487224544</a></div>
            </div>
            <div class="delivery_terms">
                <div class="delivery_terms_title">Доставка:</div>
                <div class="delivery_time">с 11:00 до 22:00</div>
{{--                <div class="delivery_price">Бесплатная доставка от 500 грн</div>--}}
            </div>
            <div class="delivery_partners">
                <div class="delivery_partners_title">Партнеры по доставке:</div>
                <div class="partners_dostavochka">Доставочка: <a href="tel:+380487704470">048-770-44-70</a></div>
                <div class="partners_privozilochka">Привозилочка: <a href="tel:+380487010525">048-701-05-25</a></div>
            </div>
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
                        <a href="tel:+380487224647" class="restaurant_phone_style">048-787-46-47</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.7525815133495!2d30.752186015791953!3d46.47340857355584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b0e6efde2053659!2z0LrQsNGE0LUgItCjINGE0L7QvdGC0LDQvdCwIg!5e0!3m2!1sru!2sua!4v1586373868376!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <a href="{{ route('get::pizza-city') }}">
                    <div class="restaurant_name_pizza-city">
                        <img src="images/pizza-city-logo.png" alt="">
                    </div>
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city/face-pizza.jpg" alt="" class="pizza-city_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Екатерининская 20</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a><br>
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-787-45-44</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.7668409128488!2d30.7375313067523!3d46.48306023870833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41660a0a583dea56!2sPizza%20City!5e0!3m2!1sru!2sua!4v1586373958805!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
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
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="body_restaurant_menu">
                <a href="{{ route('get::pizza-city-2') }}">
                    <div class="restaurant_name_pizza-city-2">
                        <img src="images/pizza-city-logo.png" alt="">
                    </div>
                    <div class="menu_restaurant_img">
                        <img src="images/pizza_city_2/face_pizza_2.jpg" alt="" class="menu_restaurant_img">
                    </div>
                </a>
                <div class="menu_content">
                    <div class="menu_restaurant_contacts">Базарная 1а</div>
                    <div class="menu_restaurant_phone">
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-722-45-44</a><br>
                        <a href="tel:+380487224544" class="restaurant_phone_style">048-787-45-44</a>
                    </div>
                </div>
                <div class="restaurant_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.7525815133495!2d30.752186015791953!3d46.47340857355584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b0e6efde2053659!2z0LrQsNGE0LUgItCjINGE0L7QvdGC0LDQvdCwIg!5e0!3m2!1sru!2sua!4v1586373868376!5m2!1sru!2sua"
                            width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>


        </div>
    </div>
@endsection