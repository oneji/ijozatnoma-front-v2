<div class="table-responsive">
    <table class="display datatable" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">№</th>
                <th>{{ __('form.name') }}</th>
                <th>{{ __('form.phoneNumber') }}</th>
                <th>СТАТУС</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $idx => $item)
                <tr>
                    <td class="text-center">{{ $idx + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>
                        <span class="custom-badge {{ $item->status ? 'success' : 'danger' }}">
                            {{ $item->status ? __('application_statuses.active') : __('application_statuses.non_active') }}
                        </span>
                    </td>
                    <td>
                        <a href="#" data-id="{{ $item->id }}" class="btn btn-primary btn-sm edit-btn">
                            <i class="fas fa-edit"></i>
                        </a>
                        @if (Session::get('user')['id'] !== $item->id)
                            @if (!$item->status)
                                <a href="#" onclick="event.preventDefault(); document.getElementById('activateForm{{ $item->id }}').submit();" class="btn btn-success btn-sm">
                                    <i class="fas fa-lock-open"></i>
                                </a>

                                <form class="d-none" action="{{ route('clients.activate', [$item->id]) }}" method="POST" id="activateForm{{ $item->id }}">
                                    @csrf
                                </form>
                            @else
                                <a href="#" onclick="event.preventDefault(); document.getElementById('deactivateForm{{ $item->id }}').submit();" class="btn btn-danger btn-sm">
                                    <i class="fas fa-lock"></i>
                                </a>

                                <form class="d-none" action="{{ route('clients.deactivate', [$item->id]) }}" method="POST" id="deactivateForm{{ $item->id }}">
                                    @csrf
                                </form>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>