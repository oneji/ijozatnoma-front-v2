<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('page_headers.main') }}</title>
    <!-- Styles -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg" style="background-image: url({{ asset('images/bg/login-clip.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-container">
                            <div class="form-container__title">
                                <img src="{{ asset('images/icons/key.png') }}" alt="">
                                <p>{{ __('auth.verifyFormTitle') }}</p>
                            </div>
    
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
                                    <p class="text-white text-uppercase text-center">{{ __('form.phoneNumber') }}: {{ Session::get('phone') }} &middot; {{ Session::get('smsCode')['code'] }}</p>
                                    <div class="form-group">
                                        <label for="verification_code" class="auth-form-control">{{ __('form_placeholders.verificationCode') }}</label>
                                        <input
                                            type="text"
                                            class="auth-form-control text-center"
                                            name="verification_code"
                                            id="verification_code"
                                            placeholder="{{ __('form_placeholders.example') }}: 999999"
                                            required
                                        >
                                    </div>
                
                                    <div class="form-group">
                                        <button type="submit" class="auth-button btn-block">
                                            {{ __('auth.login') }}
                                            <img src="{{ asset('images/icons/fly.png') }}" alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer">
                <span class="footer__link">IJOZATNOMA.TJ</span> 
                <span class="d-none d-sm-block">- ҲАМАИ ҲУҚУҚҲО ДАР ТАҲТИ ҲИМОЯ ҚАРОР ДОРАНД</span>
            </footer>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script src="{{ asset('js/custom/login.js') }}"></script>
</body>
</html>
