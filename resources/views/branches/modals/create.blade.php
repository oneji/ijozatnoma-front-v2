<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('branches.store') }}" method="POST" data-parsley-validate id="createForm">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">{{ __('form.add') }}</h5>
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
                            <select name="region_id" class="custom-control" id="region_id" required></select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-select-wrapper">
                            <select name="city_id" class="custom-control" id="city_id" required></select>
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
