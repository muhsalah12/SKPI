<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <link rel="shortcut icon" href="{{ asset('covid') }}/images/favicon.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('covid') }}/assets/css/bundle.css">
    <link rel="stylesheet" href="{{ asset('covid') }}/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('covid') }}/assets/css/styles-azure.css">
</head>

<body class="nk-body">
    <div class="nk-wrap">
        @include('front.layout.header')
        <main class="nk-pages">
            @yield('content')
        </main>
        @include('front.layout.footer')
    </div>
    <!-- <script src="assets/js/bundle%EF%B9%96ver=111.js"></script> -->
    <script src="{{ asset('covid') }}/assets/js/scripts%EF%B9%96ver=111.js"></script>
</body>

</html>