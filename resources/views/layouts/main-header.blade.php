<!--=================================
header start-->


<nav class="navbar navbar-expand-lg ">
    <!-- Image and text -->

        <a class="navbar-brand" href="{{route('influencer')}}">
            <img src="{{ URL::asset('assets/images/logo/logo1.png') }}" width="150" height="40" class="d-inline-block align-top" alt="">
        </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="d-flex justify-content-center">

        <nav class="nav nav-pills nav-fill  d-md-flex">
                <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" href="{{route('influencer')}}" >Influencers </a>
                <a class="nav-link {{ (request()->segment(2) ==  'businesses') ? 'active' : '' }}" href="{{route('businesses')}}" >Businesses</a>
        </nav>

        </div>
        <div class="reg-div">
            <ul class="navbar-nav flex-row align-items-center">
                <li>
                    <a href="#" title="">
                        @if (App::getLocale() == 'ar')
                            <span><img src="{{ URL::asset('assets/images/icons/LB.png') }}" alt=""></span>
                           <p> {{ LaravelLocalization::getCurrentLocaleName() }} </p>
                        @else
                            <span><img src="{{ URL::asset('assets/images/icons/US.png') }}" alt=""></span>
                            <p>{{ LaravelLocalization::getCurrentLocaleName() }}</p>
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
             <li class="btn-register">
                     <a type="button" class="w3-button w3-round-large " data-toggle="modal" data-target="#exampleModal" >Sign Up</a>
             </li>
            </ul>

        </div>

    </div>


</nav>


<!--=================================
header End-->
