<!DOCTYPE html>
<html lang="en">
@section('title')
    Beam
@stop
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.Influencers.head-influencers')
</head>

<body>

@include('layouts.Influencers.main-header-inf')
@yield('page-header')

<!--=================================
 Main content -->

@yield('content')


<!--=================================
    End of Main content -->


<!--=================================
footer -->

@include('layouts.Influencers.footer-influencers')

<!--=================================
end of footer -->

@include('layouts.Influencers.footer-scripts-influencers')

</body>

</html>
