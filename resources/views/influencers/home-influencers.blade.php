@extends('layouts.Influencers.master-blade-influencer')

@section('css')

@section('title')
    Beam
@stop

<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/home_page_influencers.css') }}" />
<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/notifications/notifications.css') }}" />

@endsection

@section('content')

    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                            <div class="main-left-sidebar no-margin">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                {{--                                            <img src="<?php echo asset("storage/app/business_images/abbass/asdwq.png")?>" alt="">--}}

                                                <img
                                                    src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}"
                                                " alt="tag">
                                            </div>
                                        </div>
                                        <div class="user-specs">
                                            <h3>{{ Auth::user()->full_name }}</h3>
                                            <div style="justify-content: center; margin: auto">
                                                <input  @if($ratings==5) checked @endif   class="star star-5" name="rating" value="5" id="star-5" type="radio" disabled/>
                                                <label class="star star-5 " for="star-5"></label>
                                                <input @if($ratings==4) checked @endif class="star star-4" name="rating" value="4" id="star-4" type="radio"  disabled/>
                                                <label class="star star-4" for="star-4"></label>
                                                <input @if($ratings==3) checked @endif  class="star star-3" name="rating" value="3" id="star-3" type="radio" disabled/>
                                                <label class="star star-3" for="star-3"></label>
                                                <input @if($ratings==2) checked @endif class="star star-2" name="rating" value="2" id="star-2" type="radio" disabled/>
                                                <label class="star star-2" for="star-2"></label>
                                                <input @if($ratings==1) checked @endif class="star star-1" name="rating" value="1" id="star-1" type="radio"  disabled/>
                                                <label class="star star-1" for="star-1"></label>
                                            </div>

                                            <span >{{ Auth::user()->category->name }}</span>

                                        </div>
                                    </div>
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4>Following</h4>
                                            <span>-</span>
                                        </li>
                                        <li>
                                            <h4>Followers</h4>
                                            <span>-</span>
                                        </li>
                                        <li class="view-profile">
                                            <a href="{{route('view-profile-influencer')}}" title="">View Profile</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Suggestions</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
{{--                                        @foreach($suggestions as $suggestion)--}}

{{--                                        @endforeach--}}
                                        <div class="suggestion-usd">
                                            <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Salwa Ghaddar</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="fa fa-eye"></i></span>
                                        </div>
                                        <div class="view-more">
                                            <a href="#" title="">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img
                                            src="https://img.icons8.com/external-xnimrodx-lineal-gradient-xnimrodx/64/4a90e2/external-eye-notification-alert-xnimrodx-lineal-gradient-xnimrodx.png"/>
                                    </div>
                                    <div class="post-st">
                                        <h1 style="font-size: 35px">{{trans('mainpage_Influencer.notifications')}}</h1>
                                    </div>
                                </div>
                                {{-- Show notifications here--}}
                                <div class="posts-section">
                                    <div class="post-bar">
                                        <div class="post_topbar">


                                        </div>
                                        <div class="epi-sec">

                                        </div>
                                        <div class="job_descp">
                                            <h3>Latest Notifications Recieved</h3>
                                        </div>
                                        <div class="job-status-bar">
                                            <div class="nott-list">
                                                @foreach($requests as $request)
                                                    <div class="notfication-details">
                                                        <div class="noty-user-img">
                                                            <img style="border-radius: 100px"
                                                                 src="{{asset('storage/business_images/'.$request->business->name.'/'.$request->business->profile_picture.'' )}}"
                                                                 alt="">
                                                        </div>
                                                        <div class="notification-info">
                                                            <h3><a href="http://localhost:8000/en/{{$request->business->name}}"
                                                                   title="">{{$request->business->first_name}} {{$request->business->last_name}}</a>
                                                                Requested information.</h3>
                                                            <span>{{$request->created_at->diffForHumans()}}</span>
                                                        </div>
                                                        <br><br>
                                                        <div class="confirm-buttons">
                                                            <a data-toggle="modal"
                                                               data-target="#replyToRequest/{{$request->id}}"
                                                               class="btn btn-success confirm-btn">Confirm</a>
                                                            <a class="btn btn-danger deny-btn">Deny</a>
                                                        </div>
                                                    </div>
                                                    <!------------------------- Modal ------------------------>
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
                                            </div>
                                        </div>
                                    </div>


                                    {{--    Slider   --}}

                                    <div class="top-profiles">
                                        <div class="pf-hd">
                                            <h3>Top Profiles</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="profiles-slider">
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                            <div class="user-profy">
                                                <img src="{{ URL::asset('assets/images/icons/user1.png') }}" alt="">
                                                <h3>Hassan Ezz</h3>
                                                <span>Web Developer</span>
                                                <a href="#" title="">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div></div></div></div>
    </main>

@endsection

@section('js')

@endsection
