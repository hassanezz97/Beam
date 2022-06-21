    <div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" id="main_is_new_is" action="/influencer_searches" accept-charset="UTF-8" method="get">

            <input value="best_desc" type="hidden" name="is[sort_order]" id="main_is_is_sort_order" />

            <div class="row">
                <div class="col-md-6">
                    <label>Category</label>
                    <input name="is[category_ids][]" type="hidden" value="" />
{{--                    <select multiple="multiple" oninvalid="this.setCustomValidity(&#39;Please add at least one category&#39;)" class="influencer-category-picker form-control" name="is[category_ids][]" id="main_is_is_category_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option selected>Click to select the category</option>
                        @foreach($Categories as $Category)
                            <option value="{{$Category->id}}">{{$Category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label>Location</label>
                    <input name="is[location_ids][]" type="hidden" value="" />
{{--                    <select multiple="multiple" placeholder="e.g. Denver, Colorado" class="new-location-picker form-control" name="is[location_ids][]" id="main_is_is_location_ids"></select>--}}
                    <select class="influencer-category-picker form-control form-select" aria-label="Default select example" id="main_is_is_category_ids">
                        <option >Click to select the Country</option>
                        @foreach($Countries as $Country)
                            <option value="{{$Country->id}}">{{$Country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 20px">
                <p style="float:right;" >
                    <input type="submit" name="commit" value="Search" class="btn btn-lg btn-primary track-event" data-event-name="search" data-disable-with="Search" />
                </p>
                </div>
            </div>

{{--            <div class="row">--}}

{{--                <div class="col-md-6">--}}
{{--                    <br>--}}
{{--                    <label>Instagram Follower Count</label>--}}
{{--                    <div class="follower-range noUi-target noUi-ltr noUi-horizontal noUi-background" data-min="5000" data-max="'10000000">--}}
{{--                        <div class="noUi-base">--}}
{{--                            <div class="noUi-origin noUi-connect" style="left:12.5%;">--}}
{{--                                <div class="noUi-handle noUi-handle-lower">--}}
{{--                                    <div class="noUi-tooltip">5,000</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="noUi-origin noUi-background" style="left: 75%;" >--}}
{{--                                <div class="noUi-handle noUi-handle-upper">--}}
{{--                                    <div class="noUi-tooltip">1,000,000</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="follower-range" data-min="5000" data-max="1000000"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <input value="influencer" type="hidden" name="is[account_type]" id="main_is_is_account_type" />--}}
{{--            <input value="influencer" type="hidden" name="is[search_type]" id="main_is_is_search_type" />--}}
{{--            <input class="follower-range-min" type="hidden" name="is[follower_min]" id="main_is_is_follower_min" />--}}
{{--            <input class="follower-range-max" type="hidden" name="is[follower_max]" id="main_is_is_follower_max" />--}}


        </form>


    </div>

    <div class="row">

    <!--Profile card start-->
    <div class="col-md-4">
    <div class="card">

        <div class="card-image">
            <img src="{{ URL::asset('assets/images/icons/cover-img.jpg') }}" alt="">
        </div>
        <div class="profile-image" style="margin:auto">
            <img src="{{ URL::asset('assets/images/icons/user-pro-img.png') }}" alt="">
        </div>
        <div class="card-content">
            <h3>Andrea Joe</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
{{--            <a href="#" class="fab fa-youtube"></a>--}}
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
{{--            <a href="#" class="fab fa-whatsapp"></a>--}}
        </div>
        <div class="card-buttons">
            <button> View Profile </button>
            <button> Request information</button>

        </div>

    </div>
    </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-image">
                    <img src="{{ URL::asset('assets/images/icons/cover-img.jpg') }}" alt="">
                </div>
                <div class="profile-image" style="margin:auto">
                    <img src="{{ URL::asset('assets/images/icons/user-pro-img.png') }}" alt="">
                </div>
                <div class="card-content">
                    <h3>Andrea Joe</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
{{--                    <a href="#" class="fab fa-youtube"></a>--}}
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
{{--                    <a href="#" class="fab fa-whatsapp"></a>--}}
                </div>
                <div class="card-buttons">
                    <button> View Profile </button>
                    <button> Request information</button>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-image">
                    <img src="{{ URL::asset('assets/images/icons/cover-img.jpg') }}" alt="">
                </div>
                <div class="profile-image" style="margin:auto">
                    <img src="{{ URL::asset('assets/images/icons/user-pro-img.png') }}" alt="">
                </div>
                <div class="card-content">
                    <h3>Andrea Joe</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
{{--                    <a href="#" class="fab fa-youtube"></a>--}}
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
{{--                    <a href="#" class="fab fa-whatsapp"></a>--}}
                </div>
                <div class="card-buttons">
                    <button> View Profile </button>
                    <button> Request information</button>
                </div>

            </div>
        </div>
    </div>
    <!--Profile card end-->
