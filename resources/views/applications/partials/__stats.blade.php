<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="custom-card">
            <div class="custom-card__body">
                <div class="stat">
                    <div class="stat__counter main-color">{{ $stats->new }}</div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="stat__title">{{ __('form.newApplications') }}</div>
                        <div class="stat__icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="custom-card">
            <div class="custom-card__body">
                <div class="stat">
                    <div class="stat__counter main-color">{{ $stats->refuse }}</div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="stat__title">{{ __('form.refusedApplications') }}</div>
                        <div class="stat__icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="custom-card">
            <div class="custom-card__body">
                <div class="stat">
                    <div class="stat__counter main-color">{{ $stats->accept }}</div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="stat__title">{{ __('form.acceptedApplications') }}</div>
                        <div class="stat__icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>