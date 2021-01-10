<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</title>
    <!-- Styles -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-page" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg" style="background-image: url({{ asset('images/bg/login-clip.png') }})"></div>

        <div class="form-container">
            
            <form action="{{ route('verify') }}" method="POST" class="form" data-parsley-validate>
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form__body">
                    <p class="text-white text-uppercase text-center">Раками телефон: {{ Session::get('phone') }}</p>
                    <div class="form-group">
                        <label for="verification_code" class="custom-form-control">Коди тайидро ворид кунед</label>
                        <input
                            type="text"
                            class="custom-form-control"
                            name="verification_code"
                            id="verification_code"
                            placeholder="МИСОЛ: 999999"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="login-button btn-block">
                            Даромад
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
