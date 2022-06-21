
    <div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" id="adv_is_new_is" action="" accept-charset="UTF-8" method="get">

            <input value="30" type="hidden" name="is[limit]" id="adv_is_is_limit" />
            <input value="best_desc" type="hidden" name="is[sort_order]" id="adv_is_is_sort_order" />

            <div class="row">
                <div class="col-md-4 category-field">
                    <label>Category</label>
                    <input name="is[category_ids][]" type="hidden" value="" />
{{--                    <select multiple="multiple" oninvalid="" class="influencer-category-picker form-control" name="is[category_ids][]" id="adv_is_is_category_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option selected>Click to select the category</option>
                        <option value="1">Fashion</option>
                        <option value="2">Entertainment</option>
                        <option value="3">Sports</option>
                    </select>
                </div>

                <div class="col-md-4 location" style="margin-top: -20px;">
                    <br class="hidden-md hidden-lg">
                    <label>Location</label>
                    <input name="is[location_ids][]" type="hidden" value="" />
{{--                    <select multiple="multiple"  class="new-location-picker form-control" name="is[location_ids][]" id="adv_is_is_location_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option selected>Click to select the Country</option>
                        <option value="1">Lebanon</option>
                        <option value="2">Jordan</option>
                        <option value="3">Syria</option>
                    </select>
                </div>

            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label class="search-header">Instagram Followers</label>
                    <div class="row">
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="1,000" class="form-control" type="text" name="is[follower_min]" id="adv_is_is_follower_min" />
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <p class="text-center"><strong>to</strong></p>
                        </div>
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="1,000" class="form-control" type="text" name="is[follower_max]" id="adv_is_is_follower_max" />
                            </p>
                        </div>
                    </div>
                    <br />

                    <label class="search-header">Facebook Page Likes</label>
                    <div class="row">
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="100" class="form-control" type="text" name="is[min_fb_likes]" id="adv_is_is_min_fb_likes" />
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <p class="text-center"><strong>to</strong></p>
                        </div>
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="1,000" class="form-control" type="text" name="is[max_fb_likes]" id="adv_is_is_max_fb_likes" />
                            </p>
                        </div>
                    </div>


                </div>

                <div class="col-md-3">
                    <label class="search-header">Instagram Engagement Rate</label>
                    <div class="row">
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[%0-9,.]+" placeholder="0.1%" class="form-control" type="text" name="is[min_erate]" id="adv_is_is_min_erate" />
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <p class="text-center"><strong>to</strong></p>
                        </div>
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[%0-9,.]+" placeholder="4.5%" class="form-control" type="text" name="is[max_erate]" id="adv_is_is_max_erate" />
                            </p>
                        </div>
                    </div>

                    <br>
                    <label class="search-header">Twitter Followers</label>
                    <div class="row">
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="100" class="form-control" type="text" name="is[min_twitter_followers]" id="adv_is_is_min_twitter_followers" />
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <p class="text-center"><strong>to</strong></p>
                        </div>
                        <div class="col-xs-5">
                            <p>
                                <input pattern="[0-9,]+" placeholder="1,000" class="form-control" type="text" name="is[max_twitter_followers]" id="adv_is_is_max_twitter_followers" />
                            </p>
                        </div>
                    </div>



                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="search-header">Age</label>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p>
                                        <input pattern="[0-9,]+" placeholder="25" class="form-control" type="text" name="is[min_age]" id="adv_is_is_min_age" />
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <p class="text-center"><strong>to</strong></p>
                                </div>
                                <div class="col-xs-5">
                                    <p>
                                        <input pattern="[0-9,]+" placeholder="60" class="form-control" type="text" name="is[max_age]" id="adv_is_is_max_age" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="search-header">Starting Rate</label>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p>
                                        <input pattern="[$0-9,.]+" placeholder="$50" class="form-control" type="text" name="is[min_rate]" id="adv_is_is_min_rate" />
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <p class="text-center"><strong>to</strong></p>
                                </div>
                                <div class="col-xs-5">
                                    <p>
                                        <input pattern="[$0-9,.]+" placeholder="$500" class="form-control" type="text" name="is[max_rate]" id="adv_is_is_max_rate" />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="search-header">Gender</label>
                            <p>
                                <input name="is[is_male]" type="hidden" value="0" /><input type="checkbox" value="1" name="is[is_male]" id="adv_is_is_is_male" />&nbsp;&nbsp;&nbsp;<label for="adv_is_is_is_male">Male</label>
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <input name="is[is_female]" type="hidden" value="0" /><input type="checkbox" value="1" name="is[is_female]" id="adv_is_is_is_female" />&nbsp;&nbsp;&nbsp;<label for="adv_is_is_is_female">Female</label>
                            </p>
                        </div>

                    </div>

                    <label class="search-header">Networks <a href="#" data-beacon-article-modal="602fef83b3ebfb109b5842bf" class="fa fa-info-circle unstyled-link"></a></label>

                    <p>
                        <input name="is[has_ig_posts]" type="hidden" value="0" /><input type="checkbox" value="1" name="is[has_ig_posts]" id="adv_is_is_has_ig_posts" />&nbsp;&nbsp;&nbsp;
                        <label for="adv_is_is_has_ig_posts"><span class="fa fa-instagram"></span> Instagram</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <input name="is[has_yt_posts]" type="hidden" value="0" /><input type="checkbox" value="1" name="is[has_yt_posts]" id="adv_is_is_has_yt_posts" />&nbsp;&nbsp;&nbsp;
                        <label for="adv_is_is_has_yt_posts"><span class="fa fa-youtube"></span> Youtube</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        <br>

                        <input name="is[has_tiktok]" type="hidden" value="0" />
                        <input type="checkbox" value="1" name="is[has_tiktok]" id="adv_is_is_has_tiktok" />&nbsp;&nbsp;&nbsp;
                        <label for="adv_is_is_has_tiktok">
                            <img height="15" src="{{ URL::asset('assets/images/icons/tiktok-4129d3ca2acd8a0dc7c19d3ecded2f55495af44fecb0eb6fff9cf65da924d96f.svg') }}" />&nbsp;TikTok
                        </label>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        <input name="is[has_snapchat_posts]" type="hidden" value="0" /><input type="checkbox" value="1" name="is[has_snapchat_posts]" id="adv_is_is_has_snapchat_posts" />&nbsp;&nbsp;&nbsp;
                        <label for="adv_is_is_has_snapchat_posts"><span class="fa fa-snapchat"></span> Snapchat</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>

                </div>
            </div>

            <input value="influencer" type="hidden" name="is[account_type]" id="adv_is_is_account_type" />
            <input value="advanced" type="hidden" name="is[search_type]" id="adv_is_is_search_type" />
            <input class="follower-range-min" type="hidden" name="is[min_reach]" id="adv_is_is_min_reach" />
            <input class="follower-range-max" type="hidden" name="is[max_reach]" id="adv_is_is_max_reach" />

            <p style="margin-bottom: 0px;">
                <input type="submit" name="commit" value="Search" class="btn btn-lg btn-primary track-event" data-event-name="search" data-disable-with="Search" />
            </p>
        </form>
    </div>
