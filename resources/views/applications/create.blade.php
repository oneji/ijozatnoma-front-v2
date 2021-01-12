@extends('layouts.app', [
    'title' => 'ДАРХОСТ КАРДАН БАРОИ ДАРЁФТИ ИҶОЗАТНОМА'
])

@section('content')
    <form action="{{ route('applications.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data" id="addApplicationForm">
        @csrf

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-lg-3">
                {{-- <div class="form-group">
                    <input type="text" name="input" class="custom-control" placeholder="НОМ ВА НАСАБ..." required>
                </div> --}}
                
                <div class="form-group">
                    <div class="custom-select-wrapper">
                        <select name="activity_id" class="custom-control" required>
                            <option value="" selected disabled>Типы деятельности</option>
                            @foreach ($activities as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                @if (isset($branches))
                    <div class="form-group">
                        <div class="custom-select-wrapper">
                            <select name="branch_id" class="custom-control" required>
                                <option value="" selected disabled>Точка получения лицензии</option>
                                @foreach ($branches as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->address }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                {{-- <div class="form-group">
                    <div class="datepicker-wrapper">
                        <input type="text" name="date" class="custom-control datepicker" placeholder="БА МУҲЛАТИ..." required>
                    </div>
                </div> --}}

                {{-- <div class="form-group">
                    <div class="custom-file">
                        <input
                            type="file"
                            name="file-7[]"
                            id="file-7"
                            data-multiple-caption="{count} файлро интихоб кард"
                            required
                            multiple
                            data-parsley-errors-container=".error-box"
                        >
                        <label for="file-7">
                            <span>САБТИ ҲУҶҶАТ</span>
                            <i class="fas fa-plus"></i>
                        </label>
                        <div class="error-box"></div>
                    </div>
                </div> --}}
                
                <div class="form-group">
                    <div class="form-group">
                        <button class="btn btn-success btn-sm btn-block text-uppercase" type="submit">
                            Сабт кардан
                            <i class="fas fa-share ml-2"></i>
                        </button>
                        {{-- <button class="btn btn-primary btn-sm text-uppercase" type="reset">
                            <i class="fas fa-reply mr-2"></i>
                            Бозгашт
                        </button> --}}
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <img src="{{ asset('images/icons/add_text.png') }}" alt="Add text icon" class="float-right" width="100px">
            </div> --}}
        </div>
    </form>
@endsection

@section('scripts')
    @parent

    <script>
        $(function() {
            $('#addApplicationForm').on('submit', function(e) {
                e.preventDefault();
                
                const spinnerClass = 'fa-spin fa-spinner';
                const form = $(this);
                const submitBtn = form.find('button[type=submit]');
                let formData = form.serialize();


                submitBtn.attr('disabled', true);
                submitBtn.find('i').toggleClass(spinnerClass);

                $.ajax({
                    url: "{{ route('applications.store') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        submitBtn.removeAttr('disabled');
                        submitBtn.find('i').toggleClass(spinnerClass);
                        // Display an info toast with no title
                        toastr.success('Заявка успешно отправлена!', 'Успешно', {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        })
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            });
        });
    </script>
@endsection