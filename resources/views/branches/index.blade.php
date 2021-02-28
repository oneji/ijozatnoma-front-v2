@extends('layouts.app', [
    'title' => __('page_headers.branches')
])

@section('content')
    @include('branches.modals.create')
    @include('branches.modals.edit')

    <div class="row mb-2">
        <div class="col-sm-12">
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-user-plus mr-2"></i>
                {{ __('form.add') }}
            </button>    
        </div>    
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="display datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">№</th>
                            <th>{{ __('form.name') }}</th>
                            <th>{{ __('form.region') }} </th>
                            <th>{{ __('form.address') }}</th>
                            <th>СТАТУС</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($branches as $idx => $item)
                            <tr>
                                <td>{{ $idx + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->region_name . ', ' . $item->city_name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <span class="custom-badge {{ $item->status ? 'success' : 'danger' }}">
                                        {{ $item->status ? __('application_statuses.active') : __('application_statuses.non_active') }}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" data-id="{{ $item->id }}" class="btn btn-primary btn-sm edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if (!$item->status)
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('activateForm{{ $item->id }}').submit();" class="btn btn-success btn-sm">
                                            <i class="fas fa-lock-open"></i>
                                        </a>

                                        <form class="d-none" action="{{ route('branches.activate', [$item->id]) }}" method="POST" id="activateForm{{ $item->id }}">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('deactivateForm{{ $item->id }}').submit();" class="btn btn-danger btn-sm">
                                            <i class="fas fa-lock"></i>
                                        </a>

                                        <form class="d-none" action="{{ route('branches.deactivate', [$item->id]) }}" method="POST" id="deactivateForm{{ $item->id }}">
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

    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script>
        $(function() {
            let __REGIONS__ = @json($lists['regions']);
            let __CITIES__ = @json($lists['cities']);
            let __LOCALE__ = @json(app()->getLocale());

            clearSelects(true, true);
            __REGIONS__.map((region, idx) => {
                if(idx === 0) {
                    __CITIES__.map(city => {
                        if(city.region_id == region.id) {
                            $('select[name=city_id]').append(`
                                <option value="${city.id}">${__LOCALE__ === 'tj' ? city.name : city[`name_${__LOCALE__}`]}</option>
                            `);
                        }
                    })
                }

                $('select[name=region_id]').append(`
                    <option value="${region.id}">${__LOCALE__ === 'tj' ? region.name : region[`name_${__LOCALE__}`]}</option>
                `);
            });

            // Change cities select depending on a region
            $('select[name=region_id]').on('change', function() {
                let region = $(this).val();

                clearSelects(false, true);
                __CITIES__.map(city => {
                    if(city.region_id == region) {
                        $('select[name=city_id]').append(`
                            <option value="${city.id}">${__LOCALE__ === 'tj' ? city.name : city[`name_${__LOCALE__}`]}</option> 
                        `);
                    }
                })
            })

            function clearSelects(regions = false, cities = false) {
                if(regions) $('select[name=region_id]').html('');
                if(cities) $('select[name=city_id]').html('');
            }

            $('.edit-btn').on('click', function(e) {
                e.preventDefault();
                let editBtn = $(this);
                let id = editBtn.data('id');
                let editModal = $('#editModal');
                let editForm = editModal.find('form');
                let spinnerClass = 'fa-spin fa-spinner';

                editBtn.find('i').toggleClass(spinnerClass);

                $.get(`/branches/getById/${id}`)
                    .then(({ code, branch }) => {
                        editForm.find('input[name=name]').val(branch.name);
                        editForm.find('input[name=address]').val(branch.address);

                        editForm.find('select[name=region_id] option').each(function() {
                            if($(this).val() == branch.region_id) {
                                $(this).attr('selected', true);
                            }
                        });
                        editForm.find('select[name=region_id]').trigger('change');
                        
                        editForm.find('select[name=city_id] option').each(function() {
                            if($(this).val() == branch.city_id) {
                                $(this).attr('selected', true);
                            }
                        });

                        editForm.attr('action', `branches/${id}`);

                        editBtn.find('i').toggleClass(spinnerClass);
                        editModal.modal('show');
                    })
                    .catch(erro => console.log(error))
            });
        })
    </script>
@endsection