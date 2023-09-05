<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>We-api </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    @stack('css_or_js')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}" />
</head>

<body>
<div class="container-scroller">
    @include('_partials._navbar')
    <div class="container-fluid page-body-wrapper">
        @include('_partials._sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @include("_partials.errors-and-messages")
                @yield('content')
            </div>
            @include('_partials._footer')
        </div>

    </div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script>
    (function($) {
        if ($(".basic-single").length) {
            $(".basic-single").select2();
        }
        $(".basic-s").select2({
            $dropdownParent:$("#bs-example-modal-sm")
        });
    })(jQuery);
</script>
@stack('script_2')
<!-- endinject -->
</body>

</html>
