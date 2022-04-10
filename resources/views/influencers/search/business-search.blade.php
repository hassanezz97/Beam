@extends('influencers.search.main-search')
@section('tab-title')
    Business Search
@endsection
@section('search-bar')

    <div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" id="main_is_new_is" action="/influencer_searches" accept-charset="UTF-8" method="get">

            <input value="best_desc" type="hidden" name="is[sort_order]" id="main_is_is_sort_order" />

            <div class="row">
                <div class="col-md-6 category-field">
                    <label>Category</label>
                    <input name="is[category_ids][]" type="hidden" value="" />
                    {{--                    <select multiple="multiple" oninvalid="this.setCustomValidity(&#39;Please add at least one category&#39;)" class="influencer-category-picker form-control" name="is[category_ids][]" id="main_is_is_category_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option selected>Click to select the category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6 location" style="margin-top: -20px;">
                    <br class="hidden-md hidden-lg">
                    <label>Location</label>
                    <input name="is[location_ids][]" type="hidden" value="" />
                    {{--                    <select multiple="multiple" placeholder="e.g. Denver, Colorado" class="new-location-picker form-control" name="is[location_ids][]" id="main_is_is_location_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option selected>Click to select the Country</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <br>
                    <label>Instagram Follower Count</label>
                    <div class="follower-range noUi-target noUi-ltr noUi-horizontal noUi-background" data-min="5000" data-max="'10000000">
                        <div class="noUi-base">
                            <div class="noUi-origin noUi-connect" style="left:12.5%;">
                                <div class="noUi-handle noUi-handle-lower">
                                    <div class="noUi-tooltip">5,000</div>
                                </div>
                            </div>
                            <div class="noUi-origin noUi-background" style="left: 75%;" >
                                <div class="noUi-handle noUi-handle-upper">
                                    <div class="noUi-tooltip">1,000,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="follower-range" data-min="5000" data-max="1000000"></div>
                </div>
            </div>

            <input value="influencer" type="hidden" name="is[account_type]" id="main_is_is_account_type" />
            <input value="influencer" type="hidden" name="is[search_type]" id="main_is_is_search_type" />
            <input class="follower-range-min" type="hidden" name="is[follower_min]" id="main_is_is_follower_min" />
            <input class="follower-range-max" type="hidden" name="is[follower_max]" id="main_is_is_follower_max" />
            <br><br><br>
            <p style="margin-bottom: 0px;">
                <input type="submit" name="commit" value="Search" class="btn btn-lg btn-primary track-event" data-event-name="search" data-disable-with="Search" />
            </p>
        </form>
    </div>


@endsection
