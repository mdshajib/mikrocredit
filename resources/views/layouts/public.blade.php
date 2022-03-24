<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <title>KSS | Homepage</title>
    <title>{{ config('app.name', 'KSS') }} | @yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    @livewireStyles

    @stack('style')

</head>

<body class="">
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        {{ $slot }}
    </div>

</div>
<!--container part ends-->


@livewireScripts
<!--sales_footer part ends-->
<script type="text/javascript" src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/misc.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/settings.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/todolist.js') }}"></script>
@stack('script')
<script>

</script>

</body>

</html>
