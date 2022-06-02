<!-- Title -->
<title>@yield("title")</title>
<style>
    .bs-stepper .step.crossed .step-trigger .bs-stepper-circle {
        background-color: rgba(105,108,255,.16)!important;
        color: #339DAA!important;
    }
</style>
@if (App::getLocale() == 'ar')
    <link href="{{ URL::asset('css/rtl.css') }}" rel="stylesheet">
@endif
@if((request()->segment(2) ==  'business'))
    <link href="{{ URL::asset('css/registration/style-business.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('css/registration/style-inf.css') }}" rel="stylesheet">
@endif

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- Canonical SEO -->
<link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

<!-- Include Styles -->
<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/boxicons.css?id=7bed0c381d8a5b57f43c7bd313947977" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/fontawesome.css?id=f55d5b6721febc124275199b7dddbb5b" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/flag-icons.css?id=7018802e2db10780041f73a184e4bebe" />

<!-- Core CSS -->
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=7ea028d8943e4d11544610602e504b70" class="template-customizer-core-css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=3cdafbb15e4b7f9cbb567018a632af10" class="template-customizer-theme-css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/css/demo.css?id=8a804dae81f41c0f9fcbef2fa8316bdd" />


<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=d9fa6469688548dca3b7e6bd32cb0dc6" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.css?id=8fc311b79b2aeabf94b343b6337656cf" />

<!-- Vendor Styles -->
<!-- Vendor -->
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
{{--<link href="{{ URL::asset('css/influencers/font-awesome.min.css') }}"   >--}}
{{--<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">--}}
{{--<link href="{{ URL::asset('css/influencers/line-awesome.css') }}"  >--}}
{{--<link href="{{ URL::asset('css/influencers/line-awesome-font-awesome.min.css') }}"  >--}}
{{--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<!-- or -->
<link rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<!-- Page Styles -->
<!-- Page -->
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-auth.css">

<!-- Include Scripts for customizer, helper, analytics, config -->
<!-- laravel style -->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/helpers.js"></script>
<!-- beautify ignore:start -->
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/template-customizer.js"></script>

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/config.js"></script>

<script>
    window.templateCustomizer = new TemplateCustomizer({
        cssPath: '',
        themesPath: '',
        defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
        displayCustomizer: true,
        lang: 'en',
        pathResolver: function(path) {
            var resolvedPaths = {
                // Core stylesheets
                'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=7ea028d8943e4d11544610602e504b70',
                'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=4d3d0e2ab14ecbed2083861be9812a6f',

                // Themes
                'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=3cdafbb15e4b7f9cbb567018a632af10',
                'theme-default-dark.css':
                    'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=05dbf7c059f1493714333faa2b3b9551',
                'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=d6c71dfec8b2243aaa4ff471ffcb4e24',
                'theme-bordered-dark.css':
                    'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=f6ff29f111b4fa9e7eaf2b1123ef9dfe',
                'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=ab4aad06ff175954e3058d7dc07cca0d',
                'theme-semi-dark-dark.css':
                    'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=366f5c60c757a1a9970a4c91c66b0cb2',
            }
            return resolvedPaths[path] || path;
        },
        'controls': ["rtl","style","layoutType","showDropdownOnHover","layoutNavbarFixed","layoutFooterFixed","themes"],
    });
</script>
<!-- beautify ignore:end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');

</script>
@yield('css')



