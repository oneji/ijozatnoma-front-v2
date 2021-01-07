@extends('layouts.app', [
    'title' => 'ДАРХОСТҲОИ МАН / АРИЗА'
])

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="custom-card">
                <div class="custom-card__body">
                    <div class="stat">
                        <div class="stat__counter main-color">12</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">Қабулшуда</div>
                            <div class="stat__icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="custom-card">
                <div class="custom-card__body">
                    <div class="stat">
                        <div class="stat__counter main-color">15</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">Рад кардашуда</div>
                            <div class="stat__icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="custom-card">
                <div class="custom-card__body">
                    <div class="stat">
                        <div class="stat__counter main-color">22</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">Қабулшуда</div>
                            <div class="stat__icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="display datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>РАЁСАТИ ИҶОЗАТНОМАДИҲӢ</th>
                            <th>НОМ ВА НАСАБ</th>
                            <th>НАМУДИ ФАЪОЛИЯТ</th>
                            <th>САНАИ АРИЗА</th>
                            <th>ҲОЛАТ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>23</td>
                            <td>Камилов Тимур</td>
                            <td>АРАК</td>
                            <td>01/01/2021</td>
                            <td>
                                <span class="custom-badge success">БАРРАСИ КАРДА ШУД</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23</td>
                            <td>Камилов Тимур</td>
                            <td>АРАК</td>
                            <td>01/01/2021</td>
                            <td>
                                <span class="custom-badge">Барраси карда шуд</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23</td>
                            <td>Камилов Тимур</td>
                            <td>АРАК</td>
                            <td>01/01/2021</td>
                            <td>
                                <span class="custom-badge primary">Барраси</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23</td>
                            <td>Камилов Тимур</td>
                            <td>АРАК</td>
                            <td>01/01/2021</td>
                            <td>
                                <span class="custom-badge danger">Рад карда шуд</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection