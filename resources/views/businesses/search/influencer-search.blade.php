
<div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" id="lets_search">
{{--            action="{{route('advanced-search.show','searchInfluencer')}}"--}}
            <div class="row">
                <div class="col-md-6">
                    <label>Category</label>
                     <select name="filter_category" id="filter_category" class="influencer-category-picker form-control form-select" >
                        <option value="">Click to select the category</option>
                        @foreach($Categories as $Category)
                            <option id="category" name="{{$Category->id}}" value="{{$Category->id}}">{{$Category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label>Location</label>
                       <select name="filter_country" id="filter_country" class="influencer-category-picker form-control form-select">
                        <option value="" >Click to select the Country</option>
                        @foreach($Countries as $Country)
                            <option id="country" value="{{$Country->id}}">{{$Country->name}}</option>
                        @endforeach
                        </select>
                </div>
                <div id="advanced-search" class="col-md-12" style="margin-top: 20px">
                <p style="float:right;" >
                    <button type="submit" value="send" name="send" id="send" class="btn btn-lg btn-primary track-event">Search</button>
                </p>
                </div>
            </div>
        </form>
</div>

<div class="ads" id="card-row" >

</div>
<!-- JQUERY FROM GOOGLE API -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("#lets_search").bind('submit',function() {
            var category = $('#filter_category').val();
            var country = $('#filter_country').val();
            $.get('{{route('advanced-search.show','searchInfluencer')}}',{value1:category,value2:country}, function(data){
                $("#card-row").html(data);
            });
            return false;
        });
    });
</script>



{{--            @if(isset($influencers))--}}
{{--                @if(count($influencers) > 0)--}}
{{--                    @foreach($influencers as $influencer)--}}
{{--                        <div class="row" id="card-row" >--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-image">--}}
{{--                                        <img src="{{ URL::asset('assets/images/icons/cover-img.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="profile-image" style="margin:auto">--}}
{{--                                        <img src="{{asset('storage/influencer_images/'.$influencer->name.'/'.$influencer->profile_picture.'' )}}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="card-content">--}}
{{--                                        <h3>{{$influencer->name}}</h3>--}}
{{--                                        <p>{{$influencer->headline}}</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="icons">--}}
{{--                                        <a href="#" class="fab fa-facebook-f"></a>--}}
{{--                                        <a href="#" class="fab fa-youtube"></a>--}}
{{--                                        <a href="#" class="fab fa-instagram"></a>--}}
{{--                                        <a href="#" class="fab fa-twitter"></a>--}}
{{--                                        <a href="#" class="fab fa-whatsapp"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-buttons">--}}
{{--                                        <button> View Profile</button>--}}
{{--                                        <button> Request information</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

{{--            @endif--}}
{{--    <!--Profile card start-->--}}

{{--    <!--Profile card end-->--}}

{{--<script>--}}
{{--    function search() {--}}
{{--        var x = document.getElementById("card-row");--}}
{{--        if (x.style.display === "none") {--}}
{{--            x.style.display = "block";--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
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

