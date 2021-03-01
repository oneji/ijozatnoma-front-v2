@extends('layouts.app', [
    'title' => ''
])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="links-wrapper">
                <div class="img">
                    <img src="{{ asset('images/icons/add_text.png') }}" alt="">
                </div>
                <ul class="links-table">
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">КОНСТИТУТСИЯИ ҶУМҲУРИИ ТОҶИКИСТОН</a>
                        <a href="{{ route('laws.downloadFile', 'const.docx') }}" class="links-table__item__download">WORD <i class="fas fa-download ml-1"></i></a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">ҚОНУНИ ҶУМҲУРИИ ТОҶИКИСТОН «Дар бораи сарватҳои зеризаминӣ»</a>
                        <a href="{{ route('laws.downloadFile', '2.docx') }}" class="links-table__item__download">WORD <i class="fas fa-download ml-1"></i></a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">Қонуни Ҷумҳурии Тоҷикистон Дар бораи ичозатномадиҳи баъзе намудхои фаъолият</a>
                        <a href="{{ route('laws.downloadFile', '3.docx') }}" class="links-table__item__download">WORD <i class="fas fa-download ml-1"></i></a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">Кодекси андози Ҷумҳурии Тоҷикистон</a>
                        <a href="{{ route('laws.downloadFile', '4.docx') }}" class="links-table__item__download">WORD <i class="fas fa-download ml-1"></i></a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">Низомнома «Дар бораи хусусиятҳои иҷозатномадихи ба баъзе намудхои фаъолият»</a>
                        <a href="{{ route('laws.downloadFile', '5.docx') }}" class="links-table__item__download">WORD <i class="fas fa-download ml-1"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <p class="usefull-links__title main-color">ЛИНКҲОИ ФОИДАНОК</p>

    <div class="row">
        <div class="col-sm-12">
            <div class="links-wrapper">
                <div class="img">
                    <img src="{{ asset('images/icons/link.png') }}" alt="">
                </div>
                <ul class="links-table">
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">ҚОНУНИ ҶУМҲУРИИ ТОҶИКИСТОН: НОМИ ҚОНУН ДАР ИНҶО</a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">ҚОНУНИ ҶУМҲУРИИ ТОҶИКИСТОН: НОМИ ҚОНУН ДАР ИНҶО</a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">ҚОНУНИ ҶУМҲУРИИ ТОҶИКИСТОН: НОМИ ҚОНУН ДАР ИНҶО</a>
                    </li>
                    <li class="links-table__item">
                        <a href="#" class="links-table__item__title">ҚОНУНИ ҶУМҲУРИИ ТОҶИКИСТОН: НОМИ ҚОНУН ДАР ИНҶО</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
@endsection