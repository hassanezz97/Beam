<div class="{{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-2">
    <div class="content-header mb-3">
        <h3 class="mb-1">Email Verification</h3>
        <span>Verify your email</span>
    </div>
    <div class="row g-3">

        <p class="text-start mb-4">
            We sent you a verification message to your email.
            <span class="fw-bold d-block mt-2"> Please click on the button in the email to verify in order to complete creating your account.</span>
        </p>

            <div class="text-start">Didn't get the code?
                <a href="javascript:void(0);">
                    Resend
                </a>
            </div>

        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary" type="button" wire:click="back(1)">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary nextBtn pull-right" type="button" wire:click="second2StepSubmit">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
            </button>

        </div>
    </div>
</div>
