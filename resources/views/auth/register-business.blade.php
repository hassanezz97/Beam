<!DOCTYPE html>
<html lang="en">
<title>
    Register as Business
</title>
<head>

    <livewire:styles />

    @include('layouts.registration.head-registration')
</head>

<body>


<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">

    @include('layouts.registration.registration-header')

    <!--=================================
 Main content -->
        <!-- main-content -->


    @yield('page-header')


    @yield('content')

    <!--=================================
 wrapper -->


        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
            <div class="w-px-400">
                <img src="{{ URL::asset('assets/images/registraion-images/create-account-light.png') }}" class="img-fluid" alt="multi-steps" width="600" >
            </div>
        </div>
        <!-- /Left Text -->
        @livewire('register-business-wizard')


        <!--=================================
footer -->

        @include('layouts.registration.registration-footer')
    </div><!-- main content wrapper end-->
</div>



<!--=================================
footer -->


</body>
<livewire:scripts />
</html>
