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

    @section('head')
        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/hamburgers/dist/hamburgers.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css') }}">
    @show
</head>
<body>
    <div id="app">
        <header class="app-header" style="background-image: url({{ asset('images/bg/header.png') }})">
            <div class="container">
                <nav class="navbar py-0 px-0">
                    <div class="user">
                        <img src="{{ asset('images/user.png') }}" alt="user">
                        
                        <ul class="links-list">
                            <li><a href="#">Ахбороти шахси</a></li>
                            <li><a href="#">Баромад</a></li>
                        </ul>
                    </div>
                    <div class="dropdown language-selector">
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
                </nav>

                <div class="logos-container">
                    <div class="logo-box left">
                        <div class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo">
                        </div>
                        <div class="text text-left d-md-block">
                            <p>ВАЗОРАТИ САНОАТ <br> ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ <br> ТОҶИКИСТОН</p>
                            <p class="mb-0">РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</p>
                        </div>
                    </div>
                    <div class="logo-box right">
                        <div class="text text-right d-md-block">
                            <p>Министерство промышленности <br> и новых технологий Республики <br> Таджикистан</p>
                            <p class="mb-0">УПРАВЛЕНИЕ ПО ВЫДАЧЕ РАЗРЕШЕНИЙ</p>
                        </div>
                        <div class="logo">
                            <img src="{{ asset('images/gerb.png') }}" alt="Logo">
                        </div>
                    </div>
                </div>

                <div class="faq-container">
                    <ul class="faq-list">
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">ХАРИТАИ СОМОНА</a>
                        </li>
                        <li>
                            <a href="#">ДИГАР СОМОНАХО</a>
                        </li>
                    </ul>
                </div>

                <div class="menu">
                    <ul>
                        <li class="{{ Route::currentRouteName() === 'home' ? 'active' : null }}"><a href="{{ route('home') }}">АСОСӢ</a></li>
                        <li class="{{ Route::currentRouteName() === 'applications' ? 'active' : null }}"><a href="{{ route('applications') }}">ДАРХОСТҲОИ МАН</a></li>
                        <li class="{{ Route::currentRouteName() === 'applications.create' ? 'active' : null }}"><a href="{{ route('applications.create') }}">Дархост кардан</a></li>
                        <li class="{{ Route::currentRouteName() === 'docTypes' ? 'active' : null }}"><a href="{{ route('docTypes') }}">НАМУДИ ФАЪОЛИЯТҲО БО ҲУҶҶАТҲО</a></li>
                        <li class="{{ Route::currentRouteName() === 'legislature' ? 'active' : null }}"><a href="{{ route('legislature') }}">ҚОНУНГУЗОРӢ</a></li>
                        <li class="{{ Route::currentRouteName() === 'contacts' ? 'active' : null }}"><a href="{{ route('contacts') }}">ТАМОС ВА СУРОҒА</a></li>
                    </ul>
                    <div class="search">
                        <a href="#" class="search__icon">
                            <img src="{{ asset('images/icons/lupa.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mobile-menu">
                <div class="user">
                    <img src="{{ asset('images/user.png') }}" alt="user">
                    <ul class="links-list">
                        <li><a href="#">Ахбороти шахси</a></li>
                        <li><a href="#">Баромад</a></li>
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
                        <div class="search">
                            <a href="#" class="search__icon">
                                <img src="{{ asset('images/icons/lupa.png') }}" alt="">
                            </a>
                        </div>
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                        </button>

                        <div class="mobile-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">АСОСӢ</a></li>
                                <li><a href="{{ route('applications') }}">ДАРХОСТҲОИ МАН</a></li>
                                <li><a href="{{ route('applications.create') }}">ДАРХОСТ КАРДАН</a></li>
                                <li><a href="{{ route('docTypes') }}">НАМУДИ ФАЪОЛИЯТҲО БО ҲУҶҶАТҲО</a></li>
                                <li><a href="{{ route('legislature') }}">ҚОНУНГУЗОРӢ</a></li>
                                <li><a href="{{ route('contacts') }}">ТАМОС ВА СУРОҒА</a></li>
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
            <span class="link">IJOZATNOMA.TJ</span> 
            <span class="d-none d-sm-block">- ҲАМАИ ҲУҚУҚҲО ДАР ТАҲТИ ҲИМОЯ ҚАРОР ДОРАНД</span>
        </footer>
    </div>

    @section('scripts')
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker-1.9.0-dist/locales/bootstrap-datepicker.ru.min.js') }}"></script>
        <script src="{{ asset('js/custom/plugins.init.min.js') }}"></script>
    @show
</body>
</html>
