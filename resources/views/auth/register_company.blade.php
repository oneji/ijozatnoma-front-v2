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
                                <p>Сабти аккаунти нав</p>
                            </div>
                            
                            <form action="{{ route('registerCompany') }}" method="POST" class="form" data-parsley-validate>
                                @csrf
                
                                <div class="form__body">
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="register__type">
                                                <a href="{{ route('registerCompany') }}" class="{{ Request::segment(2) === 'company' ? 'active' : null }}">Шахси Ҳуқуқӣ</a>
                                                <a href="{{ route('registerCitizen') }}" class="{{ Request::segment(2) === 'citizen' ? 'active' : null }}">Шахси инфироди</a>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="name" class="mb-0 text-white">Название</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="name"
                                                id="name"
                                                placeholder="Введите название"
                                                required
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="company_type_id" class="mb-0 text-white">Тип компании</label>
                                            <select class="auth-form-control" name="company_type_id" required>
                                                @foreach ($lists['types'] as $type)
                                                    <option value="{{ $type->id }}">{{ $type->title }} ({{ $type->short_title }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="director" class="mb-0 text-white">Директор (руководитель)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="director"
                                                id="director"
                                                placeholder="Введите ФИО директора"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="founder" class="mb-0 text-white">Основатель</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="founder"
                                                id="founder"
                                                placeholder="Введите ФИО основателя"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="phone_number" class="mb-0 text-white">Номер телефона</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="phone_number"
                                                id="phone_number"
                                                placeholder="Введите номер телефона"
                                                required
                                                value="{{ Session::get('phone') }}"
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="email" class="mb-0 text-white">Email адрес</label>
                                            <input
                                                type="email"
                                                class="auth-form-control"
                                                name="email"
                                                id="email"
                                                placeholder="Введите email адрес"
                                                required
                                                data-parsley-type="email"
                                            >
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="region_id" class="mb-0 text-white">Регион</label>
                                            <select class="auth-form-control" name="region_id" required>
                                                @foreach ($lists['regions'] as $region)
                                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="city_id" class="mb-0 text-white">Город</label>
                                            <select class="auth-form-control" name="city_id" required>
                                                @foreach ($lists['cities'] as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="address" class="mb-0 text-white">Адрес</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="address"
                                                id="address"
                                                placeholder="Введите адрес"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_document_number" class="mb-0 text-white">Номер документа регистрации</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="registration_document_number"
                                                id="registration_document_number"
                                                placeholder="Введите номер number"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_document_date" class="mb-0 text-white">Дата документа регистрации</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="registration_document_date"
                                                    id="registration_document_date"
                                                    placeholder="Выберите дату"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_address" class="mb-0 text-white">ИНН (место выдачи)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="itpn_address"
                                                id="itpn_address"
                                                placeholder="Введие место выдачи ИНН"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_number" class="mb-0 text-white">ИНН (номер)</label>
                                            <input
                                                type="number"
                                                class="auth-form-control"
                                                name="itpn_number"
                                                id="itpn_number"
                                                placeholder="Введите номер ИНН"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="itpn_date" class="mb-0 text-white">ИНН (дата выдачи)</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="itpn_date"
                                                    id="itpn_date"
                                                    placeholder="Выберите дату"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_number" class="mb-0 text-white">Паспорт (номер)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_number"
                                                id="passport_number"
                                                placeholder="Введите номер паспорта"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_date" class="mb-0 text-white">Паспорт (дата выдачи)</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="passport_date"
                                                    id="passport_date"
                                                    placeholder="Выберите дату"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="passport_address" class="mb-0 text-white">Паспорт (место выдачи)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="passport_address"
                                                id="passport_address"
                                                placeholder="Введите место выдачи паспорта"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_date" class="mb-0 text-white">Решение районного совета (дата выдачи)</label>
                                            <div class="datepicker-wrapper">
                                                <input
                                                    type="text"
                                                    class="auth-form-control datepicker"
                                                    name="district_decision_date"
                                                    id="district_decision_date"
                                                    placeholder="Выберите дату"
                                                    required
                                                >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_number" class="mb-0 text-white">Решение районного совета (номер)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="district_decision_number"
                                                id="district_decision_number"
                                                placeholder="Введите номер"
                                                required
                                            >
                                        </div>
                    
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="district_decision_address" class="mb-0 text-white">Решение районного совета (место выдачи)</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="district_decision_address"
                                                id="district_decision_address"
                                                placeholder="Введите адрес"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="registration_number" class="mb-0 text-white">Регистрационный номер</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="registration_number"
                                                id="registration_number"
                                                placeholder="Введите номер"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="client_name" class="mb-0 text-white">Ваше имя</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="client_name"
                                                id="client_name"
                                                placeholder="Введите ваше имя"
                                                required
                                            >
                                        </div>
                                        
                                        <div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <label for="client_phone_number" class="mb-0 text-white">Ваш номер телефона</label>
                                            <input
                                                type="text"
                                                class="auth-form-control"
                                                name="client_phone_number"
                                                id="client_phone_number"
                                                placeholder="Введите ваш номер телефона"
                                                required
                                                value="{{ Session::get('phone') }}"
                                            >
                                        </div>

                                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <button type="submit" class="auth-button btn-block">Бақайдгири</button>
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
