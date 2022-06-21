@extends('layouts.businesses.master-blade-business')

@section('css')

@section('title')
    Beam
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
                                        <img class="profile-header-avatar img-responsive" style="border: 4px solid #F5F5F6; margin-top: -60px" alt="" src="{{asset('storage/influencer_images/'.$influencer->name.'/'.$influencer->profile_picture.'' )}}" />
                                    </div>

                                    <div class="col-sm-8 col-md-5 text-center-xs">
                                        <p>
                                            <span class="label label-default">INFLUENCER</span>
                                        </p>

                                        <br>
                                        <h1 style="margin: 0; font-size:30px">
                                            {{$influencer->full_name}}

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
                                            <p class="edit-avatar-hover">
                                                <i class="edit-avatar-hover fa fa-heart-o"></i> {{$influencer->category->name}}
                                            </p>
                                        </span>

                                            @livewire('influencer-ratings', ['influencer' => $influencer], key($influencer->id))


                                        <div class="request-more-information">
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="request-information-btn"> Request More Information </a>
                                        </div>
                                    </div>
                                    <!------------------------- Confirmation Modal ------------------------>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background: #81acdb; color: white">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to request more information from {{$influencer->full_name}} ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                    <form action="{{route('sendRequest')}}" method="get">

                                                        <div class="col-sm-5" style="margin-top: 20px">
                                                            <h1 style="display: inline-flex; margin-bottom: 5px;">Choose Platform:</h1>
                                                            <div>
                                                            <select name="platform" value="" class="form-control form-select" >
                                                                <option value="instagram" name="instagram">Instagram</option>
                                                                <option value="facebook" name="facebook">Facebook</option>
                                                                <option value="tiktok" name="tiktok">Tiktok</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="col-sm-4">
                                                            <h1 style="display: inline-flex">Story price</h1>
                                                            <input style="display: inline-block" type="checkbox" value="1" name="story" value="1" {{ old('story') ? 'checked="checked"' : ''}} />&nbsp;
                                                        </div><br>
                                                        <div class="col-sm-4 ">
                                                            <h1 style="display: inline-flex">Post price</h1>
                                                            <input style="display: inline-block" type="checkbox" class="switch-input"  name="post" value="1" {{ old('post') ? 'checked="checked"' : ''}} />&nbsp;
                                                        </div><br>
                                                        <div class="col-sm-8 ">
                                                            <h1 style="display: inline-flex; margin-bottom: 5px;">Any other Questions:</h1>
                                                            <textarea style="height: 60px !important;" value="other_questions" name="other_questions" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div><br>

                                                        <input value="{{Auth::user()->id}}" name="business_id" hidden>
                                                        <input value="{{$influencer->id}}" name="influencer_id" hidden>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary request-confirmation">Request</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
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

                                                        <a target="blank" href="https://www.instagram.com/{{$influencer->instagram_username}}" class="edit-avatar-hover">{{$influencer->instagram_username}}</a>
                                                    </li>
                                                </ul>

                                                <br>

                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-book"></i>  Headline:
                                                </h4>

                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{$influencer->headline}}
                                                </h5>
                                                <br>
                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-globe"></i> Country:</h4>
                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{ $influencer->country->name }}
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
                            <div class="suggestions full-width" style="border-radius: 5px">
                                <div class="sd-title">
                                    <h5>Suggestions</h5>

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

                        {{-- ----------------- CollaborationsController --------------------------}}
                        <div class="col-md-9">
                            <article id="edit_categories" class="white-content-block">
                                <h4 class="panel-title"><i class="fa fa-handshake-o"></i> Collaborations <span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                                    @if($collaborations->count() >0)
                                    @foreach($collaborations as $collaboration)
                                        <div class="panel-body" style="min-height: 300px;" >
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img style="margin-top: -2px" width="40" height="40" src="{{asset('storage/business_images/'.$collaboration->business->name.'/'.$collaboration->business->profile_picture.'' )}}" alt="">
                                                    <img style="position: relative;bottom: 3px;right: 23px;" width="40" height="40" src="{{asset('storage/influencer_images/'.$collaboration->influencer->name.'/'.$collaboration->influencer->profile_picture.'' )}}" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{$collaboration->influencer->name}}</h3>
                                                        <span><i class="fa fa-clock"></i> {{$collaboration->created_at->diffForHumans()}}</span>
                                                    </div>
                                                    <div class="usy-name">
                                                        <h3 style="font-weight: 400; font-size: 16px">collaborated with</h3>
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
                                                <div class=" w-50 ml-0 mr-0 mx-auto" >
                                                    <img style=" max-width:500px; max-height:450px" src="{{asset('storage/collaboration_images/'.$collaboration->influencer->name.'/'.$collaboration->collaboration_image.'' )}}">
                                                </div>
                                            </div>
                                            <div class="collaboration-description">
                                                <p>{{$collaboration->description}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    @else
                                    <div class="panel-body" style="min-height: 300px;" >
                                        <p style="text-align: center">No collaborations done yet</p>
                                    </div>

                                    @endif


                            </article>
                        </div> </div>

                </div>
            </section>



@endsection

@section('js')
@livewireScripts

@endsection
