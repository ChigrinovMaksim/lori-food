@extends('base')

@push('styles')
    {!! Html::style('css/about.css') !!}
@endpush

{{--@push('footer-scripts')--}}
{{--    {!! Html::script('js/pizza-city.js') !!}--}}
{{--@endpush--}}

@section('content')
    <div class="title_about">О нас</div>
    <div class="about_text">
        Вскоре мы расскажем о себе =)
    </div>
@endsection