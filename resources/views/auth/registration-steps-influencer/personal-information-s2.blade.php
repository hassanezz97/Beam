<div class="{{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
    <div class="content-header mb-3">
        <h3 class="mb-1">Personal Information</h3>
        <span>Enter Your Personal Information</span>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="multiStepsFirstName">First Name</label>
            <input type="text" id="multiStepsFirstName" wire:model="first_name" name="multiStepsFirstName" class="form-control @error('first_name') is-invalid @enderror" placeholder="John" />
            @error('first_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="multiStepsLastName">Last Name</label>
            <input type="text" id="multiStepsLastName" wire:model="last_name" name="multiStepsLastName" class="form-control @error('last_name') is-invalid @enderror" placeholder="Doe" />
            @error('last_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="multiStepsState">Gender</label>
            <select id="multiStepsState" wire:model="gender" class="select2 form-select @error('gender') is-invalid @enderror" data-allow-clear="true">
                <option value="">Select</option>
                @foreach($Genders as $Gender)
                    <option value="{{$Gender->id}}">{{$Gender->name}}</option>
                @endforeach
            </select>
            @error('gender') <span class="error">{{ $message }}</span> @enderror
        </div>


        <div class="col-sm-6">
            <label class="form-label" for="multiStepsMobile">Mobile</label>
            <div class="input-group input-group-merge">
                <span class="input-group-text ">LB (+961)</span>
                <input type="text" id="multiStepsMobile" wire:model="mobile" name="multiStepsMobile" class="form-control  multi-steps-mobile @error('mobile') is-invalid @enderror" placeholder="202 555" />
            </div>
            @error('mobile') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="multiStepsState">Country</label>
            <select id="multiStepsState" wire:model="country" class="select2 form-select @error('country') is-invalid @enderror" data-allow-clear="true">
                <option value="">Select</option>
                @foreach($Countries as $Country)
                    <option value="{{$Country->id}}">{{$Country->name}}</option>
                @endforeach
            </select>
            @error('country') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="multiStepsCity">City</label>
            <input type="text" id="multiStepsCity" wire:model="city" class="form-control @error('city') is-invalid @enderror" placeholder="Beirut" />
            @error('city') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary" type="button" wire:click="back(1)">
                <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary nextBtn pull-right" type="button" wire:click="secondStepSubmit">
                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
            </button>
            {{-- <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>--}}
        </div>
    </div>
</div>
