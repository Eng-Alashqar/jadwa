<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.7, user-scalable=no">
    {{ $meta }}
    <title> Jadwa - {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/images/logo/jadwa.png') }}">

    <!-- Stylesheets -->

    @include('site.en.layouts.styles')

</head>

<!-- page wrapper -->

<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- main header area -->
    <header class="main-header">

        <!-- header lower -->
        @include('site.en.layouts.header')
        <!-- end header lower -->

        <!--sticky header-->
        @include('site.en.layouts.sticky-header')
        <!-- end sticky header -->

    </header>
    <!-- end main header area -->



        {{ $slot}}




    <!-- main footer area -->
    @include('site.en.layouts.footer')
    <!-- main footer area end -->


    <!--End pagewrapper-->
    @include('site.en.layouts.scripts')

    <!-- End of .page_wrapper -->
</body>

</html>
