<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
{{--    <title>{{ $title ? $title.' | ' : '' }} {{ config('app.name') }}</title>--}}
    <title>{{ config('app.name', 'KSS') }} | @yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    @livewireStyles
    @stack('header')
    <style>
        span.error{
            color: red;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <x-common.sidebar />
    <div class="container-fluid page-body-wrapper">
        <x-common.header />
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
</div>


@livewireScripts
<script type="text/javascript" src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/misc.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/settings.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/todolist.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script>
    function toggleMenu() {
        let toggle = document.querySelector('.toggle');
        let sidebar = document.querySelector('.sidebar');
        let main_content = document.querySelector('.main_content');
        toggle.classList.toggle('active');
        sidebar.classList.toggle('active');
        main_content.classList.toggle('active');
    }

    function menuClose() {
        document.getElementById("sidebarID").classList.remove("active");
    }

    window.addEventListener('notify', event => {
        toastr[event.detail.type](event.detail.message, event.detail.title ?? '');
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });

    window.addEventListener('show-delete',event=>{
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#C9AC60',
            cancelButtonColor: '#fd625e',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewire.emit('deleteConfirm');
            }else if (result.dismiss) {
                livewire.emit('deleteCancel');
            }
        })
    })
    window.addEventListener('deleted',event=>{
        Swal.fire({
            title: 'Deleted!',
            text: event.detail.message,
            icon: 'success',
            confirmButtonColor: '#C9AC60'
        })
    })
</script>
@include('layouts._alert-script')
@stack('footer')

</body>

</html>
