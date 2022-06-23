<!--=================================
header start-->

<header>

    <div class="logo">
        <a href="#" title=""><img src="{{ URL::asset('assets/images/logo/logo1.png') }}" width="150" height="40" alt=""></a>
    </div>
    <div class="container">
        <div class="header-data">

{{--            <div class="search-bar">--}}
{{--                <form>--}}
{{--                    <input type="text" name="search" placeholder="Search...">--}}
{{--                    <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--                </form>--}}
{{--            </div>--}}
            <nav>
                <ul>
                    <li>
                        <a href="{{route('Influencer-home')}}" title="">
                            <span><img src="{{ URL::asset('assets/images/icons/icon1.png') }}" alt=""></span>
                            {{trans('mainpage_Influencer.home')}}
                        </a>
                    </li>
                    <li>
                        <a href="{{route('advanced-search.index')}}" title="">
                            <span><img src="https://img.icons8.com/fluency-systems-filled/48/ffffff/advanced-search.png" width="18" height="18"/></span>
                            {{trans('mainpage_Influencer.advanced-search')}}
                        </a>

                    </li>
                    <li>
                        <a href="{{route('Influencer-collaborations')}}" title="">
                            <span><img src="{{ URL::asset('assets/images/icons/icon10.png') }}" width="18" height="14" alt=""></span>
                            {{trans('mainpage_Influencer.collaborations')}}
                        </a>
                    </li>

                    <li>
                        <a href="#" title="">
                            <span><img src="{{ URL::asset('assets/images/icons/icon4.png') }}" alt=""></span>
                            {{trans('mainpage_Influencer.profile')}}
                        </a>
                        <ul>
                            <li><a href="{{route('edit-profile.index')}}" title="">Edit Your Profile</a></li>
                            <li><a href="{{route('view-profile-influencer')}}" title="">View Your Profile</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><i class="fa fa-bell" style="font-size: 17px"></i></span>
                            @if(Auth::user()->unreadnotifications->count() > 0)
                                <span style="margin-top: 5px" class="badge badge-danger">{{Auth::user()->unreadnotifications->count()}}</span>
                            @else
                                <span style="margin-top: 5px" class="badge badge-secondary">0</span>
                            @endif

                              </a>
                        <div class="notification-box noti" id="notification">
                            <div class="nt-title">
                                <h4>Setting</h4>
                                <a href="#" title="">Clear all</a>
                            </div>
                            <div class="nott-list">
                                @foreach(Auth::user()->notifications as $notification)
                                    @if($notification->type == 'App\Notifications\requestsRecieved')
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img style="border-radius: 100px" src="{{asset('storage/business_images/'.$notification->data['business'].'/'.$notification->data['profile_picture'].'' )}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">{{$notification->data['business']}}</a>  Requested information.</h3>

                                            <span style="font-size: 10px">{{$notification->created_at->diffForHumans()}}</span>

                                                <a data-toggle="modal"
                                                   data-target="#replyToRequest/{{$notification->data['request_id']}}"
                                                   class="btn btn-success confirm-btn">Confirm</a>
                                                <a class="btn btn-danger deny-btn">Deny</a>
                                        </div>
                                        {{$notification->markasread()}}
                                    </div>

                                    @elseif($notification->type == 'App\Notifications\CollaborationAnswer')
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img style="border-radius: 100px" src="{{asset('storage/business_images/'.$notification->data['business_username'].'/'.$notification->data['business_profile_picture'].'' )}}" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">{{$notification->data['business_username']}}</a>  @if($notification->data["collaboration_answer"] == 1) Accepted @else Rejected @endif your collaboration request</h3>
                                                <span style="font-size: 10px">{{$notification->created_at->diffForHumans()}}</span>
                                            </div>
                                            {{$notification->markasread()}}
                                        </div>
                                    @endif
                                @endforeach
                                <div class="view-all-nots">
                                    <a href="#" title="">View All Notification</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="">
                            @if (App::getLocale() == 'ar')
                                <span><img src="{{ URL::asset('assets/images/icons/LB.png') }}" alt=""></span>
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                            @else
                                <span><img src="{{ URL::asset('assets/images/icons/US.png') }}" alt=""></span>
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                            @endif

                        </a>

                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

            </nav>
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <div class="user-account">
                <div class="user-info">
                    <img style="" width="30" height="30"  src="{{asset('storage/influencer_images/'.Auth::user()->name.'/'.Auth::user()->profile_picture.'' )}}" alt="">
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                    <i class="fa fa-arrow-down"></i>
                </div>
                <div class="user-account-settingss" id="users">
                    <h3>{{trans('mainpage_Influencer.settings')}}</h3>
                    <ul class="us-links">
                        <li><a href="profile-account-setting.html" title="">{{trans('mainpage_Influencer.account-setting')}}</a></li>
                        <li><a href="#" title="">Privacy</a></li>
                        <li><a href="#" title="">Faqs</a></li>
                        <li><a href="#" title="">Terms & Conditions</a></li>
                    </ul>
                    <h3 class="tc">
{{--                        <a href="#" onclick="event.preventDefault();--}}
{{--                                    document.getElementById('logout-form').submit();" title="">{{trans('mainpage_Influencer.logout')}}</a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}

{{--                            @csrf--}}
{{--                        </form>--}}
                        @if(auth('influencer')->check())
                            <form id="logout-form" method="GET" action="{{ route('logout','influencer') }}">
                                  @else
                                    <form id="logout-form" method="GET" action="{{ route('logout','web') }}">
                                        @endif
                                        @csrf
{{--                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();this.closest('form').submit();"><i class="bx bx-log-out"></i>تسجيل الخروج</a>--}}
                                        <a href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" title="">{{trans('mainpage_Influencer.logout')}}</a>
                                    </form>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>


<!--=================================
header End-->
