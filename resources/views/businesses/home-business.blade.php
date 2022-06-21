@extends('layouts.businesses.master-blade-business')

@section('css')

@section('title')
    Welcome {{Auth::user()->first_name}} {{Auth::user()->last_name}}
@stop

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

                                                <img src="{{asset('storage/business_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}"" alt="tag">
                                            </div>
                                        </div>
                                        <div class="user-specs">
                                            <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                                            <span>{{ Auth::user()->category->name }}</span>

                                        </div>
                                    </div>
                                    <ul class="user-fw-status">
                                        <li class="view-profile">
                                            <a href="{{route('view-business-profile')}}" title="">View Profile</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Suggestions</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="suggestions-list">
                                        @foreach($suggestions as $suggestion)
                                            <div class="suggestion-usd">
                                                <img style="width: 100%; height: 35px; width: 35px" src="{{asset('storage/influencer_images/'.$suggestion->name.'/'.$suggestion->profile_picture.'' )}}" alt="">
                                                <div class="sgt-text">
                                                    <h4>{{$suggestion->full_name}}</h4>
                                                    <span>{{$suggestion->category->name}}</span>
                                                </div>
                                                <span><a href="{{route('singleInfluencerInBusiness',$suggestion->name)}}"><i class="fa fa-eye"></i></a></span>
                                            </div>
                                        @endforeach

                                        <div class="view-more" style="border-top: 1px solid #e5e5e5">
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
                                <div class="posts-section" style="width: 100%">
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                        </div>
                                        <div class="epi-sec">
                                        </div>
                                        <div class="job_descp">
                                            <h3>Latest Notifications Recieved</h3>
                                        </div>
                                        <div class="job-status-bar">
{{--                                            <div class="nott-list">--}}
{{--                                                @foreach($informations as $information)--}}
{{--                                                    <div class="notfication-details">--}}
{{--                                                        <div class="noty-user-img">--}}
{{--                                                            <img style="border-radius: 100px"--}}
{{--                                                                 src="{{asset('storage/influencer_images/'.$information->influencer->name.'/'.$information->influencer->profile_picture.'' )}}"--}}
{{--                                                                 alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="notification-info">--}}
{{--                                                            <h3><a href="{{route('singleInfluencerInBusiness',$information->influencer->name)}}"--}}
{{--                                                                   title="">{{$information->influencer->full_name}}</a>--}}
{{--                                                                Replied to your information request.</h3>--}}
{{--                                                            <span>{{$information->created_at->diffForHumans()}}</span>--}}
{{--                                                        </div>--}}
{{--                                                        <br><br>--}}
{{--                                                        <div class="confirm-buttons">--}}
{{--                                                            <a data-toggle="modal"--}}
{{--                                                               data-target="#viewInformationModal/{{$information->id}}"--}}
{{--                                                               class="btn btn-success view-info-btn">View Information</a>--}}
{{--                                                            <a class="btn btn-danger deny-btn">Deny</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!------------------------- Modal ------------------------>--}}
{{--                                                    <div class="modal fade" id="viewInformationModal/{{$information->id}}"--}}
{{--                                                         tabindex="-1" role="dialog"--}}
{{--                                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header" style="background-color: #A9DBE9" id="view-information-modal-header">--}}
{{--                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><span--}}
{{--                                                                            style="color:#F5937A">{{$information->influencer->full_name}}</span>--}}
{{--                                                                        has replied to your information request: </h5>--}}
{{--                                                                    <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                            aria-label="Close">--}}
{{--                                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                                    </button>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body">--}}
{{--                                                                    @if($information->story_price != null)--}}
{{--                                                                        <div class="col-sm-6 story-section">--}}
{{--                                                                            <div class="form-group">--}}
{{--                                                                                <label class="story-label" for="exampleInputEmail1">Story Price:</label>--}}
{{--                                                                                <div class="input-group">--}}
{{--                                                                                    <input class="form-control" value="{{$information->story_price}}"--}}
{{--                                                                                           type="number"--}}
{{--                                                                                           name="story_price" disabled/>--}}
{{--                                                                                    <div class="input-group-append">--}}
{{--                                                                                    <span class="input-group-text dollar-div-view-information">$</span>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        @endif--}}
{{--                                                                    @if($information->post_price != null)--}}
{{--                                                                            <div class="col-sm-6 post-section">--}}
{{--                                                                                <label class="post-label" style="display: inline-flex">Post Price:</label>--}}
{{--                                                                                <div class="input-group">--}}
{{--                                                                                    <input class="form-control" min="1"--}}
{{--                                                                                           type="number" class="switch-input"--}}
{{--                                                                                           name="post_price" disabled  value="{{$information->post_price}}"/>--}}
{{--                                                                                    <div class="input-group-append">--}}
{{--                                                                                        <span class="input-group-text dollar-div-view-information">$</span>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                     @endif--}}
{{--                                                                     @if($information->other_comments != null)--}}
{{--                                                                            <div class="col-sm-10 additional-comments-section">--}}
{{--                                                                                <h1 class="additional-comments-label" style="display: inline-flex">Comments:</h1>--}}
{{--                                                                                <textarea value="other_comments"--}}
{{--                                                                                          name="other_comments" class="form-control"--}}
{{--                                                                                          id="exampleFormControlTextarea1"--}}
{{--                                                                                          rows="3" disabled>{{$information->other_comments}}</textarea>--}}
{{--                                                                            </div>--}}

{{--                                                                     @endif--}}

{{--                                                                </div>--}}


{{--                                                                    <div class="modal-footer">--}}

{{--                                                                        <button type="button" class="btn btn-secondary close-info-modal"--}}
{{--                                                                                data-dismiss="modal">Close--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            @include('businesses.accept-collaboration-modal')--}}
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('js')

@endsection
