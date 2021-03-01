@extends('layouts.app', [
    'title' => __('page_headers.docTypes')
])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="custom-accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a href="#" class="custom-accordion__button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Фуруши чаканаи машрубот 
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p class="main-color h5 mb-3">Барои дарёфти иҷозатномаи зерин, ба шумо номгуи ҳуҷҷатҳои дар поен нишон додашуда доштан зарур аст: (Барои сабт кардан зер кунед)</p>

                            <ul class="links-table pl-0">
                                <li class="links-table__item">
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <a href="#" class="custom-accordion__button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Истеҳсол ва фуруши яклухт ва чаканаи машрубот, муомилоти спирти этилӣ
                        </a>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p class="main-color h5 mb-3">Барои дарёфти иҷозатномаи зерин, ба шумо номгуи ҳуҷҷатҳои дар поен нишон додашуда доштан зарур аст: (Барои сабт кардан зер кунед)</p>

                            <ul class="links-table pl-0">
                                <li class="links-table__item">
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                    <a href="#" class="links-table__item__download">ВАРАҚАИ РМА АРИЗАСУПОРАНДА <i class="fas fa-download ml-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
