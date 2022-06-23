<!------------------------- Send information Modal ------------------------>
@foreach($requests as $request)
<div class="modal fade" id="replyToRequest/{{$request->id}}"
     tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <span class="notification-sender">{{$request->business->first_name}} {{$request->business->last_name}}</span>
                    is asking about the price of your
                    <span class="notification-platform">{{$request->platform}}</span>
                    promotion prices:</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('Send-Information')}}" method="GET">
                @if($request->story == 1)
                    <div class="col-sm-6 story-section">
                        <div class="form-group">
                            <label class="story-label" for="exampleInputEmail1">Price per
                                Story:</label>
                            <div class="input-group">
                                <input class="form-control" min="1"
                                       type="number"
                                       name="story_price"/>
                                <div class="input-group-append">
                                                                                    <span
                                                                                        class="input-group-text dollar-div">$</span>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                @if($request->post == 1)
                    <div class="col-sm-6 post-section">
                        <label class="post-label" style="display: inline-flex">Price per
                            Post:</label>
                        <div class="input-group">
                            <input class="form-control" min="1"
                                   type="number" class="switch-input"
                                   name="post_price"  value=""/>
                            <div class="input-group-append">
                                <span class="input-group-text dollar-div">$</span>
                            </div>
                        </div>
                    </div>

                @endif
                @if($request->other_questions != null)
                    <div class="col-sm-10 additional-questions-section">
                        <h1 class="additional-questions-label">{{$request->business->name}} additional
                            questions: </h1>
                        <h4 style="display: inline-flex">{{$request->other_questions}}</h4>
                    </div>
                    <br>
                @endif
                <div class="col-sm-10 additional-comments-section">
                    <h1 class="additional-comments-label" style="display: inline-flex">Any additional
                        comments:</h1>
                    <textarea value="other_comments"
                              name="other_comments" class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="3"></textarea>
                </div>
                <br>
                <input value="{{$request->business_id}}"
                       name="business_id" hidden>
                <input value="{{$request->influencer_id}}"
                       name="influencer_id" hidden>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-primary request-confirmation">
                        Send
                    </button>
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
