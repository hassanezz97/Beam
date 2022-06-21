<div>
    <form wire:submit.prevent="collaborateWithBusiness()" >
        <div class="row">
            <div class="col-lg-12 " >
                <h4 >Collaboration Image</h4>
                @if ($collaboration_image)
                    <img  style=" margin-bottom: 15px; width:100%; max-width: 500px; max-height: 450px;" src="{{ $collaboration_image->temporaryUrl() }}">
                @else
                    <img  style=" margin-bottom: 15px; width:100%; max-width: 500px; max-height: 450px;" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                @endif
                <div wire:loading wire:target="collaboration_image"><i class="fa fa-spinner fa-spin mt-2 ml-2" style="color:red;"></i> Uploading Image...</div>
                <p style="text-align: center">
                    <input style="display: none" type="file" wire:model="collaboration_image" accept="image/*" id="avatar" class="inputfile" onchange="loadFile(event)" />
                    <label class="btn btn-xs-block our-button avatar-button" for="avatar">Change Image</label><br>
                    @error('collaboration_image') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                </p>
            </div>
            <div class="col-lg-12 ">
                <h4>Caption</h4>
                <textarea style="min-height: 100px"
                          wire:model="collaboration_caption" class="form-control"
                          id="exampleFormControlTextarea1"
                          placeholder="Include Your description here!"
                          rows="3"></textarea>
            </div>
        </div>

</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Send Invitation</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
</div>
