<div class="d-flex col-lg-8 align-items-center authentication-bg p-sm-5 p-3">
    <!--  Multi Steps Registration -->

    <div class="w-px-700 mx-auto">
        <div id="multiStepsValidation" class="bs-stepper shadow-none">
            <div class="bs-stepper-header border-bottom-0">
                {{-- ---------------Account Step----------- --}}
                <div class="step {{ $currentStep != 1 ? '' : 'active' }}" data-target="#accountDetailsValidation">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="bx bx-home-alt"></i></span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title"><span class="head label">Account</span></span>
                            <span class="bs-stepper-subtitle">Account Details</span>
                        </span>
                    </button>
                </div>
                {{--  Email Verification --}}
                {{--                <div class="line">--}}
                {{--                    <i class="bx bx-chevron-right"></i>--}}
                {{--                </div>--}}
                {{--                <div class="step {{ $currentStep != 4 ? '' : 'active' }}" data-target="">--}}
                {{--                    <button type="button" class="step-trigger">--}}
                {{--                        <span class="bs-stepper-circle"><i class="bx bxs-inbox"></i></span>--}}
                {{--                        <span class="bs-stepper-label mt-1">--}}
                {{--                            <span class="bs-stepper-title"><span class="head label">Verification</span></span>--}}
                {{--                            <span class="bs-stepper-subtitle">Email Verification</span>--}}
                {{--                        </span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                <div class="line">
                    <i class="bx bx-chevron-right"></i>
                </div>
                {{-- ---------------Personal Step----------- --}}
                <div class="step {{ $currentStep != 2 ? '' : 'active' }}" data-target="#personalInfoValidation">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title"><span class="head label">Personal</span></span>
                            <span class="bs-stepper-subtitle">Enter Information</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i class="bx bx-chevron-right"></i>
                </div>
                {{-- ---------------Profile Step----------- --}}
                <div class="step {{ $currentStep != 3 ? '' : 'active' }}" data-target="#billingLinksValidation">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title"><span class="head label">Profile</span></span>
                            <span class="bs-stepper-subtitle">Profile Details</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form id="multiStepsForm">
                    <!-- Account Details -->
                    @include('auth.registration-steps-business.account-details-s1')
                    {{---------------------------------Email Verification-----------------------------}}
                    @include('auth.registration-steps-business.email-verification-s4')
                    {{---------------------------------Personal Information-----------------------------}}
                    @include('auth.registration-steps-business.personal-information-s2')
                    {{---------------------------------Profile Detailsaccount-details-s1.blade.php-----------------------------}}
                    @include('auth.registration-steps-business.profile-details-s3')
                </form>
            </div>
        </div>
    </div>
</div>
<!-- / Multi Steps Registration -->
