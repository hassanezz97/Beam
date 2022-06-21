<div>
{{--<input value="{{Auth::user()->id}}" wire:name="business_id" hidden>--}}

    <form  wire:submit.prevent="rate()" >
        <div style="float: left">

       <input  class="star star-5" wire:model="rating" value="5" id="star-5" type="radio" name="star"/>
       <label class="star star-5 " for="star-5"></label>
       <input class="star star-4" wire:model="rating" value="4" id="star-4" type="radio" name="star"/>
       <label class="star star-4" for="star-4"></label>
       <input class="star star-3" wire:model="rating" value="3" id="star-3" type="radio" name="star"/>
       <label class="star star-3" for="star-3"></label>
       <input class="star star-2" wire:model="rating" value="2" id="star-2" type="radio" name="star"/>
       <label class="star star-2" for="star-2"></label>
       <input class="star star-1" wire:model="rating" value="1" id="star-1" type="radio" name="star"/>
       <label class="star star-1" for="star-1"></label>
        </div>
        <button type="submit" class="rate-influencer-btn" style="padding:1px 20px 1px 20px; margin-top: 1px">Rate</button>
    </form>

</div>
