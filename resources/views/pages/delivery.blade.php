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

    </div>
    <div class="delivery_contacts">
        <div class="delivery_dostavochka">Доставочка: <a href="tel:+380487704470">048-770-44-70</a></div>
        <div class="delivery_privozilochka">Привозилочка: <a href="tel:+380487010525">048-701-05-25</a></div>
    </div>
@endsection