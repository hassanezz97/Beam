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
                                            <div class="rating-div" >
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
                                            @foreach($suggestions as $suggestion)
                                            <div class="suggestion-usd">
                                                <img style="width: 100%; height: 35px; width: 35px" src="{{asset('storage/influencer_images/'.$suggestion->name.'/'.$suggestion->profile_picture.'' )}}" alt="">
                                                <div class="sgt-text">
                                                    <h4>{{$suggestion->full_name}}</h4>
                                                    <span>{{$suggestion->category->name}}</span>
                                                </div>
                                                <span><a href="{{route('singleInfluencer',$suggestion->name)}}"><i class="fa fa-eye"></i></a></span>
                                            </div>
                                            @endforeach
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

                                                            <a data-toggle="modal"
                                                               data-target="#deletModal/{{$request->id}}" class="btn btn-danger deny-btn">Delete</a>
                                                        </div>
                                                    </div>

                                                    @include('influencers.send-information-modal')
                                                    <!-- Delete Notification Modal -->
                                                    <div class="modal fade" id="deletModal/{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header delete-modal">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete the request sent by {{$request->business->first_name}} {{$request->business->last_name}} ?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{route('delete-request')}}">
                                                                        <input value="{{$request->id}}" name="request_id" hidden>
                                                                        <button type="submit" class="btn btn-primary delete-modal-btn">Delete</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    {{--    Slider   --}}


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
