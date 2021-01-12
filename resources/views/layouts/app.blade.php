<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @if (isset($title))
            {{ $title }} &middot; РАЁСАТИ ИҶОЗАТНОМАДИҲӢ
        @else
            РАЁСАТИ ИҶОЗАТНОМАДИҲӢ
        @endif
    </title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    
    @section('head')        
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/hamburgers/dist/hamburgers.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/parsleyjs/src/parsley.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/toastr/build/toastr.min.css') }}" rel="stylesheet">
    @show
</head>
<body>
    <div id="app">
        <header class="app-header" style="background-image: url({{ asset('images/bg/header.png') }})">
            <div class="container">
                <nav class="navbar py-0 px-0">
                    <div class="user">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/user.png') }}" alt="user">
                        </a>
                        
                        <ul class="user__links">
                            <li><a href="#">{{ __('menu.privateData') }}</a></li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('auth.logout') }}</a>
                                
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
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
                </nav>

                <div class="logos">
                    <div class="logos__item left">
                        <img src="{{ asset('images/logo.png') }}" class="logos__img" alt="Logo">
                        <div class="logos__text">
                            <p>ВАЗОРАТИ САНОАТ <br> ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ <br> ТОҶИКИСТОН</p>
                            <p class="mb-0">РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</p>
                        </div>
                    </div>
                    <div class="logos__item right">
                        <img src="{{ asset('images/gerb.png') }}" class="logos__img" alt="Logo">
                        <div class="logos__text">
                            <p>Министерство промышленности <br> и новых технологий Республики <br> Таджикистан</p>
                            <p class="mb-0">УПРАВЛЕНИЕ ПО ВЫДАЧЕ РАЗРЕШЕНИЙ</p>
                        </div>
                    </div>
                </div>

                <ul class="faq">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">{{ __('menu.siteMap') }}</a></li>
                    <li><a href="#">{{ __('menu.otherResources') }}</a></li>
                </ul>

                <nav class="menu">
                    <ul>
                        <li class="{{ Route::currentRouteName() === 'home' ? 'active' : null }}"><a href="{{ route('home') }}">{{ __('menu.home') }}</a></li>
                        <li class="{{ Route::currentRouteName() === 'applications' ? 'active' : null }}"><a href="{{ route('applications') }}">{{ __('menu.myApplications') }}</a></li>
                        <li class="{{ Route::currentRouteName() === 'applications.create' ? 'active' : null }}"><a href="{{ route('applications.create') }}">{{ __('menu.createApplication') }}</a></li>
                        <li class="{{ Route::currentRouteName() === 'docTypes' ? 'active' : null }}"><a href="{{ route('docTypes') }}">{{ __('menu.docTypes') }}</a></li>
                        <li class="{{ Route::currentRouteName() === 'legislature' ? 'active' : null }}"><a href="{{ route('legislature') }}">{{ __('menu.legislature') }}</a></li>
                        <li class="{{ Route::currentRouteName() === 'contacts' ? 'active' : null }}"><a href="{{ route('contacts') }}">{{ __('menu.contacts') }}</a></li>
                    </ul>

                    {{-- <div class="search">
                        <a href="#" class="search__icon">
                            <img src="{{ asset('images/icons/lupa.png') }}" alt="">
                        </a>
                    </div> --}}
                </nav>
            </div>
            
            <div class="mobile-menu">
                <div class="user">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/user.png') }}" alt="user">
                    </a>
                    <ul class="user__links">
                        <li><a href="#">{{ __('menu.privateData') }}</a></li>
                        <li><a href="#">{{ __('auth.logout') }}</a></li>
                    </ul>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-1">
                    <div class="dropdown language-selector p-0">
                        <a href="#" class="language-selector__anchor" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-tj mr-2"></span> Точ
                            <i class="fas fa-angle-down ml-2"></i>
                        </a>
                        <div class="dropdown-menu language-menu" aria-labelledby="dropdownLanguageSelector">
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-ru mr-2"></span> РУС
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-us mr-2"></span> ENG
                            </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <div class="search">
                            <a href="#" class="search__icon">
                                <img src="{{ asset('images/icons/lupa.png') }}" alt="">
                            </a>
                        </div> --}}

                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>

                        <div class="mobile-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">{{ __('menu.home') }}</a></li>
                                <li><a href="{{ route('applications') }}">{{ __('menu.myApplications') }}</a></li>
                                <li><a href="{{ route('applications.create') }}">{{ __('menu.createApplication') }}</a></li>
                                <li><a href="{{ route('docTypes') }}">{{ __('menu.docTypes') }}</a></li>
                                <li><a href="{{ route('legislature') }}">{{ __('menu.legislature') }}</a></li>
                                <li><a href="{{ route('contacts') }}">{{ __('menu.contacts') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container h-100">
                <div class="main-wrapper">
                    @if (isset($title))
                        <div class="page-title">
                            <h4>{{ $title }}</h4>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>

        <footer class="footer">
            <span class="footer__link">IJOZATNOMA.TJ</span> 
            <span class="d-none d-sm-block">- ҲАМАИ ҲУҚУҚҲО ДАР ТАҲТИ ҲИМОЯ ҚАРОР ДОРАНД</span>
        </footer>
    </div>

    @section('scripts')
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js') }}"></script>
        <script src="{{ asset('js/custom/plugins.init.min.js') }}"></script>
        <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
        <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
        <script src="{{ asset('plugins/toastr/build/toastr.min.js') }}"></script>
    @show
</body>
</html>
