<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Success</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            @include("_partials.errors-and-messages")
            <div class="row w-100 mx-0">

                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <div class="brand-logo">
                             <img src="{{asset('images/success_icon.png')}}" alt="logo">
                        </div>
                        <div class="row">
                            <a class="btn btn-success btn-block"> Go Home</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<script>
    $(function () {
        if ( $('input[type=radio][name="model"]')==="credit_card"){
            $('#card_bank').show();
            $('#mobile_money').hide();
        }else {
            $('#card_bank').hide();
            $('#mobile_money').show();
        }
        $('input[type=radio][name="model"]').change(function () {
            console.log($(this).val())
            if ($(this).val()==="credit_card"){
                $('#card_bank').show();
                $('#mobile_money').hide();
            }else {
                $('#card_bank').hide();
                $('#mobile_money').show();
            }
        })
    })
</script>
</body>

</html>


