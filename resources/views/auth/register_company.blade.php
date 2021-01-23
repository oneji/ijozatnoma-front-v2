<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Бақайдгири &middot; РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</title>
    <!-- Styles -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register" style="background-image: url({{ asset('images/bg/login.jpg') }})">
        <div class="dotted-bg" style="background-image: url({{ asset('images/bg/login-clip.png') }})">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-container">
                            <div class="form-container__title">
                                <img src="{{ asset('images/icons/key.png') }}" alt="">
                                <p>{{ __('auth.registerFormTitle') }}</p>
                            </div>
                            
                            <form action="{{ route('registerCompany') }}" method="POST" class="form" data-parsley-validate id="registerForm">
                                @csrf
                
                                <div class="form__body">
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            @include('auth.partials.__register_type')
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="name" class="mb-0 text-white">{{ __('form.companyName') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="name"
                                                id="name"
                                                placeholder="{{ __('form_placeholders.companyName') }}"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="company_type_id" class="mb-0 text-white">{{ __('form.companyType') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="company_type_id" required>
                                                    @foreach ($lists['types'] as $type)
                                                        <option value="{{ $type->id }}">{{ $type->title }} ({{ $type->short_title }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="director" class="mb-0 text-white">{{ __('form.director') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="director"
                                                id="director"
                                                placeholder="{{ __('form_placeholders.director') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="founder" class="mb-0 text-white">{{ __('form.founder') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="founder"
                                                id="founder"
                                                placeholder="{{ __('form_placeholders.founder') }}"
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
                    
                                        {{-- Control data from JS --}}
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="region_id" class="mb-0 text-white">{{ __('form.region') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="region_id" required id="region_id"></select>
                                            </div>
                                        </div>
                    
                                        {{-- Control data from JS --}}
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="city_id" class="mb-0 text-white">{{ __('form.city') }}</label>
                                            <div class="auth-select-wrapper">
                                                <select class="auth-form-control" name="city_id" required id="city_id"></select> 
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="address" class="mb-0 text-white">{{ __('form.address') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="address"
                                                id="address"
                                                placeholder="{{ __('form_placeholders.address') }}"
                                                required
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
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="registration_document_date"
                                                    id="registration_document_date"
                                                    placeholder="{{ __('form_placeholders.registrationDocumentDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_address" class="mb-0 text-white">{{ __('form.innAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="itpn_address"
                                                id="itpn_address"
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
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="itpn_date"
                                                    id="itpn_date"
                                                    placeholder="{{ __('form_placeholders.innDate') }}"
                                                    required
                                                >
                                            </div>
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
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="passport_date"
                                                    id="passport_date"
                                                    placeholder="{{ __('form_placeholders.passportDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_address" class="mb-0 text-white">{{ __('form.passportAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_address"
                                                id="passport_address"
                                                placeholder="{{ __('form_placeholders.passportAddress') }}"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_date" class="mb-0 text-white">{{ __('form.districtDecisionDate') }}</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="district_decision_date"
                                                    id="district_decision_date"
                                                    placeholder="{{ __('form_placeholders.districtDecisionDate') }}"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_number" class="mb-0 text-white">{{ __('form.districtDecisionNumber') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="district_decision_number"
                                                id="district_decision_number"
                                                placeholder="{{ __('form_placeholders.districtDecisionNumber') }}"
                                                required
                                            >
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_address" class="mb-0 text-white">{{ __('form.districtDecisionAddress') }}</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="district_decision_address"
                                                id="district_decision_address"
                                                placeholder="{{ __('form_placeholders.districtDecisionAddress') }}"
                                                required
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
                                                placeholder="{{ __('form_placeholders.youePhoneNumber') }}"
                                                required
                                                value="{{ Session::get('phone') }}"
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
    <script src="{{ asset('plugins/inputmask/dist/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js') }}"></script>
    <script>
        let __REGIONS__ = @json($lists['regions']);
        let __CITIES__ = @json($lists['cities']);
    </script>
    <script src="{{ asset('js/custom/register.js') }}"></script>
</body>
</html>
