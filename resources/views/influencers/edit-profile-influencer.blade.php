@extends('layouts.Influencers.master-blade-influencer')

@section('css')

@section('title')
    Beam
@stop
<link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/inf-profile/profile.css') }}" />
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
                                <p class="text-right" style="position: absolute; top: 20px; right: 20px">
                                    <a class="btn btn-default" data-toggle="modal" href="#bg-upload-modal">
                                        <span class="fa fa-edit"></span>
                                    </a>  </p>
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
                                        <img class="profile-header-avatar img-responsive" style="border: 4px solid #F5F5F6; margin-top: -60px" alt="" src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}"  />
                                        <a class="edit-avatar-hover text-center" href="/influencers/6211589751d0aa56f86fa18e/edit#edit_avatar">
                                            Edit avatar
                                        </a></div>

                                    <div class="col-sm-8 col-md-5 text-center-xs">
                                        <p>
                                            <span class="label label-default">INFLUENCER</span>
                                        </p>

                                        <br>
                                        <h1 style="margin: 0; font-size:30px">
                                            {{ Auth::user()->full_name }}
                                        </h1>
                                        {{--                                    <p class="help-block influencer-headline no-wrap-ellipsis ">--}}
                                        {{--                                        <a class="edit-avatar-hover" href="/influencers/6211589751d0aa56f86fa18e/edit#edit_about">--}}
                                        {{--                                            {{ Auth::user()->headline }}--}}
                                        {{--                                            <span class="fa fa-edit"></span>--}}
                                        {{--                                        </a>  </p>--}}
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
                                          <i class="glyphicon glyphicon-bookmark"></i>
                                        <p class="edit-avatar-hover"  ><i class="edit-avatar-hover fa fa-heart-o"></i> {{Auth::user()->category->name}}
                                            <a  href="#category" class="edit-avatar-hover">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                        </p>
                                        </span>

                                    </div>


                                    <div class="col-sm-5">
                                        <div class="row">
                                            <div class="col-sm-offset-1 col-sm-11">
                                                <div class="visible-xs visible-sm">
                                                    <hr>
                                                </div>

                                                <h4>
                                                    <i class="edit-avatar-hover fa fa-instagram"></i> Where to find me
                                                    <a href="#instagram" class="edit-avatar-hover">
                                                        &nbsp; <span class="fa fa-edit"></span>
                                                    </a>
                                                </h4>

                                                <ul class="list-unstyled networks">
                                                    <li class="network" id="influence-profile-link" style="margin-left: 20px;">
                                                        <a target="blank" href="https://www.instagram.com/{{Auth::user()->instagram_username}}" class="edit-avatar-hover">{{Auth::user()->instagram_username}}</a>
                                                    </li>
                                                </ul>
                                                <br>

                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-book"></i>  Headline:
                                                </h4>

                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{Auth::user()->headline}}
                                                    <a  href="#headline" class="edit-avatar-hover">
                                                        <span class="fa fa-edit"></span>
                                                    </a>
                                                </h5>
                                                <br>
                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-globe"></i> Country:</h4>
                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{ Auth::user()->country->name }}
                                                    <a  href="#Country" class="edit-avatar-hover">
                                                        <span class="fa fa-edit"></span>
                                                    </a>
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
                    <div class="row">
                        <div class="col-xs-12">

                            <article id="edit_about" class="white-content-block">
                                <h4 class="panel-title">Basics &nbsp;&nbsp;<span class="fa fa-exclamation-triangle" style="color: orangered" aria-hidden="true"></span></h4>
                                <br><div class="panel-body">
                                    <p> Tell the world about yourself here. This is a place to share a lot more information than you can on your Instagram profile.</p>
                                    <br>
                                    <form class="edit_account" action="{{route('edit-profile.update','update')}}" method="post">
                                        {{method_field('patch')}}
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}" />
                                        {{--                                        <input type="hidden" name="authenticity_token" value="" />--}}
                                        {{--                                        <input type="hidden" name="partial" id="partial" value="edit_about" />--}}

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="account_full_name">
                                                    Your full name
                                                </label>
                                                <input  class="form-control" type="text" value="{{Auth::user()->full_name}}" name="full_name" id="full_name" />

                                                <br>
                                                <label>Gender <span class="fa fa-info-circle has-tooltip hidden" data-trigger="hover" data-toggle="tooltip" title=""></span></label>
                                                <select required="required" class="form-control" name="gender" id="account_gender">
                                                    {{--                                                    <option value="">{{Auth::user()->gender->name}}</option>--}}
                                                    @foreach($Genders as $Gender)
                                                        <option value="{{$Gender->id}}">{{$Gender->name}}</option>
                                                    @endforeach
                                                </select>

                                                <br>

                                                <p class="form-inline">
                                                    <label>Date of Birth</label><br>
                                                <div class="input-group">
                                                    <input type="date" id="multiStepsExDate" name="date_of_birth" class="form-control multi-steps-exp-date" value="{{Auth::user()->date_of_birth}}"  />
                                                    <div class="input-group-addon">
                                                    </div>
                                                </div><br>
                                                </p>
                                                <br>

                                                <label for="account_location_id">Country</label>
                                                <select class="new-location-picker form-control" name="country" id="Country">
                                                    <option value="{{Auth::user()->country->id}}">{{Auth::user()->country->name}}</option>
                                                    @foreach($Countries as $Country)
                                                        <option value="{{$Country->id}}">{{$Country->name}}</option>
                                                    @endforeach
                                                </select>
                                                <br>
                                                <label for="account_location_id">City</label>
                                                <input  class="form-control" type="text" value="{{Auth::user()->city}}" name="city" id="account_full_name" />
                                                <br>




                                                {{--                                                <label for="account_website">--}}
                                                {{--                                                    Your primary website--}}
                                                {{--                                                </label>--}}
                                                {{--                                                <div class="input-group">--}}
                                                {{--                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>--}}
                                                {{--                                                    <input placeholder="e.g. https://beam.com" class="form-control" type="text" value="" name="account[website]" id="account_website" />--}}
                                                {{--                                                </div>--}}

                                                {{--                                                <br>--}}



                                            </div>
                                            <div class="col-sm-6">

                                                <label  for="account_headline">Headline</label>
                                                <input id="headline" class="form-control" type="text" value="{{Auth::user()->headline}}" name="headline" id="account_full_name" />
                                                <span class="help-block">
                                                  A short one-liner that describes you. This will sometimes be
                                                  displayed next to your username.
                                                  </span>
                                                <br>
                                                <label  for="account_headline">Instagram Username</label>
                                                <input id="instagram" class="form-control" type="text" value="{{Auth::user()->instagram_username}}" name="instagram_username" id="account_full_name" />
                                                <span class="help-block">

                                                  </span>
                                                <br>
                                                <div class="col-md-8">
                                                    <label class="form-label" for="multiStepsMobile">Mobile</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text ">LB (+961)</span>
                                                        <input id="headline" style="display: block!important;
                                                        height: 34px !important;
                                                        padding: 6px 12px !important;
                                                        font-size: 14px !important;
                                                        line-height: 1.428571429 !important;
                                                        color: #555555 !important;
                                                        background-color: #fff !important;
                                                        background-image: none !important;
                                                        border: 1px solid #ccc !important;
                                                        border-radius: 4px !important;
                                                        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
                                                        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
                                                        -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s !important;
                                                        -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s !important;
                                                        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s !important;" type="text" value="{{Auth::user()->mobile}}" name="mobile" id="account_full_name" />
                                                    </div>

                                                    {{--                                                <label for="account_bio">Bio</label>--}}
                                                    {{--                                                <small class="text-muted pull-right">Max 5000 characters.</small>--}}
                                                    {{--                                                <br>--}}
                                                    {{--                                                <textarea class="form-control" placeholder="Tell the world about yourself here. This is a place to share a lot more information." style="min-height: 200px" name="account[bio]" id="account_bio"></textarea>--}}
                                                    {{--                                                <br>--}}

                                                    <br>
                                                    {{--                                                <label>Posts Starting at $</label><br>--}}
                                                    {{--                                                <p>What is your minimum price point for posting on behalf of a business?</p>--}}
                                                    {{--                                                <div class="input-group">--}}
                                                    {{--                                                    <input placeholder="e.g. $500" step="1" max="50000" class="form-control" type="number" name="account[minimum_rate]" id="account_minimum_rate" />--}}
                                                    {{--                                                </div>--}}


                                                    <br>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p class="text-right">
                                                        <button type="submit"  class="btn btn-xs-block our-button" style="background-color: #F5937A; color: white" >Save Details</button>
                                                    </p>
                                                </div>
                                            </div>

                                    </form>  </div>
                            </article>

                        </div></div>




                    {{----------------------CHANGE AVATAR AND CATEGORIES ------}}
                    <div class="row">
                        <div class="col-md-6">
                            <article id="edit_avatar" class="white-content-block">
                                <h4 class="panel-title">Avatar</h4>
                                <div class="panel-body">
                                    <p class="text-center" style="text-align: center !important;">
                                        <img class="img-circle" style="max-width: 50%; float: none" src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}" />
                                    </p>
                                    <form id="avatar-form" class="text-center" enctype="multipart/form-data" action="/influencers/avatar" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="V7pV2wjbPLRLIm6VzEdsjDxWmjHs6EG0E1jEbc1n+Hf/ZFWMeMlc7ktaQpr94jUha7gPT5ERFma8DRJ8IMexsw==" />
                                        <input hidden type="file" name="avatar" id="avatar" class="inputfile" onchange="$(&quot;#avatar-form&quot;)[0].submit()" />
                                        <label class="btn btn-xs-block our-button" for="avatar">Change Avatar</label>
                                    </form>  </div>
                            </article>

                        </div>
                        {{-- ----------------- Categories --------------------------}}
                        <div class="col-md-6">
                            <article id="edit_categories" class="white-content-block">
                                <h4 class="panel-title">Categories &nbsp;&nbsp;<span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                                <div class="panel-body">
                                    <p> Add category you are influential in. </p>

                                    <form data-method="post" data-remote="true" action="/influencers/6211589751d0aa56f86fa18e/categories" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="iLxsGxCJUg7mzAwBUOcGpPhv+KTBkdBxIpMGFWYPyDTFx1VoAUqTAu74a5ZrS4qyt/c27HzA2bHGm9zw2oVS7Q==" />
                                        <input type="hidden" name="partial" id="partial" value="edit_categories" />
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p>
                                                    <select name="category_id" id="category_id" class="category-picker-allow-new form-control">[]</select>
                                                </p>
                                            </div>

                                            <div class="col-sm-4">
                                                <p>
                                                    <input type="submit" name="commit" value="Add Category" class="btn btn-xs-block our-button" data-disable-with="Add Category" />
                                                </p>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </article>
                        </div> </div>


                    <div id="edit_social_profiles" >
                        <article id="edit_instagram" class="white-content-block">
                            <h4 class="panel-title">
                                Your Instagram Account
                            </h4>

                            <div class="panel-body">
                                <p>
                                    Connecting your Instagram account is an important part of your influence profile.
                                    Once connected, you'll be able to add all your collaborations to your profile.
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>
                                            <span class="fa fa-instagram"></span>
                                            Instagram Basic
                                        </label>
                                        <br>


                                        <a class="btn btn-default" href="/users/basic_display_upgrade/authorize?after_upgrade_path=%2Finfluencers%2F6211589751d0aa56f86fa18e%2Fedit%23edit_instagram">Connect Instagram</a>

                                        <span class="help-block">
                                              Connecting with the basic API enables you
                                              to add Branded Content from your Instagram
                                              account to your influence profile.
                                            </span>


                                    </div>


                                </div>
                            </div>
                        </article>

                        <article class="white-content-block" id="connect-social-profiles">

                            <h4 class="panel-title">
                                Social Profiles &nbsp;&nbsp;<span class="glyphicon glyphicon-exclamation-sign color-red" aria-hidden="true"></span>

                            </h4>

                            <div class="panel-body">
                                <form class="edit_account" action="{{route('edit-profile.edit','edit')}}" method="get">
                                    <h5>Show off your reach by connecting your social networks</h5>
                                    <br>
                                    <div class="row flex-display flex-wrap flex-align-top flex-children-grow">
                                        <div class="col-md-4">
                                            <article class="white-content-block" id="connect-tiktok">
                                                <h4 class="panel-title">
                                                    <label>
                                                        <img height="15" src="{{ URL::asset('assets/images/icons/tiktok-4129d3ca2acd8a0dc7c19d3ecded2f55495af44fecb0eb6fff9cf65da924d96f.svg') }}" />&nbsp;TikTok
                                                    </label>
                                                </h4>
                                                <div class="panel-body">
                                                    @if($socialprofile)

                                                        <input placeholder="username" value="{{$socialprofile->tiktok}}"  class="form-control" type="text" name="tiktok" />
                                                    @else
                                                        <input placeholder="username" class="form-control" type="text" name="tiktok" />
                                                    @endif
                                                    </div>
                                            </article>
                                        </div>


                                        <div class="col-md-4">
                                            <article class="white-content-block" id="connect-twitter">
                                                <h4 class="panel-title">
                                                    <label>
                                                        <span class="fa fa-twitter"></span>
                                                        Twitter
                                                    </label>
                                                </h4>
                                                <div class="panel-body">
                                                    @if($socialprofile)
                                                        <input placeholder="username"  value="{{$socialprofile->twitter}}"  class="form-control" type="text" name="twitter" />

                                                    @else
                                                        <input placeholder="username"  class="form-control" type="text" name="twitter" />

                                                    @endif
                                                    </div>
                                            </article>
                                        </div>
                                        <div class="col-md-4">
                                            <article class="white-content-block" id="connect-facebook">
                                                <h4 class="panel-title">
                                                    <label>
                                                        <span class="fa fa-facebook"></span>
                                                        Facebook
                                                    </label>
                                                </h4>
                                                <div class="panel-body">
                                                    @if($socialprofile)
                                                        <input placeholder="username"  value="{{$socialprofile->facebook}}"class="form-control" type="text" name="facebook" />

                                                    @else
                                                        <input placeholder="username"  class="form-control" type="text" name="facebook" />

                                                    @endif
                                                    </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br>
                                            <p class="text-right">
                                                <button type="submit" class="btn btn-xs-block our-button" > Save </button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>


                </div>
            </section>
        </div>
    </div>
   <!--=================================
                End of Main content -->

@endsection

@section('js')

@endsection
