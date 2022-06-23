<!-- Accept Collaboration Modal -->
@foreach(Auth::user()->notifications as $notification)
    @if($notification->type == 'App\Notifications\CollaborationRequest')
    <!---------------------- Modal------------------->
    <div class="modal fade" id="AcceptInvitation/{{$notification->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #81acdb">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create a new Collaboration </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('accept-collaboration')}}" >
                        <input value="{{$notification->data["collaboration_id"]}}" name="collaboration_id" hidden>
                        <div class="row">
                            <div class="col-lg-12 " >
                                <h4 >Collaboration Image</h4>
                                    <img  style=" margin-bottom: 15px; width:100%; max-width: 500px; max-height: 450px;" src="{{asset('storage/collaboration_images/'.$notification->data["influencer_username"].'/'.$notification->data["collaboration_image"].'' )}}">

                            </div>
                            <div class="col-lg-12 ">
                                <h4>Caption</h4>
                                <p>{{$notification->data["collaboration_caption"]}}</p>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Accept Invitation</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    @endif
@endforeach
