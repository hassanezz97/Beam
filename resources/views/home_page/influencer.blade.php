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
    <link href="{{ URL::asset('css/layout/body_inf.css') }}" rel="stylesheet" >
    @include('layouts.head')
</head>

<body>


@include('layouts.main-header')
<div class="page-container">

<!--=================================
 Main content -->

<div class="wrapper">
    <div class="body-intro">
        <br><br><br>
        <h1 class="body-title">
            <b>
                We Grow <br>Your Beam
            </b>

        </h1>
        <br>
        <h6 class="body-desc">
            <b>
                {{trans('homepage-inf.body-desc1')}}<br>
                <span> {{trans('homepage-inf.body-desc2')}}</span><br>
                {{trans('homepage-inf.body-desc3')}}
            </b>

        </h6>
        <br>
        <p class="btn-intro">
            <a type="button" class="w3-button w3-round-large " data-toggle="modal" data-target="#exampleModal" >Get Started Today</a>
        </p>
        <br>
        <h6 class="body-desc-bus" >
            <b>Are you a business looking to engage with influencers in our community?<br></b>

        </h6>
        <p style="text-align: center">
            <u><a class="learn-more" href="{{route('businesses')}}">Learn more here!</a></u>
        </p>
        <br><br>




    </div>



</div>
@include('auth.login-modal')

<!--=================================
    End of Main content -->


<!--=================================
footer -->

@include('layouts.footer')

<!--=================================
end of footer -->

@include('layouts.footer-scripts')

</div>
</body>

</html>
