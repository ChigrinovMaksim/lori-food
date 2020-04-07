@extends('base')

@push('styles')
    {!! Html::style('css/gallery.css') !!}
@endpush

{{--@push('footer-scripts')--}}
{{--    {!! Html::script('js/pizza-city.js') !!}--}}
{{--@endpush--}}

@section('content')

    <div class="gallery_slider">

        <div class="fountain_gallery">
            <a href="{{ route('get::fountain') }}">
                <div class="restaurant_gallery_name">
                    <img src="images/fountain-logo.png" alt="">
                </div>
            </a>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/gallery/fountain/1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/3.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/5.png" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/6.png" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/7.png" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/8.png" alt="Seventh slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/9.png" alt="Eighth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/10.png" alt="Ninth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/11.png" alt="Tenth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/12.png" alt="Eleventh slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="fountain_gallery">
            <a href="{{ route('get::pizza-city') }}">
                <div class="restaurant_gallery_name">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
            </a>
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/gallery/fountain/1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/3.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/5.png" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/6.png" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/7.png" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/8.png" alt="Seventh slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/9.png" alt="Eighth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/10.png" alt="Ninth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/11.png" alt="Tenth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/12.png" alt="Eleventh slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="fountain_gallery">
            <a href="{{ route('get::knjaga-vtiha') }}">
                <div class="restaurant_gallery_name">
                    <img src="images/knjaga-vtiha-logo.png" alt="">
                </div>
            </a>
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/gallery/knjaga-vtiha/1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/knjaga-vtiha/2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/knjaga-vtiha/3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/knjaga-vtiha/4.png" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/knjaga-vtiha/5.png" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="fountain_gallery">
            <a href="{{ route('get::pizza-city-2') }}">
                <div class="restaurant_gallery_name">
                    <img src="images/pizza-city-logo.png" alt="">
                </div>
            </a>
            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/gallery/fountain/1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/3.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/4.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/5.png" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/6.png" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/7.png" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/8.png" alt="Seventh slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/9.png" alt="Eighth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/10.png" alt="Ninth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/11.png" alt="Tenth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/gallery/fountain/12.png" alt="Eleventh slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

@endsection