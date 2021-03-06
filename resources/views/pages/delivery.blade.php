@extends('base')

@push('styles')
    {!! Html::style('css/delivery.css') !!}
@endpush

{{--@push('footer-scripts')--}}
{{--    {!! Html::script('js/pizza-city.js') !!}--}}
{{--@endpush--}}

@section('content')
    <div class="title_delivery">Доставка Lori-Food:<br>от 500 грн бесплатно</div>
    <div class="delivery_text">
        <div class="delivery_conditions">
            Условия доставки: <br>
            При заказе менее 500 грн доставка 50 грн по Приморскому району. Больше 500 грн бесплатно  <br>
            Таирово, Черёмушки, Поселок котовского и пр. доставка 100 грн вне зависимости от суммы заказа  <br>
        </div>
        <br>
        Предоставляем на доставку все виды маринованного мяса:<br>
        <ul>
            <li>Телятина(филе)</li>
            <li>Баранина(каре)</li>
            <li>Курица(крылья, бедра)</li>
            <li>Свинина(шея, кострец, ребра, челагач)</li>
        </ul>
        Стоимость маринованного мяса <span style="color: #B10400; font-style: italic; font-size: 25px">-30%</span> от стоимости готовой продукции
    </div>
    <div class="delivery_contacts">
        <div class="delivery_partners">Наши партнеры:</div>
        <div class="delivery_dostavochka">Доставочка: <a href="tel:+380487704470">048-770-44-70</a></div>
        <div class="delivery_privozilochka">Привозилочка: <a href="tel:+380487010525">048-701-05-25</a></div>
    </div>
@endsection