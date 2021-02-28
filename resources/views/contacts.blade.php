@extends('layouts.app', [
    'title' => __('page_headers.contacts')
])

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="contacts left">
                <img src="{{ asset('images/icons/location.png') }}" alt="">
                <div class="contacts__text">
                    <strong>СУРОҒА:</strong> Хиёбони Рудаки 22,
                    <br>
                    734012 Душанбе, Тоҷикистон,
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="contacts right">
                <img src="{{ asset('images/icons/info.png') }}" alt="">
                <div class="contacts__text">
                    <strong>Email:</strong> info@sanoat.tj
                    <br>
                    <strong>Телефон:</strong> (+992 37) 227 71 91, 221 88 89
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="maps-wrapper">
                <h4>{{ __('form.weOnMap') }}:</h4>

                <iframe
                    class="gmap"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99833.57815263452!2d68.71154129228775!3d38.56143726623444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b5d16fd27bf89b%3A0xddf9378ddea1fd44!2z0JTRg9GI0LDQvdCx0LUsINCi0LDQtNC20LjQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1610011271654!5m2!1sru!2s" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
@endsection