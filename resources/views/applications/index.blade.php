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
    @if (Session::get('user')['type'] === 'company')
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="display datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">№</th>
                                <th>НОМ ВА НАСАБ</th>
                                <th>НАМУДИ ФАЪОЛИЯТ</th>
                                <th>САНАИ АРИЗА</th>
                                <th>ҲОЛАТ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $idx => $item)
                                <tr>
                                    <td class="text-center">{{ $idx + 1 }}</td>
                                    <td>{{ $item->branch_name }}</td>
                                    <td>{{ $item->activity_title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <span class="custom-badge success">{{ $item->status }}</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="display datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">№</th>
                                <th>НОМ ВА НАСАБ</th>
                                <th>НАМУДИ ФАЪОЛИЯТ</th>
                                <th>САНАИ АРИЗА</th>
                                <th>ҲОЛАТ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $idx => $item)
                                <tr>
                                    <td class="text-center">{{ $idx + 1 }}</td>
                                    <td>{{ $item->citizen_name .' '. $item->citizen_s_name }}</td>
                                    <td>{{ $item->activity_title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <span class="custom-badge success">{{ $item->status }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection