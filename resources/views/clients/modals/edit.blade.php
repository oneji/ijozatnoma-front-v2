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
                        <input name="phone_number" class="custom-control" placeholder="{{ __('form_placeholders.phoneNumber') }}" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">{{ __('form.submitBtn') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
