@extends('layouts.app', [
    'title' => __('page_headers.myApplications')
])

@section('content')
    @include('applications.partials.__stats')
    
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="display datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">№</th>
                            <th>НОМ ВА НАСАБ</th>
                            <th>НАМУДИ ФАЪОЛИЯТ</th>
                            <th>САНА</th>
                            <th>ПАРДОХТ КАРД/ҲАМАГИ</th>
                            <th>ҲОЛАТИ ПАРДОХТ</th>
                            <th>ҲОЛАТ</th>
                            <th>{{ __('application_statuses.extension') }}</th>
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
                                <td class="text-center">{{ $item->sum_payed }}/{{ $item->sum_should_pay }}</td>
                                <td>
                                    <span class="custom-badge {{ $item->payment_status === 'not_paid' ? 'danger' : 'success'  }}">
                                        {{ __("application_statuses.$item->payment_status") }}
                                    </span>
                                </td>
                                <td>
                                    <span class="custom-badge {{ $item->status === 'removed' ? 'danger' : 'success'  }}">
                                        {{ __("application_statuses.$item->status") }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    @if ($item->extension)
                                        {{ __('application_statuses.yes') }}
                                    @else
                                        {{ __('application_statuses.no') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status !== 'removed')
                                        <a href="#" class="btn btn-success btn-sm pay-btn" data-id="{{ $item->payment_request_id }}">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </a>
                                    @endif
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

            $('.pay-btn').on('click', function(e) {
                e.preventDefault();

                let payBtn = $(this);
                let id = payBtn.data('id');
                let spinnerClass = 'fa-spin fa-spinner';

                payBtn.find('i').toggleClass(spinnerClass);

                $.get(`/applications/pay/${id}`)
                    .then(response => {
                        let { link, code } = response;

                        payBtn.find('i').toggleClass(spinnerClass);

                        if(code === 200) {
                            window.open(link);
                        } else {
                            alert('Следующая попытка оплаты доступна только через 15 минут!');
                        }

                    })
                    .catch(error => {
                        console.log(error);
                    })
            });
        })
    </script>
@endsection