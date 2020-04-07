@extends('base')

@push('styles')
    {!! Html::style('css/delivery.css') !!}
@endpush

{{--@push('footer-scripts')--}}
{{--    {!! Html::script('js/pizza-city.js') !!}--}}
{{--@endpush--}}

@section('content')
    <div class="title_delivery">Партнеры по доставке</div>
    <div class="delivery_text">
        Доставка по Украине согласно тарифам "Новой Почты".
        Отправка товара осуществляется только после предоплаты от 10% суммы заказа.
        Стоимость наложенного платежа «Нова Пошта»: от 2% от суммы заказа + 20 грн.
        Стоимость доставки телевизоров составляет от 75 грн. Просим учесть, что при
        заказе наложенным платежом вы оплачиваете дополнительно комиссию Нова Пошта
        за обратную пересылку денег в размере от 2% от суммы заказа + 20 грн. за конверт
        для пересылки денег.
    </div>
    <div class="delivery_contacts">
        <div class="delivery_dostavochka">Доставочка: <a href="tel:+380487704470">048-770-44-70</a></div>
        <div class="delivery_privozilochka">Привозилочка: <a href="tel:+380487010525">048-701-05-25</a></div>
    </div>
@endsection