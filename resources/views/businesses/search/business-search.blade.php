

<div class="search-form big-search-wrapper search-wrapper responsive">
    <form class="new_is" id="lets_search_2">
        {{--            action="{{route('advanced-search.show','searchInfluencer')}}"--}}
        <div class="row">
            <div class="col-md-6">
                <label>Category</label>
                <select name="filter_category_business" id="filter_category_business" class="influencer-category-picker form-control form-select" >
                    <option value="">Click to select the category</option>
                    @foreach($Categories as $Category)
                        <option id="category" name="{{$Category->id}}" value="{{$Category->id}}">{{$Category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label>Location</label>
                <select name="filter_country_business" id="filter_country_business" class="influencer-category-picker form-control form-select">
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
<div class="ads" id="card-row-business" >

</div>
<!-- JQUERY FROM GOOGLE API -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("#lets_search_2").bind('submit',function() {
            var category = $('#filter_category_business').val();
            var country = $('#filter_country_business').val();
            $.get('{{route('advanced-search.edit','searchBusiness')}}',{value3:category,value4:country}, function(data){
                $("#card-row-business").html(data);
            });
            return false;
        });
    });
</script>
