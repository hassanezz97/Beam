<!DOCTYPE html>
<html lang="en">
@section('title')
    Beam
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" media="all" href="{{ URL::asset('css/influencers/inf-profile/profile.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ URL::asset('css/influencers/inf-profile/profile2.css') }}" />

    @include('layouts.Influencers.head-influencers')
</head>

<body class=" inf_action_influencers-edit ">


@include('layouts.Influencers.main-header-inf')


<!--=================================
 Main content -->

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
                                        <img class="profile-header-avatar img-responsive" style="border: 4px solid #F5F5F6; margin-top: -60px" alt="" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                                        </div>

                                    <div class="col-sm-8 col-md-5 text-center-xs">
                                        <p>
                                            <span class="label label-default">INFLUENCER</span>
                                        </p>

                                        <br>
                                        <h1 style="margin: 0; font-size:30px">
                                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
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
                                        <p>
                                            <span class="category-ribbon">
                                              <p class="edit-avatar-hover"><i class="edit-avatar-hover fa fa-heart-o"></i> {{ Auth::user()->category->name }}</p>
                                            </span>
                                        </p>
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

                                                        <a target="blank" href="https://www.instagram.com/{{Auth::user()->instagram_username}}" class="edit-avatar-hover">{{Auth::user()->instagram_username}}</a>
                                                    </li>
                                                </ul>

                                                <br>

                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-book"></i>  Headline:
                                                </h4>

                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{Auth::user()->headline}}
                                                </h5>
                                                <br>
                                                <h4 style="margin-bottom: 5px;">
                                                    <i class="edit-avatar-hover fa fa-globe"></i> Country:</h4>
                                                <h5 style="color: #F5937A; margin-left: 20px;">
                                                    {{ Auth::user()->country->name }}
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
                                        <li class="social-links-list">
                                                    <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">
                                                    <div class="sgt-text">
                                                        <h4>Salwa Ghaddar</h4>
                                                        <span>Graphic Designer</span>
                                                    </div>
                                                    <span><i class="fa fa-eye" style="float: right;"></i></span>
                                        </li>
                                        <br><br>
                                        <hr>
                                        <li class="social-links-list">
                                            <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Salwa Ghaddar</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="fa fa-eye" style="float: right;"></i></span>
                                        </li>
                                        <br><br>
                                        <hr>
                                        <li class="social-links-list">
                                            <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">
                                            <div class="sgt-text">
                                                <h4>Salwa Ghaddar</h4>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <span><i class="fa fa-eye" style="float: right;"></i></span>
                                        </li>
                                        <br><br>
                                        <hr>

                                    </ul>
                                </h4>
                                <br>
                            </div>
                        </article>
                    </div>
                        {{-- ----------------- Collaborations --------------------------}}
                    <div class="col-md-9">
                        <article id="edit_categories" class="white-content-block">
                            <h4 class="panel-title"><i class="fa fa-handshake-o"></i> Collaborations <span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                            <div class="panel-body" style="min-height: 300px;">

                            </div>
                        </article>
                    </div> </div>

                </div>
            </section>


        <!--=================================
            End of Main content -->


<!--=================================
footer -->

@include('layouts.Influencers.footer-influencers')

<!--=================================
end of footer -->

@include('layouts.Influencers.footer-scripts-influencers')

</body>

</html>
