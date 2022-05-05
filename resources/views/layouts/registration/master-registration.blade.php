<!DOCTYPE html>
<html lang="en">

<head>
    @include('registration.head-registration')
</head>

<body>

<div class="wrapper" style="font-family: 'Cairo', sans-serif; ">

    <!--=================================
preloader -->


    <!--=================================
preloader -->

@include('registration.registration-header')

<!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper col-xl-10">

        @yield('page-header')


        @yield('content')

        <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('registration.registration-footer')
        </div><!-- main content wrapper end-->
</div>



<!--=================================
footer -->

@include('registration.footer-scripts')

</body>

</html>
