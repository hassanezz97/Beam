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
                                    <img class="profile-header-avatar img-responsive" style="border: 4px solid #F5F5F6; margin-top: -60px" alt="" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                                    <a class="edit-avatar-hover text-center" href="/influencers/6211589751d0aa56f86fa18e/edit#edit_avatar">
                                        Edit avatar
                                    </a></div>

                                <div class="col-sm-8 col-md-5 text-center-xs">
                                    <p>
                                        <span class="label label-default">INFLUENCER</span>
                                    </p>

                                    <h1 style="margin: 0; font-size:30px">
                                        Hassan Ezzeddine
                                    </h1>
                                    <p class="help-block influencer-headline no-wrap-ellipsis ">
                                        <a class="edit-avatar-hover" href="/influencers/6211589751d0aa56f86fa18e/edit#edit_about">
                                            Add a headline
                                            <span class="fa fa-edit"></span>
                                        </a>  </p>

                                    <p class="lead" style="margin-bottom: 10px;">
                                        <i class="edit-avatar-hover fa fa-fire"></i> <strong>hassanezz</strong>
                                        <span style="color: #E4E4E4;">|</span>
                                        <strong>
                                            0
                                        </strong>

                                        Reach
                                    </p>
                                    <p>
                                        <span class="category-ribbon">
                                          <i class="glyphicon glyphicon-bookmark"></i>
                                          <a href="/influencer_searches?influencer_search%5Bcategory_ids%5D%5B%5D=5959ca2fa7b21a3d35002263" class="edit-avatar-hover">Art &amp; Entertainment</a>
                                        </span>
                                        <a href="/influencers/6211589751d0aa56f86fa18e/edit#edit_categories" class="edit-avatar-hover">
                                            <span class="fa fa-edit"></span>
                                        </a>  </p>
                                </div>


                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-11">
                                            <div class="visible-xs visible-sm">
                                                <hr>
                                            </div>

                                            <h4>
                                                Where to find me
                                                <a href="/influencers/6211589751d0aa56f86fa18e/edit#edit_social_profiles" class="edit-avatar-hover">
                                                    &nbsp; <span class="fa fa-edit"></span>
                                                </a>      </h4>

                                            <ul class="list-unstyled networks">
                                                <li class="network" id="influence-profile-link">
                                                    <i class="edit-avatar-hover fa fa-fire"></i>
                                                    <a target="blank" href="/hassanezz" class="edit-avatar-hover">hassanezz</a>
                                                </li>

                                            </ul>
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
                                    <form class="edit_account" id="edit_account_6211589751d0aa56f86fa18e" data-remote="true" action="/influencers/6211589751d0aa56f86fa18e" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="uBbnxDxoabBvk4UWdhcsmIPnZiQjQ3EO2CnuKB1fJAkf75ceSAKQqO4JJuVxaUxRzpsFEXZZun+QZ6QtNv7qoA==" />
                                        <input type="hidden" name="partial" id="partial" value="edit_about" />

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="account_full_name">
                                                    Your full name
                                                </label>
                                                <input class="form-control" type="text" value="Hassan Ezzeddine" name="account[full_name]" id="account_full_name" />

                                                <br>

                                                <label id="headline" for="account_headline">Headline</label>
                                                <div class="ReactComponent form-control" data-react-component="LimitedInput" data-react-props="{&quot;placeholder&quot;:&quot;&quot;,&quot;value&quot;:&quot;&quot;,&quot;name&quot;:&quot;account[headline]&quot;,&quot;limit&quot;:40}"></div>
                                                <span class="help-block">
                                                  A short one-liner that describes you. This will sometimes be
                                                  displayed next to your username.
                                                  </span>
                                                <br>

                                                <label for="account_location_id">Location</label>
                                                <select class="new-location-picker form-control" name="account[location_id]" id="account_location_id"><option selected="selected" value="country-LB">Lebanon</option></select>

                                                <br>
                                                <label for="account_website">
                                                    Your primary website
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                                                    <input placeholder="e.g. https://beam.com" class="form-control" type="text" value="" name="account[website]" id="account_website" />
                                                </div>

                                                <br>
                                                <label>Gender <span class="fa fa-info-circle has-tooltip hidden" data-trigger="hover" data-toggle="tooltip" title=""></span></label>
                                                <select required="required" class="form-control" name="account[gender]" id="account_gender"><option value="">Leave blank</option>
                                                    <option selected="selected" value="male">Male</option>
                                                    <option value="female">Female</option></select>

                                                <br>
                                                <p class="form-inline">
                                                    <label>Date of Birth</label><br>
                                                <div class="input-group">
                                                    <input class="form-control date-picker" placeholder="YYYY-mm-dd" type="text" name="account[birthday]" id="account_birthday" />
                                                    <div class="input-group-addon">

                                                    </div>
                                                </div><br>
                                                <input name="account[show_age]" type="hidden" value="0" /><input type="checkbox" value="1" name="account[show_age]" id="account_show_age" /> <label for="account_show_age">Show my age on my public profile</label>
                                                </p>
                                                <br>

                                            </div>
                                            <div class="col-sm-6">
                                                <label for="account_bio">Bio</label>
                                                <small class="text-muted pull-right">Max 5000 characters.</small>
                                                <br>
                                                <textarea class="form-control" placeholder="Tell the world about yourself here. This is a place to share a lot more information." style="min-height: 200px" name="account[bio]" id="account_bio"></textarea>
                                                <br>

                                                <br>
                                                <label>Posts Starting at $</label><br>
                                                <p>What is your minimum price point for posting on behalf of a business?</p>
                                                <div class="input-group">
                                                    <input placeholder="e.g. $500" step="1" max="50000" class="form-control" type="number" name="account[minimum_rate]" id="account_minimum_rate" />
                                                </div>

                                                <br>
                                                </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p class="text-right">
                                                    <input type="submit" name="commit" value="Save Details" data-disable-with="One Moment..." class="btn btn-xs-block our-button" style="background-color: #F5937A; color: white" />
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
                                <img class="img-circle" style="max-width: 100%" src="https://marmont-web-production.s3.amazonaws.com/external/influence_avatar.png" />
                            </p>
                            <form id="avatar-form" class="text-center" enctype="multipart/form-data" action="/influencers/avatar" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="V7pV2wjbPLRLIm6VzEdsjDxWmjHs6EG0E1jEbc1n+Hf/ZFWMeMlc7ktaQpr94jUha7gPT5ERFma8DRJ8IMexsw==" />
                                <input type="file" name="avatar" id="avatar" class="inputfile" onchange="$(&quot;#avatar-form&quot;)[0].submit()" />
                                <label class="btn btn-xs-block our-button" for="avatar">Change Avatar</label>
                            </form>  </div>
                    </article>

                </div>
                    {{-- ----------------- Categories --------------------------}}
                <div class="col-md-6">
                    <article id="edit_categories" class="white-content-block">
                        <h4 class="panel-title">Categories &nbsp;&nbsp;<span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                        <div class="panel-body">
                            <p> Add up to 5 categories you are influential in. </p>

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

                                    <div class="col-sm-6">
                                        <label>
                                            <span class="fa fa-chart-bar"></span>
                                            Instagram Stats
                                        </label>
                                        <br>

                                        <button class="btn btn-default btn-disabled" disabled>Connect Instagram First to Enable Stats</button>
                                        <span class="help-block">
                                            Connecting with the stats API keeps your
                                            engagement rate up to date
                                              and enables you to apply to campaigns.
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
                            <form class="edit_account" id="edit_account_6211589751d0aa56f86fa18e" data-remote="true" action="/influencers/6211589751d0aa56f86fa18e" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="PGvT8/6lm3KT2q8yfxm1qzGrcBMy6c5XvKQzbPuZVwCbkqMpis9iahJADMF4Z9VifNcTJmfzBSb06nlp0DiZqQ==" />
                                <input type="hidden" name="partial" id="partial" value="edit_social_profiles" />

                                <h5>Show off your reach by connecting your social networks</h5>
                                <div class="row flex-display flex-wrap flex-align-top flex-children-grow">

                                    <div class="col-md-4">
                                        <article class="white-content-block" id="connect-youtube">
                                            <h4 class="panel-title">
                                                <label>
                                                    <span class="fa fa-youtube"></span>
                                                    YouTube
                                                </label>
                                            </h4>
                                            <div class="panel-body">
                                                <a class="btn btn-block social-btn" data-method="post" href="/users/auth/youtube">Connect YouTube</a>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="col-md-4">
                                        <article class="white-content-block" id="connect-tiktok">
                                            <h4 class="panel-title">
                                                <label>
                                                    <img height="15" src="{{ URL::asset('assets/images/icons/tiktok-4129d3ca2acd8a0dc7c19d3ecded2f55495af44fecb0eb6fff9cf65da924d96f.svg') }}" />&nbsp;TikTok
                                                </label>
                                            </h4>
                                            <div class="panel-body">
                                                <a class="btn btn-block social-btn" data-method="post" href="/users/auth/tiktok">Connect TikTok</a>
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
                                                <a data-method="post" class="btn btn-block social-btn" href="/users/auth/twitter">Connect Twitter</a>
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
                                                <a class="btn btn-block social-btn" data-method="post" href="/users/auth/facebook">Connect Facebook</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <hr>
                                <h5>Show off other profiles</h5>

                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="white-content-block">
                                            <h4 class="panel-title">
                                                <label for="account_snapchat_handle">
                                                    <span class="fa fa-snapchat-ghost"></span>
                                                    Snapchat Handle
                                                </label>
                                            </h4>
                                            <div class="panel-body">
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input placeholder="e.g. [username]" class="form-control" type="text" name="account[snapchat_handle]" id="account_snapchat_handle" />
                                                </div>
                                            </div>
                                        </article>

                                    </div>

                                    <div class="col-md-4">
                                        <article class="white-content-block">
                                            <h4 class="panel-title">
                                                <label for="account_linkedin_url">
                                                    <span class="fa fa-linkedin"></span>
                                                    LinkedIn URL
                                                </label>
                                            </h4>
                                            <div class="panel-body">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                                                    <input placeholder="e.g. https://linkedin.com/in/[username]" class="form-control" type="text" name="account[linkedin_url]" id="account_linkedin_url" />
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                        <article class="white-content-block">
                                            <h4 class="panel-title">
                                                <label for="account_clubhouse_url">
                                                    <span class="fa fa-hand-paper"></span>
                                                    Clubhouse URL
                                                </label>
                                            </h4>
                                            <div class="panel-body">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                                                    <input placeholder="e.g. https://www.joinclubhouse.com/[username]" class="form-control" type="text" name="account[clubhouse_url]" id="account_clubhouse_url" />
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br>
                                        <p class="text-right">
                                            <input type="submit" name="commit" value="Save" data-disable-with="One Moment..." class="btn btn-xs-block our-button" />
                                        </p>
                                    </div>
                                </div>
                            </form>      </div>
                    </article>
                </div>

                <article id="edit_account_type" class="white-content-block">
                    <h4 class="panel-title">Account Type &nbsp;&nbsp;<span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                    Your account is currently set to <code>Influencer</code>.
                                </p>

                                <p>
                                    <a data-method="put" class="btn btn-xs-block our-button" href="/influencers/6211589751d0aa56f86fa18e?account%5Baccount_type%5D=personal">Switch to Personal</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
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
