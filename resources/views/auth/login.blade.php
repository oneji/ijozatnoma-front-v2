<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-page" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg"></div>

        <div class="form-container">
            <div class="form-container__title">
                <i class="fas fa-lock"></i>
                <p>Даромад ба утоки шахси</p>
            </div>
            
            <div class="form-container__form">
                <form action="#">
                    <div class="form__header">
                        <div class="logo-box">
                            <div class="logo">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                            </div>
                            <div class="text">
                                <p>ВАЗОРАТИ САНОАТ ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ ТОҶИКИСТОН</p>
                                <p class="mb-0">РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</p>
                            </div>
                        </div>
                    </div>

                    <div class="form__body">
                        <div class="form-group">
                            <label for="phone_number" class="login-label">Раками телефонро ворид кунед</label>
                            <input type="text" class="login-input" id="phone_number" placeholder="МИСОЛ: XX-XXX-XX-XX...">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="login-button btn-block">
                                Равон кардани СМС
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="login-page__footer">
            <a href="#">IJOZATNOMA.TJ</a> - ҲАМАИ ҲУҚУҚҲО ДАР ТАҲТИ ҲИМОЯ ҚАРОР ДОРАНД
        </div>
    </div>
</body>
</html>
