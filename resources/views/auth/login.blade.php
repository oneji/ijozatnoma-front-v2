<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('page_headers.login') }} &middot; {{ __('page_headers.main') }}</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg" style="background-image: url({{ asset('images/bg/login-clip.png') }})">
            <div class="container">
                <div class="row">
                    <div class="dropdown language-selector">
                        @switch(App::getLocale())
                            @case('tj')
                                <a href="#" class="language-selector__anchor" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-tj mr-2"></span> Точ
                                    <i class="fas fa-angle-down ml-2"></i>
                                </a>
                                <div class="dropdown-menu language-menu" aria-labelledby="dropdownLanguageSelector">
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'ru')) }}">
                                        <span class="flag-icon flag-icon-ru mr-2"></span> РУС
                                    </a>
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'en')) }}">
                                        <span class="flag-icon flag-icon-us mr-2"></span> ENG
                                    </a>
                                </div>
                                @break
                            @case('ru')
                                <a href="#" class="language-selector__anchor" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-ru mr-2"></span> РУС
                                    <i class="fas fa-angle-down ml-2"></i>
                                </a>
                                <div class="dropdown-menu language-menu" aria-labelledby="dropdownLanguageSelector">
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'tj')) }}">
                                        <span class="flag-icon flag-icon-tj mr-2"></span> ТОЧ
                                    </a>
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'en')) }}">
                                        <span class="flag-icon flag-icon-us mr-2"></span> ENG
                                    </a>
                                </div>
                                @break
                            @case('en')
                                <a href="#" class="language-selector__anchor" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-us mr-2"></span> ENG
                                    <i class="fas fa-angle-down ml-2"></i>
                                </a>
                                <div class="dropdown-menu language-menu" aria-labelledby="dropdownLanguageSelector">
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'tj')) }}">
                                        <span class="flag-icon flag-icon-tj mr-2"></span> ТОЧ
                                    </a>
                                    <a class="dropdown-item" href="{{ LaravelLocalization::localizeUrl(route('lang.switch', 'ru')) }}">
                                        <span class="flag-icon flag-icon-ru mr-2"></span> РУС
                                    </a>
                                </div>
                                @break
                            @default
                                
                        @endswitch
                    </div>
                    <div class="col-sm-12">
                        <div class="form-container">
                            <div class="form-container__title">
                                <img src="{{ asset('images/icons/key.png') }}" alt="">
                                <p>{{ __('auth.loginFormTitle') }}</p>
                            </div>
                            
                            <form action="{{ route('login') }}" method="POST" class="form" data-parsley-validate>
                                @csrf
                
                                <div class="form__header">
                                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
                                    <div class="text">
                                        <p>ВАЗОРАТИ САНОАТ ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ ТОҶИКИСТОН</p>
                                        <p class="mb-0">{{ __('page_headers.main') }}</p>
                                    </div>
                                </div>

                                
                                <div class="form__body">
                                    @if ($errors->any())
                                        <div class="form-group">
                                            <div class="alert alert-danger">
                                                <ul class="mb-0 pl-3">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="phone_number" class="auth-form-control">{{ __('form_placeholders.phoneNumber') }}</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="phone_number"
                                            id="phone_number"
                                            placeholder="{{ __('form_placeholders.example') }}: 919-00-00-00"
                                            required
                                        >
                                    </div>
                
                                    <div class="form-group">
                                        <button type="submit" class="auth-button btn-block">
                                            {{ __('auth.sendSms') }}
                                            <img src="{{ asset('images/icons/fly.png') }}" alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                
                        <footer class="footer">
                            <span class="footer__link">IJOZATNOMA.TJ</span> 
                            <span class="d-none d-sm-block">- ҲАМАИ ҲУҚУҚҲО ДАР ТАҲТИ ҲИМОЯ ҚАРОР ДОРАНД</span>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script src="{{ asset('js/custom/login.js') }}"></script>
</body>
</html>
