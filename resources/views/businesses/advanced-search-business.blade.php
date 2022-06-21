@extends('layouts.businesses.master-blade-business')

@section('css')

@section('title')
    {{Auth::user()->first_name}} {{Auth::user()->last_name}} ({{ Auth::user()->name }})
@stop
<link href="{{ URL::asset('css/influencers/search/search.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main style="min-height: 550px;">


        <div class="position-relative">
            <section class="front-page-search">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <br>
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Influencers
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">Businesses</button>

                                <button class="tablinks" onclick="openCity(event, 'Beirut')">Username</button>
                            </div>
                            @include('businesses.accept-collaboration-modal')
                            <div id="London" class="tabcontent">
                                @include('businesses.search.influencer-search')
                            </div>

                            <div id="Paris" class="tabcontent" style="display: none;">
                                @include('businesses.search.business-search')
                            </div>

                            <div id="Beirut" class="tabcontent" style="display: none;">
                                @include('businesses.search.username-search')
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

        </div>
    </main>


@endsection

@section('js')
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
@endsection
