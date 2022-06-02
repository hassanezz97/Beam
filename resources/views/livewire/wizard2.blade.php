<div>

    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
            <div class="w-px-400">
                <img src="{{ URL::asset('assets/images/registraion-images/create-account-light.png') }}" class="img-fluid" alt="multi-steps" width="600" >
            </div>
        </div>

        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 align-items-center authentication-bg p-sm-5 p-3" >
            <div class="w-px-700 mx-auto">
                <div id="multiStepsValidation" class="bs-stepper shadow-none">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="bs-stepper-header border-bottom-0">
                                <div class="stepwizard-step">
                                    {{--   ---------------Account Step-----------     --}}
                                    <div class="step {{ $currentStep != 1 ? '' : 'active' }}" data-target="#accountDetailsValidation">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-home-alt"></i></span>
                                            <span class="bs-stepper-label mt-1">
                                                  <span class="bs-stepper-title" ><span class="head label">Account</span></span>
                                                  <span class="bs-stepper-subtitle">Account Details</span>
                                                </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="line">
                                    <i class="bx bx-chevron-right"></i>
                                </div>
                                <div class="stepwizard-step">
                                    <div class="step {{ $currentStep != 2 ? '' : 'active' }}" data-target="#personalInfoValidation">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                                            <span class="bs-stepper-label mt-1">
                                                    <span class="bs-stepper-title"><span class="head label">Personal</span></span>
                                                    <span class="bs-stepper-subtitle">Enter Information</span>
                                                </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="line">
                                    <i class="bx bx-chevron-right"></i>
                                </div>
                                <div class="stepwizard-step">
                                    {{--   ---------------Profile Step-----------     --}}
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

                            </div>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form id="multiStepsForm"   >

                            <!-- Account Details -->
                            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                                        <div class="content-header mb-3">
                                            <h3 class="mb-1">Account Information</h3>
                                            <span>Enter Your Account Details</span>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsUsername">{{ __('Name') }}</label>
                                                <input type="text"  id="multiStepsUsername" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="johndoe" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                                @error('name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsEmail">{{ __('E-Mail Address') }}</label>
                                                <input type="email"  id="multiStepsEmail" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="john.doe@email.com" aria-label="john.doe" value="{{ old('email') }}" required autocomplete="email"/>
                                                @error('email') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-sm-6 form-password-toggle">
                                                <label class="form-label" for="multiStepsPass">{{ __('Password') }}</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="multiStepsPass"  class="form-control @error('password') is-invalid @enderror" wire:model="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" required autocomplete="new-password" />
                                                    <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                                                    @error('password') <span class="error">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 form-password-toggle">
                                                <label class="form-label" for="multiStepsConfirmPass">{{ __('Confirm Password') }}</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="multiStepsConfirmPass" wire:model="password_confirmation"  class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" required autocomplete="new-password"/>
                                                    <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" ><span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>


                                            </div>
                                        </div>
                            </div>


                            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                                        <div class="content-header mb-3">
                                            <h3 class="mb-1">Personal Information</h3>
                                            <span>Enter Your Personal Information</span>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsFirstName">First Name</label>
                                                <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsLastName">Last Name</label>
                                                <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="Doe" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsMobile">Mobile</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">LB (+961)</span>
                                                    <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsState">State</label>
                                                <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                                                    <option value="">Select</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="multiStepsCity">City</label>
                                                <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson" />
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-primary " type="button" wire:click="back(1)" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
{{--                                                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>--}}
                                            </div>
                                        </div>
                            </div>
                            <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                                        <div class="content-header mb-3">
                                            <h3 class="mb-1">Profile Picture</h3>
                                            <span>Got a favorite selfie? Upload it now. </span>
                                        </div>
                                <!-- Custom plan options -->
                                <div class="row gap-md-0 gap-3 mb-4">
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="basicOption">
                        <span class="custom-option-body">
                          <h4 class="mb-2">Basic</h4>
                          <p class="mb-2">A simple start for start ups & Students</p>
                          <span class="d-flex justify-content-center">
                            <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                            <span class="display-5 text-primary">0</span>
                            <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/month</sub>
                          </span>
                        </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="basicOption" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="standardOption">
                        <span class="custom-option-body">
                          <h4 class="mb-2">Standard</h4>
                          <p class="mb-2">For small to medium businesses</p>
                          <span class="d-flex justify-content-center">
                            <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                            <span class="display-5 text-primary">99</span>
                            <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/month</sub>
                          </span>
                        </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="standardOption" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-icon">
                                            <label class="form-check-label custom-option-content" for="enterpriseOption">
                        <span class="custom-option-body">
                          <h4 class="mb-2">Enterprise</h4>
                          <p class="mb-2">Solution for enterprise & organizations</p>
                          <span class="d-flex justify-content-center">
                            <sup class="text-primary fs-big lh-1 mt-3">$</sup>
                            <span class="display-5 text-primary">499</span>
                            <sub class="lh-1 fs-big mt-auto mb-2 text-muted">/year</sub>
                          </span>
                        </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="enterpriseOption" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Custom plan options -->
                                <div class="content-header mb-3">
                                    <h3 class="mb-1">Payment Information</h3>
                                    <span>Enter your card information</span>
                                </div>
                                <!-- Credit Card Details -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label w-100" for="multiStepsCard">Card Number</label>
                                        <div class="input-group input-group-merge">
                                            <input id="multiStepsCard" class="form-control multi-steps-card" name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898" aria-describedby="multiStepsCardImg" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label" for="multiStepsName">Name On Card</label>
                                        <input type="text" id="multiStepsName" class="form-control" name="multiStepsName" placeholder="John Doe" />
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label class="form-label" for="multiStepsExDate">Expiry Date</label>
                                        <input type="text" id="multiStepsExDate" class="form-control multi-steps-exp-date" name="multiStepsExDate" placeholder="MM/YY" />
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="multiStepsCvv">CVV Code</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv" name="multiStepsCvv" maxlength="3" placeholder="654" />
                                            <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-primary " type="button" wire:click="back(2)"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-next btn-submit" wire:click="submitForm" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
