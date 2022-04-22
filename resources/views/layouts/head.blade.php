<!-- Title -->
<title>@yield("title")</title>

<link rel="icon"  href="{{ URL::asset('assets/images/logo/favicon2.png') }}">

<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">


@if (App::getLocale() == 'ar')
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/ltr.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/layout/main_header.css') }}" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/layout/main_footer.css') }}" rel="stylesheet" >
<link rel="stylesheet" href="{{ URL::asset('css/modal/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/modal/style.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@yield('css')



