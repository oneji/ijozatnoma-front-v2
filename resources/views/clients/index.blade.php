@extends('layouts.app', [
    'title' => __('page_headers.clients')
])

@section('content')
    @if (Session::get('user')['type'] === 'company')
        @include('clients.modals.create')
    @else

    @endif

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
            @if (Session::get('user')['type'] === 'company')
                @include('clients.partials.company.__clients_table')
            @else
                
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script>
        $(function() {
            let __REGIONS__ = @json($regions);
            let __CITIES__ = @json($cities);

            clearSelects(true, true);
            __REGIONS__.map((region, idx) => {
                if(idx === 0) {
                    __CITIES__.map(city => {
                        if(city.region_id == region.id) {
                            $('#createForm select#city_id').append(`
                                <option value="${city.id}">${city.name}</option>
                            `);
                        }
                    })
                }

                $('#createForm select#region_id').append(`
                    <option value="${region.id}">${region.name}</option>
                `);
            });

            // Change cities select depending on a region
            $('#createForm select#region_id').on('change', function() {
                let region = $(this).val();

                clearSelects(false, true);
                __CITIES__.map(city => {
                    if(city.region_id == region) {
                        $('#createForm select#city_id').append(`
                            <option value="${city.id}">${city.name}</option>
                        `);
                    }
                })
            })

            function clearSelects(regions = false, cities = false) {
                if(regions) $('#createForm select#region_id').html('');
                if(cities) $('#createForm select#city_id').html('');
            }
        })
    </script>
@endsection