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
    <link href="{{ URL::asset('css/influencers/search/search.css') }}" rel="stylesheet" >
    @include('layouts.Influencers.head-influencers')
</head>

<body>


@include('layouts.Influencers.main-header-inf')


<!--=================================
 Main content -->

<main style="min-height: 550px;">


    <div class="position-relative">
        <section class="front-page-search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <br>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Influencers</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Businesses</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Advanced</button>
                            <button class="tablinks" onclick="openCity(event, 'Beirut')">Username</button>
                        </div>

                        <div id="London" class="tabcontent">
                            @include('influencers.search.influencer-search')
                        </div>

                        <div id="Paris" class="tabcontent">
                            @include('influencers.search.business-search')
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            @include('influencers.search.advanced-search')
                        </div>
                        <div id="Beirut" class="tabcontent">
                            @include('influencers.search.username-search')
                        </div>

                        <!-- Nav tabs -->
                        {{--                        <ul class="nav nav-tabs search-tabs responsive" role="tablist">--}}
                        {{--                            <li class="{{ (request()->routeIs('searchInfluencer') ) ? 'active' : '' }}"><a  href="{{route('searchInfluencer')}}">Influencers</a></li>--}}
                        {{--                            <li class="{{ (request()->routeIs('searchBusiness') ) ? 'active' : '' }}"><a  href="{{route('searchBusiness')}}">Businesses</a></li>--}}
                        {{--                            <li class="{{ (request()->routeIs('advSearch') ) ? 'active' : '' }}"><a aria-current="page" href="{{route('advSearch')}}">Advanced</a></li>--}}
                        {{--                            <li class="{{ (request()->routeIs('searchUsername') ) ? 'active' : '' }}"><a  href="{{route('searchUsername')}}">Username</a></li>--}}
                        {{--                        </ul>--}}

                    </div>
                </div>
            </div>
        </section>



</main>

<!--=================================
    End of Main content -->


<!--=================================
footer -->

@include('layouts.Influencers.footer-influencers')

<!--=================================
end of footer -->

@include('layouts.Influencers.footer-scripts-influencers')
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</body>

</html>
