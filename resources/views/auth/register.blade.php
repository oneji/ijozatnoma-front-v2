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
                                <p>Сабти аккаунти нав</p>
                            </div>
                            
                            <form action="{{ route('login') }}" method="POST" class="form" data-parsley-validate>
                                @csrf
                
                                <div class="form__body">
                                    <div class="form-group">
                                        <label for="name" class="mb-0 text-white">Name</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="name"
                                            id="name"
                                            placeholder="Enter name"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="company_type_id" class="mb-0 text-white">Company type id</label>
                                        <select class="auth-form-control" name="company_type_id" required>
                                            @foreach ($lists['types'] as $type)
                                                <option value="{{ $type->id }}">{{ $type->title }} ({{ $type->short_title }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="director" class="mb-0 text-white">Director</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="director"
                                            id="director"
                                            placeholder="Enter director"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="founder" class="mb-0 text-white">Founder</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="founder"
                                            id="founder"
                                            placeholder="Enter founder"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="phone_number" class="mb-0 text-white">Phone number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="phone_number"
                                            id="phone_number"
                                            placeholder="Enter phone number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email" class="mb-0 text-white">Email</label>
                                        <input
                                            type="email"
                                            class="auth-form-control"
                                            name="email"
                                            id="email"
                                            placeholder="Enter email"
                                            required
                                            data-parsley-type="email"
                                        >
                                    </div>
                
                                    <div class="form-group">
                                        <label for="region_id" class="mb-0 text-white">Region id</label>
                                        <select class="auth-form-control" name="region_id" required>
                                            @foreach ($lists['regions'] as $region)
                                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="city_id" class="mb-0 text-white">City id</label>
                                        <select class="auth-form-control" name="city_id" required>
                                            @foreach ($lists['cities'] as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="address" class="mb-0 text-white">Address</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="address"
                                            id="address"
                                            placeholder="Enter address"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="registration_document_number" class="mb-0 text-white">Registration document number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="registration_document_number"
                                            id="registration_document_number"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="registration_document_date" class="mb-0 text-white">Registration document date</label>
                                        <input
                                            type="text"
                                            class="auth-form-control datepicker"
                                            name="registration_document_date"
                                            id="registration_document_date"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="itpn_address" class="mb-0 text-white">Itpn address</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="itpn_address"
                                            id="itpn_address"
                                            placeholder="Enter address"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="itpn_number" class="mb-0 text-white">Itpn number</label>
                                        <input
                                            type="number"
                                            class="auth-form-control"
                                            name="itpn_number"
                                            id="itpn_number"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="itpn_date" class="mb-0 text-white">Itpn date</label>
                                        <input
                                            type="text"
                                            class="auth-form-control datepicker"
                                            name="itpn_date"
                                            id="itpn_date"
                                            placeholder="Enter date"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="passport_number" class="mb-0 text-white">Passport number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="passport_number"
                                            id="passport_number"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="passport_date" class="mb-0 text-white">Passport date</label>
                                        <input
                                            type="text"
                                            class="auth-form-control datepicker"
                                            name="passport_date"
                                            id="passport_date"
                                            placeholder="Enter date"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="passport_address" class="mb-0 text-white">Passport address</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="passport_address"
                                            id="passport_address"
                                            placeholder="Enter address"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="district_decision_date" class="mb-0 text-white">District decision date</label>
                                        <input
                                            type="text"
                                            class="auth-form-control datepicker"
                                            name="district_decision_date"
                                            id="district_decision_date"
                                            placeholder="Enter date"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="district_decision_number" class="mb-0 text-white">District decision number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="district_decision_number"
                                            id="district_decision_number"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                
                                    <div class="form-group">
                                        <label for="district_decision_address" class="mb-0 text-white">District decision address</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="district_decision_address"
                                            id="district_decision_address"
                                            placeholder="Enter address"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="registration_number" class="mb-0 text-white">Registration number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="registration_number"
                                            id="registration_number"
                                            placeholder="Enter number"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="client_name" class="mb-0 text-white">Client name</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="client_name"
                                            id="client_name"
                                            placeholder="Enter name"
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="client_phone_number" class="mb-0 text-white">Client phone number</label>
                                        <input
                                            type="text"
                                            class="auth-form-control"
                                            name="client_phone_number"
                                            id="client_phone_number"
                                            placeholder="Enter phone number"
                                            required
                                        >
                                    </div>
                
                                    <div class="form-group">
                                        <button type="submit" class="auth-button btn-block">Бақайдгири</button>
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
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js') }}"></script>
    <script src="{{ asset('js/custom/register.js') }}"></script>
</body>
</html>
