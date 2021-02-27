<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('branches.store') }}" method="POST" data-parsley-validate id="payForm">
                @csrf

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-primary text-center">
                                <h4 class="mb-0">{{ __('form.paySum') }}: <span id="paySum"></span>c.</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/logo_korti_milli.png') }}" alt="" height="200" style="display: block; margin: 20px auto">
                            <button class="btn btn-success btn-sm btn-block pay-btn" data-type="akm">
                                <i class="fas fa-hand-holding-usd mr-2"></i>
                                {{ __('form.payKortiMilli') }}
                            </button>
                        </div>
    
                        <div class="col-6">
                            <img src="{{ asset('images/logo_ibt.jpg') }}" alt="" height="200" style="display: block; margin: 20px auto">
                            <button class="btn btn-primary btn-sm btn-block pay-btn" data-type="ibt">
                                <i class="fas fa-hand-holding-usd mr-2"></i>
                                {{ __('form.payIbt') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
