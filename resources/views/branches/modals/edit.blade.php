<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" method="POST" data-parsley-validate id="editForm">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">{{ __('form.edit') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input name="name" class="custom-control" placeholder="{{ __('form_placeholders.name') }}" required />
                    </div>

                    <div class="form-group">
                        <div class="custom-select-wrapper">
                            <select name="region_id" class="custom-control" required>
                                <option value="" selected disabled>{{ __('form.region') }}</option>
                                @foreach ($lists['regions'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-select-wrapper">
                            <select name="city_id" class="custom-control" required>
                                <option value="" selected disabled>{{ __('form.city') }}</option>
                                @foreach ($lists['cities'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="address" class="custom-control" placeholder="{{ __('form_placeholders.address') }}" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">{{ __('form.submitBtn') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
