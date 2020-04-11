{!! Html::style('css/header.css') !!}

<div class="header">
    <div class="header_navigation">
        <div class="header_logo">
            <a href="{{ route('get::main') }}">
                <img src="images/logo.png" alt="" class="header_logo_img">
            </a>
        </div>
        <div class="header_text">"Lori food" - сеть ресторанов</div>
        <div class="header_menu">
            <ul class="header_menu_content">
                <li><a href="{{ route('get::main') }}">Главная</a></li>
                <li><a href="{{ route('get::gallery') }}">Галерея</a></li>
                <li><a href="{{ route('get::delivery') }}">Доставка</a></li>
                <li><a href="{{ route('get::about') }}">О нас</a></li>
            </ul>
        </div>
    </div>
</div>