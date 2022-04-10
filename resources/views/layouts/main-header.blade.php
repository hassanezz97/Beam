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

                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('influencer')}}" >Influencers </a>
                <a class="nav-link {{ (request()->segment(1) == 'businesses') ? 'active' : '' }}" href="{{route('businesses')}}" >Businesses</a>

        </nav>

        </div>

    </div>


</nav>


<!--=================================
header End-->
