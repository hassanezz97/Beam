<!DOCTYPE html>
<html lang="en">
@section('title')
    Glint
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
    @include('layouts.head')
</head>

<body style="background-color: #FEF5E2">


@include('layouts.main-header')


<!--=================================
 Main content -->



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br>



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
