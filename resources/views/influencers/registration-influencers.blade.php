@extends('layouts.registration.master-registration')

@section('css')

@section('title')
    Register
@stop


@endsection

@section('content')

    <!-- Content -->
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">

            <!-- Left Text -->
            <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
                <div class="w-px-400">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/create-account-light.png" class="img-fluid" alt="multi-steps" width="600" data-app-dark-img="illustrations/create-account-dark.png" data-app-light-img="illustrations/create-account-light.png">
                </div>
            </div>
            <!-- /Left Text -->

            <!--  Multi Steps Registration -->
            <div class="d-flex col-lg-8 align-items-center authentication-bg p-sm-5 p-3">
                <div class="w-px-700 mx-auto">
                    <div id="multiStepsValidation" class="bs-stepper shadow-none">
                        <div class="bs-stepper-header border-bottom-0">
                            <div class="step" data-target="#accountDetailsValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-home-alt"></i></span>
                                    <span class="bs-stepper-label mt-1">
                                      <span class="bs-stepper-title">Account</span>
                                      <span class="bs-stepper-subtitle">Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="bx bx-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#personalInfoValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                                    <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Personal</span>
                  <span class="bs-stepper-subtitle">Enter Information</span>
                </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="bx bx-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#billingLinksValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                                    <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Profile</span>
                  <span class="bs-stepper-subtitle">Profile Information</span>
                </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form id="multiStepsForm"action="{{route('confirm-register-inf')}}">
                                <!-- Account Details -->
                                <div id="accountDetailsValidation" class="content">
                                    <div class="content-header mb-3">
                                        <h3 class="mb-1">Account Information</h3>
                                        <span>Enter Your Account Details</span>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsUsername">Username</label>
                                            <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="johndoe" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsEmail">Email</label>
                                            <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <label class="form-label" for="multiStepsPass">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                                                <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                                                <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <a class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal Info -->
                                <div id="personalInfoValidation" class="content">
                                    <div class="content-header mb-3">
                                        <h3 class="mb-1">Personal Information</h3>
                                        <span>Enter Your Personal Information</span>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsFirstName">Full Name</label>
                                            <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="">Gender</label>
                                            <select id="" name="multiStepsGender" class="select2 form-select" data-allow-clear="true">
                                                <option value="">Select</option>
                                                @foreach($Genders as $Gender)
                                                    <option value="{{$Gender->id}}">{{$Gender->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsMobile">Mobile</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">US (+1)</span>
                                                <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsState">Country</label>
                                            <select id="multiStepsState" name="multiStepsState" class="select2 form-select" data-allow-clear="true">
                                                <option value="">Select</option>
                                                @foreach($Countries as $Country)
                                                    <option value="{{$Country->id}}">{{$Country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="multiStepsAddress">City</label>
                                            <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="City" />
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <a class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <a class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Billing Links -->
                                <div id="billingLinksValidation" class="content">
                                    <div class="content-header mb-3">
                                        <h3 class="mb-1"> Profile Picture</h3>
                                        <span>Got a favorite selfie? Upload it now.</span>
                                    </div>
                                    <!-- Custom plan options -->
                                    <div class="row gap-md-0 gap-3 mb-4">
                                        <div class="col-md">

                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content" for="standardOption">
                                                    <span class="custom-option-body">
                                                      <img id="output" style=" margin-bottom: 15px; width:100%; max-width: 500px; max-height: 450px;" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                                                      <span class="d-flex justify-content-center">
                                                        <input style="display: none" type="file" name="profile_image" accept="image/*" id="avatar" class="inputfile" onchange="loadFile(event)" />
                                                        <label class="btn btn-xs-block our-button avatar-button" for="avatar">Change Image</label><br>
                                                      </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">

                                        </div>
                                    </div>
                                    <!--/ Custom plan options -->
                                    <div class="content-header mb-3">
                                        <h3 class="mb-1">Profile Information</h3>
                                        <span>Enter your profile information</span>
                                    </div>
                                    <!-- Credit Card Details -->
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label w-100" for="multiStepsCategory">Categories</label>
                                            <select id="multiStepsCategory" name="multiStepsCategory" class="select2 form-select" data-allow-clear="true">
                                                <option value="">Select</option>
                                                @foreach($Categories as $Category)
                                                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label" for="multiStepsExDate">Date of Birth</label>
                                            <input type="date" id="multiStepsExDate" name="date_of_birth" class="form-control" name="multiStepsExDate" placeholder="MM/YY" />

                                        </div>

                                        <div class="col-md-5">
                                            <label class="form-label" for="multiStepsInstagramUsername">Instagram Username</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="multiStepsInstagramUsername" class="form-control" name="multiStepsInstagramUsername" placeholder="Joedoe99"  />
                                                <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="This will link to your instagram account"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="multiStepsHeadline">Headline</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" name="multiStepsHeadline" id="multiStepsHeadline" class="form-control" placeholder="johndoe/profile" aria-label="johndoe" />
                                                <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="This statement will be displayed on the top of your profile"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <a class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </a>
                                            <button type="submit" class="btn btn-success btn-next btn-submit">Submit</button>
                                        </div>
                                    </div>
                                    <!--/ Credit Card Details -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Multi Steps Registration -->
        </div>
    </div>

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();

    </script>
    <script type="text/javascript">
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <!--/ Content -->

    <!--/ Layout Content -->


    <!--<div class="buy-now">-->
    <!--    <a href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>-->
    <!--</div>-->



@endsection

@section('js')

@endsection
