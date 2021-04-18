<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SoulWorkerX - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{ url('/') }}/assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/qanto.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bauhaus93.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/icofont.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/helper.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="{{ url('/') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">
        @include('partials.header')
        @include('partials.banner')

        @yield('content')

        @include('partials.footer')
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{ url('/') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ url('/') }}/assets/js/popper.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins.js"></script>
    <script src="{{ url('/') }}/assets/js/main.js"></script>

    @yield('scripts')

</body>

</html>
