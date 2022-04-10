@extends('influencers.search.main-search')
@section('tab-title')
    Username Search
@endsection
@section('search-bar')

    <div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" id="username_is_new_is" action="/influencer_searches/username" accept-charset="UTF-8" method="get">
            <p>Find influencers by username.</p>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control input-lg" placeholder="Enter a full or partial Instagram handle" style="margin-bottom: 10px;" type="text" name="is[username]" id="username_is_is_username" />
                </div>
                <div class="col-md-6">
                </div>
            </div>

            <input value="username" type="hidden" name="is[search_type]" id="username_is_is_search_type" />
            <input value="score_desc" type="hidden" name="is[sort_order]" id="username_is_is_sort_order" />
            <input value="0" type="hidden" name="is[follower_min]" id="username_is_is_follower_min" />
            <input value="1000000000" type="hidden" name="is[follower_max]" id="username_is_is_follower_max" />

            <p style="margin-bottom: 0px;">
                <input type="submit" name="commit" value="Search" class="btn btn-lg btn-primary track-event" data-event-name="search" data-disable-with="Search" />
            </p>
        </form></div>

@endsection
