@extends('layouts.app', [
    'title' => 'ДАРХОСТ КАРДАН БАРОИ ДАРЁФТИ ИҶОЗАТНОМА'
])

@section('content')
    <form action="{{ route('applications.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="form-group">
                    <input type="text" name="input" class="custom-control" placeholder="НОМ ВА НАСАБ..." required>
                </div>
                <div class="form-group">
                    <div class="custom-select-wrapper">
                        <select name="select" class="custom-control" required>
                            <option value="" selected disabled>НОМИ ФАЪОЛИЯТИ ПУРРА ВА АНИҚ</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="datepicker-wrapper">
                        <input type="text" name="date" class="custom-control datepicker" placeholder="БА МУҲЛАТИ..." required>
                    </div>
                </div>
                <div class="form-group">
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
                </div>
                
                <div class="form-group">
                    <div class="form-group">
                        <button class="btn btn-success btn-sm text-uppercase" type="submit">
                            Сабт кардан
                            <i class="fas fa-share ml-2"></i>
                        </button>
                        <button class="btn btn-primary btn-sm text-uppercase" type="reset">
                            <i class="fas fa-reply mr-2"></i>
                            Бозгашт
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <img src="{{ asset('images/icons/add_text.png') }}" alt="Add text icon" class="float-right" width="100px">
            </div>
        </div>
    </form>
@endsection