<div class="any-questions-card">
    <div class="questions-card-header">
        <img src="{{ asset('assets/images/any-questions-icon.webp') }}" width="42.042px" height="37.694px" class="img-fluid" loading="lazy" alt="Any Questions">
        <h4>Any Questions?</h4>
    </div>
    <div class="questions-card-body">
        <div class="d-flex flex-column">
            <div class="action-links-flex">
                <div class="img-container">
                    <img src="{{ asset('assets/images/call-icon-bg-black.webp') }}" loading="lazy" alt="Call now" width="23.72px" height="23.53px" class="img-fluid">
                </div>
                <a href="tel:{{ config('settings.app_phone') }}">{{ config('settings.app_phone') }}</a>
            </div>
            <div class="action-links-flex">
                <div class="img-container">
                    <img src="{{ asset('assets/images/mail-icon-bg-black.webp') }}" loading="lazy" alt="mail now" width="23px" height="16.16px" class="img-fluid">
                </div>
                <a href="mailto:{{ config('settings.app_email') }}">{{ config('settings.app_email') }}</a>
            </div>
            <div class="action-links-flex">
                <div class="img-container">
                    <img src="{{ asset('assets/images/whatsapp-icon-bg-black.webp') }}" loading="lazy" alt="Call now" width="23.08px" height="23.4px" class="img-fluid">
                </div>
                <a href="tel:{{ config('settings.app_phone') }}">{{ config('settings.app_phone') }}</a>
            </div>
            <p>Do you have any question for us i'm Available 24/7 Support</p>
        </div>
    </div>
</div>
