<!doctype html>
<html lang="id" dir="ltr">

<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Version" content="v1.0.0" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    <link href="{{ asset('web-asset/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web-asset/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web-asset/css/bootstrap-green.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('web-asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web-asset/libs/@iconscout/unicons/css/line.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('web-asset/css/style-green.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css" />
    @yield('styles')
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    @yield('content')

    @include('layouts.footer')

    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>

    <script src="{{ asset('web-asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web-asset/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('web-asset/libs/tobii/js/tobii.min.js') }}"></script>
    <script src="{{ asset('web-asset/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('web-asset/js/plugins.init.js') }}"></script>
    <script src="{{ asset('web-asset/js/app.js') }}"></script>
    <script src="{{ asset('web-asset/libs/shufflejs/shuffle.min.js') }}"></script>
    <script src="{{ asset('web-asset/libs/jarallax/jarallax.min.js') }} "></script>

    @yield('scripts')
    @stack('push-script')

</body>

</html>
