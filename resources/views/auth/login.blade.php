<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ДАРОМАД &middot; РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</title>
    <!-- Styles -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-page" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg" style="background-image: url({{ asset('images/bg/login-clip.png') }})"></div>

        <div class="form-container">
            <div class="form-container__title">
                <img src="{{ asset('images/icons/key.png') }}" alt="">
                <p>Даромад ба утоки шахси</p>
            </div>
            
            <form action="{{ route('login') }}" method="POST" class="form" data-parsley-validate>
                @csrf

                <div class="form__header">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
                    <div class="text">
                        <p>ВАЗОРАТИ САНОАТ ВА ТЕХНОЛОГИЯҲОИ НАВИ ҶУМҲУРИИ ТОҶИКИСТОН</p>
                        <p class="mb-0">РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</p>
                    </div>
                </div>

                <div class="form__body">
                    <div class="form-group">
                        <label for="phone_number" class="custom-form-control">Раками телефонро ворид кунед</label>
                        <input
                            type="text"
                            class="custom-form-control"
                            name="phone_number"
                            id="phone_number"
                            placeholder="МИСОЛ: 919-00-00-00"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="login-button btn-block">
                            Равон кардани СМС
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

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script src="{{ asset('js/custom/login.js') }}"></script>
</body>
</html>
