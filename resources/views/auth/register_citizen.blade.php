<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('page_headers.register') }} &middot; {{ __('page_headers.main') }}</title>
    <!-- Styles -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register" style="background-image: url({{ asset('images/bg/login.jpg') }})">
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
                                <p>{{ __('auth.registerFormTitle') }}</p>
                            </div>
                            
                            <form action="{{ route('registerCitizen') }}" method="POST" class="form" data-parsley-validate id="registerForm">
                                @csrf
                
                                <div class="form__body">
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            @include('auth.partials.__register_type')
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="name" class="mb-0 text-white">{{ __('form.name') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="name"
                                                id="name"
                                                placeholder="{{ __('form_placeholders.name') }}"
                                                required
                                            >
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="s_name" class="mb-0 text-white">{{ __('form.sName') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="s_name"
                                                id="s_name"
                                                placeholder="{{ __('form_placeholders.sName') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="f_name" class="mb-0 text-white">{{ __('form.fName') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="f_name"
                                                id="f_name"
                                                placeholder="{{ __('form_placeholders.fName') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="phone_number" class="mb-0 text-white">{{ __('form.phoneNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="phone_number"
                                                id="phone_number"
                                                placeholder="{{ __('form_placeholders.phoneNumber') }}"
                                                required
                                                value="{{ Session::get('phone') }}"
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="email" class="mb-0 text-white">{{ __('form.email') }}</label>
                                            <input
                                                type="email"
                                                class="auth-form-control"
                                                name="email"
                                                id="email"
                                                placeholder="{{ __('form_placeholders.email') }}"
                                                required
                                                data-parsley-type="email"
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="birthday" class="mb-0 text-white">{{ __('form.birthday') }}</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="date"
                                                    class="auth-form-control"
                                                    name="birthday"
                                                    id="birthday"
                                                    placeholder="{{ __('form_placeholders.birthday') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_place" class="mb-0 text-white">{{ __('form.innAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="itpn_place"
                                                id="itpn_place"
                                                placeholder="{{ __('form_placeholders.innAddress') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_number" class="mb-0 text-white">{{ __('form.innNumber') }}</label>
                                            <input
                                                type="number"
                                                class="auth-form-control"
                                                name="itpn_number"
                                                id="itpn_number"
                                                placeholder="{{ __('form_placeholders.innNumber') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_date" class="mb-0 text-white">{{ __('form.innDate') }}</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="date"
                                                    class="auth-form-control"
                                                    name="itpn_date"
                                                    id="itpn_date"
                                                    placeholder="{{ __('form_placeholders.innDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_series" class="mb-0 text-white">{{ __('form.passportSeries') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_series"
                                                id="passport_series"
                                                placeholder="{{ __('form_placeholders.passportSeries') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_number" class="mb-0 text-white">{{ __('form.passportNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_number"
                                                id="passport_number"
                                                placeholder="{{ __('form_placeholders.passportNumber') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_date" class="mb-0 text-white">{{ __('form.passportDate') }}</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="date"
                                                    class="auth-form-control"
                                                    name="passport_date"
                                                    id="passport_date"
                                                    placeholder="{{ __('form_placeholders.passportDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_place" class="mb-0 text-white">{{ __('form.passportAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_place"
                                                id="passport_place"
                                                placeholder="{{ __('form_placeholders.passportAddress') }}"
                                                required
                                            >
                                        </div>

                                        {{-- Control data from JS --}}
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="residence_region_id" class="mb-0 text-white">{{ __('form.residenceRegion') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="residence_region_id" required id="residence_region_id"></select>
                                            </div>
                                        </div>
                    
                                        {{-- Control data from JS --}}
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="residence_city_id" class="mb-0 text-white">{{ __('form.residenceCity') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="residence_city_id" required id="residence_city_id"></select>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="residence_address" class="mb-0 text-white">{{ __('form.residenceAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="residence_address"
                                                id="residence_address"
                                                placeholder="{{ __('form_placeholders.residenceAddress') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="region_id" class="mb-0 text-white">{{ __('form.jobRegion') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="job_region_id" required id="region_id"></select>
                                            </div>
                                        </div>
                    
                                        {{-- Control data from JS --}}
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="city_id" class="mb-0 text-white">{{ __('form.jobCity') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="job_city_id" required id="city_id"></select>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="job_address" class="mb-0 text-white">{{ __('form.jobAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="job_address"
                                                id="job_address"
                                                placeholder="{{ __('form_placeholders.jobAddress') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="client_name" class="mb-0 text-white">{{ __('form.yourName') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="client_name"
                                                id="client_name"
                                                placeholder="{{ __('form_placeholders.yourName') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="client_phone_number" class="mb-0 text-white">{{ __('form.yourPhoneNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="client_phone_number"
                                                id="client_phone_number"
                                                placeholder="{{ __('form_placeholders.phoneNumber') }}"
                                                required
                                                value="{{ Session::get('phone') }}"
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_document_number" class="mb-0 text-white">{{ __('form.registrationDocumentNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="registration_document_number"
                                                id="registration_document_number"
                                                placeholder="{{ __('form_placeholders.registrationDocumentNumber') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_document_date" class="mb-0 text-white">{{ __('form.registrationDocumentDate') }}</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="date"
                                                    class="auth-form-control"
                                                    name="registration_document_date"
                                                    id="registration_document_date"
                                                    placeholder="{{ __('form_placeholders.registrationDocumentDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_document_address" class="mb-0 text-white">{{ __('form.registrationDocumentAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="registration_document_address"
                                                id="registration_document_address"
                                                placeholder="{{ __('form_placeholders.registrationDocumentAddress') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="service_bank" class="mb-0 text-white">{{ __('form.service_bank') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="service_bank"
                                                id="service_bank"
                                                placeholder="{{ __('form_placeholders.service_bank') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="bank_account" class="mb-0 text-white">{{ __('form.bank_account') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="bank_account"
                                                id="bank_account"
                                                placeholder="{{ __('form_placeholders.bank_account') }}"
                                                required
                                                value="{{ Session::get('phone') }}"
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_number" class="mb-0 text-white">{{ __('form.registrationNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="registration_number"
                                                id="registration_number"
                                                placeholder="{{ __('form_placeholders.registrationNumber') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <button type="submit" class="auth-button btn-block">{{ __('auth.register') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <footer class="footer">
                <span class="footer__link">IJOZATNOMA.TJ</span> 
                <span class="d-none d-sm-block">- {{ __('form.rights') }}</span>
            </footer>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js') }}"></script>
    <script>
        let __REGIONS__ = @json($lists['regions']);
        let __CITIES__ = @json($lists['cities']);
        let __LOCALE__ = @json(app()->getLocale());
    </script>
    <script src="{{ asset('js/custom/register.js') }}"></script>
</body>
</html>
