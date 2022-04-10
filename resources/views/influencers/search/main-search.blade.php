@extends('influencers.sketch-influencers')
{{--Css files--}}
@section('css')
    <link href="{{ URL::asset('css/influencers/search/search.css') }}" rel="stylesheet" >

    {{--Tab title--}}
@section('title')
    @yield('tab-title')
@stop
@endsection

@section('page-header')

@endsection

{{--Body content--}}
@section('content')


    <div class="position-relative">
        <section class="front-page-search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <br>
                        <h3 class="visible-xs-block visible-sm-block" style="color: #fff;">Search for...</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs search-tabs responsive" role="tablist">
                            <li class="{{ (request()->routeIs('searchInfluencer') ) ? 'active' : '' }}"><a  href="{{route('searchInfluencer')}}">Influencers</a></li>
                            <li class="{{ (request()->routeIs('searchBusiness') ) ? 'active' : '' }}"><a  href="{{route('searchBusiness')}}">Businesses</a></li>
                            <li class="{{ (request()->routeIs('advSearch') ) ? 'active' : '' }}"><a aria-current="page" href="{{route('advSearch')}}">Advanced</a></li>
                            <li class="{{ (request()->routeIs('searchUsername') ) ? 'active' : '' }}"><a  href="{{route('searchUsername')}}">Username</a></li>
                        </ul>
                        @yield('search-bar')
                    </div>
                </div>
            </div>
        </section>

                        <section>
                            <div class="container">
                                <div class="search-tab-content responsive">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                                            <br>

                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

@endsection




@section('js')

@endsection
