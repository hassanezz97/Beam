@extends('layouts.Influencers.master-blade-influencer')

@section('css')


@section('title')
{{--    {{$influencers->full_name}}--}}
@stop
@livewireStyles
<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/inf-profile/profile.css') }}" />
<link rel="stylesheet" media="all" href="{{ URL::asset('css/collaboration/collaboration.css') }}" />
@endsection

@section('content')

    <div class="position-relative">
        <div style="background-color: #F2F5F7;">
            <section id="header-section" class="new-header-section profile-header">

                <div class="background-image" style="background-image: url(https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <br>
                                {{--                                <a class="btn btn-default edit-profile-button" href="/influencers/6211589751d0aa56f86fa18e/edit">Edit Profile</a>--}}
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                {{--                                <p class="text-right" style="position: absolute; top: 20px; right: 20px">--}}
                                {{--                                    <a class="btn btn-default" data-toggle="modal" href="#bg-upload-modal">--}}
                                {{--                                        <span class="fa fa-edit"></span>--}}
                                {{--                                    </a>  </p>--}}
                                <div class="modal fade" data-backdrop="static" id="snap-upload-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-button" data-dismiss="modal">&times;</div>
                                            <div class="modal-body">
                                                <div class="modal-heading">
                                                    Upload your snap
                                                    (<small>Image or video up to 20MB</small>)
                                                </div>

                                                <div class="modal-body">
                                                    <div id="fine-uploader-s3-snap">
                                                    </div>

                                                    <br>
                                                    <p class="text-right">
                                                        <a data-dismiss="modal" class="btn btn-danger" href="#">Cancel</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" data-backdrop="static" id="media-kit-upload-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-button" data-dismiss="modal">&times;</div>
                                            <div class="modal-body">
                                                <div class="modal-heading">
                                                    Upload Your Media Kit
                                                    (<small>PDF up to 100MB</small>)
                                                </div>

                                                <div class="modal-body">
                                                    <div id="fine-uploader-s3">
                                                    </div>

                                                    <br>
                                                    <p class="text-right">
                                                        <a data-dismiss="modal" class="btn btn-danger" href="#">Cancel</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" data-backdrop="static" id="bg-upload-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-button" data-dismiss="modal">&times;</div>
                                            <div class="modal-body">
                                                <div class="modal-heading text-center">
                                                    <h3>Upload Cover Photo<br>
                                                        <small>PNG or JPG up to 10MB.<br />Suggested cover image size is 1440px height by 400px width.</small></h3>
                                                </div>

                                                <div class="modal-body">
                                                    <div id="fine-uploader">
                                                    </div>

                                                    <br>
                                                    <p class="text-right">
                                                        <a data-dismiss="modal" class="btn btn-danger" href="#">Cancel</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="content">
                                <div class="row row-same-height">
                                    <div class="col-sm-4 col-md-2 text-center-xs">
                                        <img class="profile-header-avatar img-responsive" style="border: 4px solid #F5F5F6; margin-top: -60px" alt="" src="{{asset('storage/business_images/'.$business->name.'/'.$business->profile_picture.'' )}}" />
                                    </div>

                                    <div class="col-sm-8 col-md-5 text-center-xs">
                                        <p>
                                            <span class="label label-default">BUSINESS</span>
                                        </p>

                                        <br>
                                        <h1 style="margin: 0; font-size:30px">
                                            {{$business->first_name}} {{$business->last_name}}
                                        </h1>
                                        <br>

                                        <p class="lead" style="margin-bottom: 10px;">
                                            {{--                                            <i class="edit-avatar-hover fa fa-fire"></i> <strong>{{Auth::user()->name}}</strong>--}}
                                            <strong>
                                                -
                                            </strong>

                                            Followers
                                            <span style="color: #E4E4E4;">|</span>
                                            <strong>
                                                -
                                            </strong>

                                            Following
                                        </p>

                                        <span class="category-ribbon">
                                            <p class="edit-avatar-hover"><i class="edit-avatar-hover fa fa-heart-o"></i> {{$business->category->name}}</p>
                                        </span>
                                        <div class="request-more-information">
                                            <a style="background: #F8C760" href="#" data-toggle="modal" data-target="#CollaborationModal" class="request-information-btn"> Collaborate </a>
                                        </div>
                                        <!---------------------- Modal------------------->
                                        <div class="modal fade" id="CollaborationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background: #81acdb">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Create a new Collaboration </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @livewire('request-collaborations', ['business' => $business], key($business->id))
                                                    </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-sm-5 text-center-xs">
                                        <div class="row">
                                            <div class="col-sm-offset-1 col-sm-11">
                                                <div class="visible-xs visible-sm">
                                                    <br>
                                                </div>

                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-instagram"></i>  Instagram:
                                                    <a href="/influencers/6211589751d0aa56f86fa18e/edit#edit_social_profiles" class="edit-avatar-hover">
                                                        &nbsp;
                                                    </a>
                                                </h4>

                                                <ul class="list-unstyled networks">
                                                    <li class="network" id="influence-profile-link" style="margin-left: 20px;">

                                                        <a target="blank" href="https://www.instagram.com/{{$business->instagram_username}}" class="edit-avatar-hover">{{$business->instagram_username}}</a>
                                                    </li>
                                                </ul>

                                                <br>

                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-book"></i>  Headline:
                                                </h4>

                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{$business->headline}}
                                                </h5>
                                                <br>
                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-globe"></i> Country:</h4>
                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{ $business->country->name }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container" style="margin-top: 50px; margin-bottom: 50px;">





                    {{----------------------CHANGE AVATAR AND CATEGORIES ------}}
                    <div class="row">
                        <div class="col-md-3">
                            <article id="edit_avatar" class="white-content-block">
                                <h4 class="panel-title"> <i class="fa fa-link"></i> Social Links</h4>
                                <div class="panel-body">
                                    <h4 class="" name="account[bio]" id="account_bio" >
                                        <ul>
                                            <li class="social-links-list"><i class="fa fa-facebook social-links-icon"></i><a href="#" class="social-links-attribute"> My facebook</a></li>
                                            <li class="social-links-list"><i class="fa fa-twitter social-links-icon"></i><a href="#" class="social-links-attribute">My twitter</a></li>
                                            <li class="social-links-list"><i class="fa fa-snapchat social-links-icon"></i><a href="#" class="social-links-attribute">My Snapchat</a></li>
                                        </ul>
                                    </h4>
                                    <br>
                                </div>
                            </article>

                            {{--------------------Suggestions -----------------}}
                            <article id="edit_avatar" class="white-content-block">
                                <h4 class="panel-title"> <i class="fa fa-address-card-o"></i>  Suggestions</h4>
                                <div class="panel-body">
                                    <h4 class="" name="account[bio]" id="account_bio" >
                                        <ul>

                                            {{--                                        <li class="social-links-list">--}}
                                            {{--                                            <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">--}}
                                            {{--                                            <div class="sgt-text">--}}
                                            {{--                                                <h4>Salwa Ghaddar</h4>--}}
                                            {{--                                                <span>Graphic Designer</span>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <span><i class="fa fa-eye" style="float: right;"></i></span>--}}
                                            {{--                                        </li>--}}
                                            {{--                                        <br><br>--}}
                                            {{--                                        <hr>--}}
                                            {{--                                        <li class="social-links-list">--}}
                                            {{--                                            <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">--}}
                                            {{--                                            <div class="sgt-text">--}}
                                            {{--                                                <h4>Salwa Ghaddar</h4>--}}
                                            {{--                                                <span>Graphic Designer</span>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <span><i class="fa fa-eye" style="float: right;"></i></span>--}}
                                            {{--                                        </li>--}}
                                            {{--                                        <br><br>--}}
                                            {{--                                        <hr>--}}
                                            {{--                                        <input type="hidden" name="id" value="{{Auth::user()->id}}" />--}}
{{--                                            @foreach($suggestions as $suggestion)--}}
{{--                                                @if($suggestion->id != $influencers->id)--}}
{{--                                                    <li class="social-links-list">--}}
{{--                                                        <img width="35" height="35" style="border-radius: 100px" src="{{asset('storage/influencer_images/'.$suggestion->name.'/'.$suggestion->profile_picture.'' )}}" alt="">--}}
{{--                                                        <div class="sgt-text">--}}
{{--                                                            <h4>{{$suggestion->name}}</h4>--}}
{{--                                                            <span>{{$suggestion->category->name}}</span>--}}
{{--                                                        </div>--}}
{{--                                                        <span>--}}
{{--                                                       <a href="http://localhost:8000/en/influencer/{{$suggestion->name}}"> <i class="fa fa-eye" style="float: right;"></i></a>--}}
{{--                                                    </span>--}}
{{--                                                    </li>--}}
{{--                                                    <br><br>--}}
{{--                                                    <hr>--}}
{{--                                                @endif--}}

{{--                                            @endforeach--}}

                                        </ul>
                                    </h4>
                                    <br>
                                </div>
                            </article>
                        </div>
                        {{-- ----------------- CollaborationsController --------------------------}}
                        <div class="col-md-9">
                            <article id="edit_categories" class="white-content-block">
                                <h4 class="panel-title"><i class="fa fa-handshake-o"></i> Collaborations <span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                                @foreach($collaborations as $collaboration)
                                    <div class="panel-body" style="min-height: 300px;">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img style="margin-top: -2px" width="40" height="40" src="{{asset('storage/influencer_images/'.$collaboration->influencer->name.'/'.$collaboration->influencer->profile_picture.'' )}}" alt="">
                                                <img style="position: relative;bottom: 3px;right: 23px;" width="40" height="40" src="{{asset('storage/business_images/'.$collaboration->business->name.'/'.$collaboration->business->profile_picture.'' )}}" alt="">
                                                <div class="usy-name">
                                                    <h3>{{$collaboration->business->name}}</h3>
                                                    <span><i class="fa fa-clock"></i> {{$collaboration->created_at->diffForHumans()}}</span>
                                                </div>
                                                <div class="usy-name">
                                                    <h3 style="font-weight: 400; font-size: 16px">collaborated with</h3>
                                                </div>
                                                <div class="usy-name">
                                                    <div class="usy-name">
                                                        <a href="{{route('singleInfluencerInBusiness',$collaboration->influencer->name)}}"><h3 class="with-collaborator-name">{{$collaboration->influencer->name}}</h3></a>
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
                                            <div class=" w-50 ml-0 mr-0 mx-auto" >
                                                <img style=" max-width:500px; max-height:450px" src="{{asset('storage/collaboration_images/'.$collaboration->influencer->name.'/'.$collaboration->collaboration_image.'' )}}">
                                            </div>
                                        </div>
                                        <div class="collaboration-description">
                                            <p>{{$collaboration->description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                        </div> </div>

                </div>
            </section>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    @livewireScripts
@endsection
