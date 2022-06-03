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
    @include('layouts.Influencers.head-influencers')
</head>

<body>


@include('layouts.Influencers.main-header-inf')


<!--=================================
 Main content -->

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

                                            <img src="{{ asset('assets/images/icons/s2.png') }}" alt="tag">
                                        </div>
                                    </div>
                                    <div class="user-specs">
                                        <h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
                                        <span>Web Developer</span>

                                    </div>
                                </div>
                                <ul class="user-fw-status">
                                    <li>
                                        <h4>Following</h4>
                                        <span>34</span>
                                    </li>
                                    <li>
                                        <h4>Followers</h4>
                                        <span>155</span>
                                    </li>
                                    <li class="view-profile">
                                        <a href="my-profile-feed.html" title="">View Profile</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="suggestions full-width">
                                <div class="sd-title">
                                    <h3>Suggestions</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div>
                                <div class="suggestions-list">
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s1.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Salwa Ghaddar</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s2.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Ahmad Fahes</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s3.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Abbas Gharib</h4>
                                            <span>Wordpress Developer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s4.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Ali Khalifeh</h4>
                                            <span>C & C++ Developer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s5.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Ali Ezzeddine</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="{{ URL::asset('assets/images/icons/s6.png') }}" alt="">
                                        <div class="sgt-text">
                                            <h4>Abbas jaafar</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="view-more" >
                                        <a href="#" title="" >View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="user-picy">
                                    <img src="https://img.icons8.com/external-xnimrodx-lineal-gradient-xnimrodx/64/4a90e2/external-eye-notification-alert-xnimrodx-lineal-gradient-xnimrodx.png"/>
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
                                        <br>
                                        <br><br><br><br> <br><br><br><br>
                                        <p style="text-align: center">Still no notifications to show</p>
                                         <br><br><br><br><br><br><br><br><br><br>

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

                            </main>

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
