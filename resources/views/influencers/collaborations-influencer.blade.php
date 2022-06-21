@extends('layouts.Influencers.master-blade-influencer')

@section('css')

@section('title')
    Beam
@stop
{{--<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/inf-profile/profile.css') }}" />--}}
<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/home_page_influencers.css') }}" />
<link rel="stylesheet" media="all" href="{{ URL::asset('css/collaboration/collaboration.css') }}" />
@endsection

@section('content')
<main style="min-height: 550px">
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
                                                src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}"" alt="tag">
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

                                    <li class="view-profile">
                                        <a href="{{route('view-profile-influencer')}}" title="">View Profile</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="user-picy">
                                   <i style="font-size: 50px; color: #F8C760" class="fa fa-handshake-o"></i>
                                </div>
                                <div class="post-st">
                                    <h1 style="font-size: 35px">Collaborations</h1>
                                </div>
                            </div>
                        </div>
                        @foreach($collaborations as $collaboration)
                            <div class="posts-section">
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            <img style="margin-top: -2px" width="40" height="40" src="{{asset('storage/business_images/'.$collaboration->business->name.'/'.$collaboration->business->profile_picture.'' )}}" alt="">
                                            <img style="position: relative;bottom: 3px;right: 23px;" width="40" height="40" src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}" alt="">
                                            <div class="usy-name">
                                                <h3>{{Auth::user()->name}}</h3>
                                                <span><i class="fa fa-clock"></i> {{$collaboration->created_at->diffForHumans()}}</span>
                                            </div>
                                            <div class="usy-name">
                                                <h3 style="font-weight: 400; font-size: 16px">is in collaboration with</h3>
                                            </div>
                                            <div class="usy-name">
                                                  <div class="usy-name">
                                                    <a href="{{route('singleBusinessInInfluencer',$collaboration->business->name)}}"><h3 class="with-collaborator-name">{{$collaboration->business->name}}</h3></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ed-opts">
                                            <a  href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                            <ul class="ed-options">
                                                <li><a href="#" title="">Edit Post</a></li>
                                                <li><a href="#" title="">Unsaved</a></li>
                                                <li><a href="#" title="">Unbid</a></li>
                                                <li><a href="#" title="">Close</a></li>
                                                <li><a href="#" title="">Hide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="epi-sec">
                                        <ul class="descp">
                                            <li><span><i class="fa fa-heart"></i> {{$collaboration->influencer->category->name}}</span></li>
                                            <li><span><i class="fa fa-globe"></i> {{$collaboration->influencer->country->name}}</span></li>
                                        </ul>

                                    </div>
                                    <div class="job_descp">
                                        <div class=" w-50 ml-0 mr-0 mx-auto text-center" >
                                            <img style=" max-width:500px; max-height:450px" src="{{asset('storage/collaboration_images/'.$collaboration->influencer->name.'/'.$collaboration->collaboration_image.'' )}}">
                                        </div>
                                    </div>
                                    <div class="collaboration-description">
                                        <p>{{$collaboration->description}}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

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
