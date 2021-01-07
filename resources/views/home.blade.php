@extends('layouts.app')

@section('head')
    @parent
    
    <link rel="stylesheet" href="{{ asset('plugins/slick-slider/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-slider/slick/slick-theme.css') }}"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="slider">
                <div class="slider__item">
                    <img src="{{ asset('images/slider/1.png') }}" alt="Slider photo">
                    <div class="slider__item__text d-none d-sm-flex">САНОАТИ НАСОҶИИ ҶУМҲУРИИ ТОҶИКИСТОН - КОРХОНАҲО ВА ТЕХНОЛОГИЯҲОИ НАВ</div>
                </div>
                <div class="slider__item">
                    <img src="{{ asset('images/slider/1.png') }}" alt="Slider photo">
                    <div class="slider__item__text d-none d-sm-flex">САНОАТИ НАСОҶИИ ҶУМҲУРИИ ТОҶИКИСТОН - КОРХОНАҲО ВА ТЕХНОЛОГИЯҲОИ НАВ</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="home-text">
                <h4>МАҚСАДИ АСОСИИ СОМОНАИ ЗЕРИН:</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet eros sit amet orci 
                    hendrerit, et hendrerit dui blandit. Praesent elementum ornare enim, sit amet feugiat nibh 
                    aliquam ac. Vestibulum magna massa, hendrerit eget mattis vitae, feugiat eu eros. Duis quis
                    sem orci. Aliquam pellentesque pulvinar vehicula. Pellentesque tempus at massa vel interdum.
                    Aliquam erat volutpat. Integer scelerisque ac ligula blandit dignissim. Integer non mauris vel
                    diam vulputate hendrerit non sit amet velit.
                </p>
                <h4>МАҚСАДИ АСОСИИ СОМОНАИ ЗЕРИН:</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet eros sit amet orci 
                    hendrerit, et hendrerit dui blandit. Praesent elementum ornare enim, sit amet feugiat nibh 
                    aliquam ac. Vestibulum magna massa, hendrerit eget mattis vitae, feugiat eu eros. Duis quis
                    sem orci. Aliquam pellentesque pulvinar vehicula. Pellentesque tempus at massa vel interdum.
                    Aliquam erat volutpat. Integer scelerisque ac ligula blandit dignissim. Integer non mauris vel
                    diam vulputate hendrerit non sit amet velit.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('plugins/slick-slider/slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: false,
                dots: true,
                arrows: false,
            });
        });
    </script>
@endsection
