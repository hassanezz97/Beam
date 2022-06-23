

    <div class="search-form big-search-wrapper search-wrapper responsive">
        <form class="new_is" iid="lets_search_3">
            <p>Find influencers by username.</p>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control input-lg" placeholder="Enter a username" style="margin-bottom: 10px;" type="text" name="username" id="username_is_is_username" />
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <p style="margin-bottom: 0px;">
                <button type="submit" value="send" name="send" id="send" class="btn btn-lg btn-primary track-event">Search</button>
            </p>
        </form></div>


    <div class="row" id="card-row-username" >

    </div>
    <!-- JQUERY FROM GOOGLE API -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#lets_search_3").bind('submit',function() {
                var username = $('#filter_category_business').val();
                $.get('{{route('advanced-search.destroy','searchUsername')}}',{value5:username}, function(data){
                    $("#card-row-username").html(data);
                });
                return false;
            });
        });
    </script>
