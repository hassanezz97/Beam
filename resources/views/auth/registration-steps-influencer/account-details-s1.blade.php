<div class="{{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
    <div class="content-header mb-3">
        <h3 class="mb-1">Account Information</h3>
        <span>Enter Your Account Details</span>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="multiStepsUsername">{{ __('Username') }}</label>
            <input type="text" id="multiStepsUsername" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="johndoe" value="{{ old('name') }}" required autocomplete="name" autofocus />
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="multiStepsEmail">{{ __('E-Mail Address') }}</label>
            <input
                type="email"
                id=""
                class="form-control @error('email') is-invalid @enderror"
                wire:model="email"
                placeholder="john.doe@email.com"
                aria-label="john.doe"
                value="{{ old('email') }}"
                required
                autocomplete="email"
            />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col-sm-6 form-password-toggle">
            <label class="form-label" for="multiStepsPass">{{ __('Password') }}</label>
            <div class="input-group input-group-merge">
                <input
                    type="password"
                    id="multiStepsPass"
                    class="form-control @error('password') is-invalid @enderror"
                    wire:model="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="multiStepsPass2"
                    required
                    autocomplete="new-password"
                />
                <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
            </div> @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6 form-password-toggle">
            <label class="form-label" for="multiStepsConfirmPass">{{ __('Confirm Password') }}</label>
            <div class="input-group input-group-merge">
                <input
                    type="password"
                    id="multiStepsConfirmPass"
                    wire:model="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="multiStepsConfirmPass2"
                    required
                    autocomplete="new-password"
                />
                <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
            </div>
            @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled>
                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary nextBtn pull-right" wire:click="firstStepSubmit" type="button">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
            </button>
        </div>
    </div>
</div>
