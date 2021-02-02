@extends('layouts.app', [
    'title' => __('page_headers.clients')
])

@section('content')
    @include('clients.modals.create')
    @include('clients.modals.edit')

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
            @include('clients.partials.__clients_table')
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/parsleyjs/dist/i18n/ru.js') }}"></script>
    <script>
        $(function() {
            $('.edit-btn').on('click', function(e) {
                e.preventDefault();
                let editBtn = $(this);
                let id = editBtn.data('id');
                let editModal = $('#editModal');
                let editForm = editModal.find('form');
                let spinnerClass = 'fa-spin fa-spinner';

                editBtn.find('i').toggleClass(spinnerClass);

                $.get(`/clients/getById/${id}`)
                    .then(({ code, client }) => {
                        console.log(client)

                        editForm.find('input[name=name]').val(client.name);
                        editForm.find('input[name=phone_number]').val(client.phone_number);

                        editForm.attr('action', `clients/${id}`);

                        editBtn.find('i').toggleClass(spinnerClass);                        
                        editModal.modal('show');
                    })
                    .catch(erro => console.log(error))
            });
        })
    </script>
@endsection