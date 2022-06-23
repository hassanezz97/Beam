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
    <link rel="stylesheet" href="{{ URL::asset('css/modal/style-business.css') }}">
    @include('layouts.head')
</head>

<body style="background-color: #FEF5E2">


@include('layouts.main-header')


<!--=================================
 Main content -->
<div class="main" style="min-height: 450px">


    <div class="row justify-content-center pt-5 mt-5">
        <div class="col-sm-7 col-lg-5 text-center">
            <h1 class="body-title" style="text-align: center;
    color: #80ACDC;
    font-size: 60px;
    font-family: Georgia;
    line-height: 56px">
                Connect with real influencers and creators
            </h1>
            <p class="fw-bold mt-4 mb-5" style="    text-align: center;
    color: #80ACDC;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 19px;">
                on the Creator Economy's professional network.
            </p>

            <p class="btn-intro">
                <a style="    color: white !important;
    background-color: #80ACDC;
    font-family: Arial, Helvetica, sans-serif;
    padding: 15px;
    width: 200px;" type="button" class="w3-button w3-round-large " data-toggle="modal" data-target="#exampleModal" >Get Started Today</a>
            </p>
        </div>
    </div>


</div>





<!--=================================
    End of Main content -->


<!--=================================
footer -->
@include('auth.login-modal-business')
@include('layouts.footer')

<!--=================================
end of footer -->

@include('layouts.footer-scripts')


</body>

</html>
