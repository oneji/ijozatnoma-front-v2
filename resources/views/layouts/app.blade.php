<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo-box left">
                                <div class="logo">
                                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                                </div>
                                <div class="text text-left">
                                    <p>ВАЗОРАТИ САНОАТ <br> ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ <br> ТОҶИКИСТОН</p>
                                    <p class="mb-0">РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="logo-box right">
                                <div class="text text-right">
                                    <p>Министерство промышленности <br> и новых технологий Республики <br> Таджикистан</p>
                                    <p class="mb-0">УПРАВЛЕНИЕ ПО ВЫДАЧЕ РАЗРЕШЕНИЙ</p>
                                </div>
                                <div class="logo">
                                    <img src="{{ asset('images/gerb.png') }}" alt="Logo">
                                </div>
                            </div>
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
                        <li><a href="">Асоси</a></li>
                        <li><a href="">Дархостхои ман</a></li>
                        <li><a href="">Дархост кардан</a></li>
                        <li><a href="">Намуди фаъолият бо хучатхо</a></li>
                        <li><a href="">Конугузори</a></li>
                        <li><a href="">Тамос ва сурога</a></li>
                    </ul>
                    <div class="search">
                        <a href="#" class="search__icon">
                            <i class="fas fa-search"></i>
                        </a>
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
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
