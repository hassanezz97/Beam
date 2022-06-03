<div class="{{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
    <div class="content-header mb-3">
        <h3 class="mb-1">Profile Picture</h3>
        <span>Got a favorite selfie? Upload it now. </span>
    </div>
    <!-- Custom plan options -->
    <div class="row gap-md-0 gap-3 mb-4">

        <div class="col-md">
            <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="standardOption">
                                        <span class="custom-option-body">
                                            <h4 class="mb-2">Profile picture</h4>
                                            <p class="mb-2">
                                                <img class="img-circle avatar-image" id="output" style="max-width: 100%" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                                            </p>
                                            <form id="avatar-form" class="text-center" enctype="multipart/form-data" action="/influencers/avatar" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" />
                                                    <input type="hidden" name="authenticity_token" value="V7pV2wjbPLRLIm6VzEdsjDxWmjHs6EG0E1jEbc1n+Hf/ZFWMeMlc7ktaQpr94jUha7gPT5ERFma8DRJ8IMexsw==" />
                                                    <input style="display: none" type="file" name="profile-picture" wire:model="profile_picture"  accept="image/*" id="avatar" class="inputfile" onchange="loadFile(event)" />
                                                    <label class="btn btn-xs-block our-button avatar-button" for="avatar">Change Avatar</label>
                                            </form>

                                            <span class="d-flex justify-content-center">
                                                <sup class="text-primary fs-big lh-1 mt-3"></sup>
                                                <span class="display-5 text-primary"></span>
                                                <sub class="lh-1 fs-big mt-auto mb-2 text-muted"></sub>
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
            <label class="form-label w-100" for="multiStepsCard">Categories</label>
            <div class="input-group input-group-merge">
                <select id="multiStepsState" wire:model="category" class="select2 form-select @error('category') is-invalid @enderror" data-allow-clear="true">
                    <option value="">Select</option>
                    @foreach($Categories as $Category)
                        <option value="{{$Category->id}}">{{$Category->name}}</option>
                    @endforeach
                </select>
                @error('category') <span class="error">{{ $message }}</span> @enderror
{{--                <input id="multiStepsCard" class="form-control multi-steps-card" name="multiStepsCard" type="text" placeholder="" aria-describedby="multiStepsCardImg" />--}}
{{--                <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>--}}
            </div>
        </div>
        <div class="col-6 col-md-4">
            <label class="form-label" for="multiStepsExDate">Date of Birth</label>
            <input type="date" id="multiStepsExDate" wire:model="date_of_birth" class="form-control multi-steps-exp-date" name="multiStepsExDate" placeholder="MM/YY" />

        </div>
        <div class="col-md-8">
            <label class="form-label" for="multiStepsName"> Instagram Username</label>
            <div class="input-group-prepend">
                <span class="input-group-text instagram-link" id="basic-addon3">https://instagram.com/</span>
                <input type="text" id="multiStepsName" wire:model="instagram_username" class="form-control instagram-username" name="multiStepsName" placeholder="Johndoe99" />
            </div>
        </div>
        <div class="col-md-12">
            <label class="form-label" for="multiStepsName"> Headline</label>
            <div class="input-group-prepend">

                <small class="help-block">
                                                  A short one-liner that describes you. This will sometimes be
                                                  displayed next to your username.
                </small>
                <br>
                </div>
{{--            <textarea class="form-control" placeholder="Tell the world about yourself here." style="min-height: 100px" name="account[bio]" id="account_bio"></textarea>--}}
            <input
                type="text"
                id="multiStepsEmail"
                class="form-control @error('headline') is-invalid @enderror"
                wire:model="headline"
                placeholder=""
                aria-label=""
                value="{{ old('headline') }}"
                required
            />
        </div>


        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary" type="button" wire:click="back(2)">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-success btn-next btn-submit" wire:click="submitForm" type="button">Submit</button>
        </div>
    </div>
</div>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
