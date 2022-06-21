<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.registration.head-registration')
</head>

<body>

<div class="wrapper" style="font-family: 'Cairo', sans-serif; ">

    <!--=================================
preloader -->


    <!--=================================
preloader -->

@include('layouts.registration.registration-header')

<!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper col-xl-10">

{{--        @yield('page-header')--}}


        @yield('content')

        <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.registration.registration-footer')
        </div><!-- main content wrapper end-->
</div>



<!--=================================
footer -->

@include('layouts.registration.footer-registration-scripts')

</body>

</html>
