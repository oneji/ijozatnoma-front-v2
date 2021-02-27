@extends('layouts.app', [
    'title' => __('page_headers.createApplication')
])

@section('head')
    @parent

    <style>
        #addApplicationForm {
            font-size: 16px;
        }

        #extension {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            display: none;
            cursor: pointer;
        }

        #extension ~ #extensionLabel {
            position: relative;
            cursor: pointer;
        }

        #extension ~ #extensionLabel:before {
            content:'';
            -webkit-appearance: none;
            background-color: transparent;
            border: 2px solid #adb5bd;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            padding: 8px;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
        }

        #extension:checked + #extensionLabel:after {
            content: '';
            display: block;
            position: absolute;
            top: 6px;
            left: 8px;
            width: 5px;
            height: 12px;
            border: solid #adb5bd;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('applications.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data" id="addApplicationForm">
        @csrf

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-md-3">
                <div class="form-group">
                    <input type="checkbox" name="extension" id="extension">
                    <label id="extensionLabel" class="mb-0" for="extension">{{ __('application_statuses.extensionFull') }}</label>
                </div>

                <div class="form-group">
                    <div class="custom-select-wrapper">
                        <select name="activity_id" class="custom-control" required>
                            <option value="" selected disabled>{{ __('form.activity') }}</option>
                            @foreach ($activities as $item)
                                <option value="{{ $item->id }}">
                                    @if (App::getLocale() === 'tj')
                                        {{ $item->title }}
                                    @else
                                        {{-- {{ $item['title_'.App::getLocale()] }} --}}
                                        {{ $item->title }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <textarea name="notes" class="custom-control" placeholder="{{ __('form_placeholders.notes') }}" rows="5"></textarea>
                </div>
                
                <div class="form-group">
                    <input type="number" id="term" name="term" class="custom-control" placeholder="{{ __('form.term') }}" required />
                </div>
                
                @if (isset($branches))
                    <div class="form-group">
                        <div class="custom-select-wrapper">
                            <select name="branch_id" class="custom-control" required>
                                <option value="" selected disabled>{{ __('form.branch') }}</option>
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

                <div class="docs" style="display: none">
                    <hr class="docs__divider">
                    <div class="docs__files"></div>
                </div>
                
                <div class="form-group">
                    <div class="form-group">
                        <button class="btn btn-success btn-sm btn-block text-uppercase" type="submit">
                            {{ __('form.submitBtn') }}
                            <i class="fas fa-share ml-2"></i>
                        </button>
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
            $('#addApplicationForm').on('submit', function() {
                const submitBtn = $(this).find('button[type=submit]');
                const spinnerClass = 'fa-spin fa-spinner';
                submitBtn.attr('disabled', true);
                submitBtn.find('i').toggleClass(spinnerClass);
            })

            // Years selector
            for (let year = 1; year <= 6; year++) {
                let yearCaption = 
                    year === 1 ? 'год' : year < 5 && year > 1 ? 'года' : 'лет';

                $('#addApplicationForm').find('select[name=term]').append(`
                    <option value="${year}">${year} ${yearCaption}</option>
                `);
            }

            // Activities
            const activities = @json($activities);

            $('#addApplicationForm').find('select[name=activity_id]').on('change', function() {
                let activityId = $(this).val();

                activities.map(activity => {
                    if(activity.id == activityId) {
                        $('#term').attr('min', activity.min_term);
                        $('.docs__files').html('');
                        activity.document_types.map(doc => {
                            $('.docs__files').append(`
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input
                                            data-type="${doc.id}"
                                            type="file"
                                            name="docs[${doc.id}][]"
                                            id="document_type_${doc.id}"
                                            data-multiple-caption="{count} файлро интихоб кард"
                                            required
                                            multiple
                                            data-parsley-errors-container=".error-box-${doc.id}"
                                        >
                                        <label for="document_type_${doc.id}">
                                            <span>Выберите файл: ${doc.title}</span>
                                            <i class="fas fa-plus"></i>
                                        </label>
                                        <div class="error-box-${doc.id}"></div>
                                    </div>
                                </div>
                            `);
                        })
                        $('.docs').show();
                    }
                })
            });
        });
    </script>
@endsection