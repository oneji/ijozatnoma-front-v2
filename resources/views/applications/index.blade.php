@extends('layouts.app', [
    'title' => __('page_headers.myApplications')
])

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="custom-card">
                <div class="custom-card__body">
                    <div class="stat">
                        <div class="stat__counter main-color">{{ $stats->new }}</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">{{ __('form.newApplications') }}</div>
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
                        <div class="stat__counter main-color">{{ $stats->refuse }}</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">{{ __('form.refusedApplications') }}</div>
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
                        <div class="stat__counter main-color">{{ $stats->accept }}</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="stat__title">{{ __('form.acceptedApplications') }}</div>
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
                            <th class="text-center">№</th>
                            <th>НОМ ВА НАСАБ</th>
                            <th>НАМУДИ ФАЪОЛИЯТ</th>
                            <th>САНАИ АРИЗА</th>
                            <th>ҲОЛАТ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $idx => $item)
                            <tr>
                                <td class="text-center">{{ $idx + 1 }}</td>
                                @if (Session::get('user')['type'] === 'company')
                                    <td>{{ $item->branch_name }}</td>
                                @else
                                    <td>{{ $item->citizen_name .' '. $item->citizen_s_name }}</td>
                                @endif
                                <td>{{ $item->activity_title }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                <td>
                                    <span class="custom-badge {{ $item->status === 'removed' ? 'danger' : 'success'  }}">
                                        {{ __("application_statuses.$item->status") }}
                                    </span>
                                </td>
                                <td>
                                    @if ($item->status === 'new' || $item->status === 'seen')
                                        <a href="#" class="btn btn-danger btn-sm remove-btn" data-id="{{ $item->id }}">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <form style="display: none" action="{{ route('applications.remove', [$item->id]) }}" method="post" id="removeForm{{ $item->id }}">
                                            @csrf
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script>
        $(function() {
            $('.remove-btn').on('click', function() {
                let id = $(this).data('id');
                let sure = confirm('Вы точно хотите удалить заявку?');

                if(sure) {
                    $(`#removeForm${id}`).submit();
                }
            });
        })
    </script>
@endsection