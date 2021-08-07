<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Diary - @yield('title', 'Dashboard')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/fonts/line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/slicknav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fn/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @yield('styles')
</head>

<body>
    @include('fn.partials.header')

    <div id="contents">
        <div class="container">
            <div class="col-3"></div>
            <div class="col-6">
                @include('fn.partials.message')
            </div>

        </div>

        @yield('contents')
    </div>

    @include('fn.partials.footer')


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script data-cfasync="false" src="{{ asset('fn/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('fn/js/popper.min.js') }}"></script>
    <script src="{{ asset('fn/js/jquery-min.js') }}"></script>
    <script src="{{ asset('fn/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fn/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('fn/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('fn/js/wow.js') }}"></script>
    <script src="{{ asset('fn/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fn/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('fn/js/main.js') }}"></script>
    <script src="{{ asset('fn/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('fn/js/contact-form-script.min.js') }}"></script>
    <script src="{{ asset('fn/js/summernote.js') }}"></script>
    <script src="{{ asset('fn/js/pagination.min.js') }}"></script>

    @yield('scripts')
</body>

</html>