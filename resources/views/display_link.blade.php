<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$link->name}}</title>
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
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                          {{--  <img src="{{asset('images/logo.png')}}" alt="logo">--}}
                        </div>
                        <h4 class="text-center">{{$link->name}}</h4>
                        <p>{{$link->description}}</p>
                        @include("_partials.errors-and-messages")
                        <form class="pt-3" method="post">
                            @csrf
                            <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="exampleInputUsername1">Amount</label>
                                <div class="input-group">
                                <input readonly type="text" value="{{$link->amount}}" class="form-control" id="examplname"
                                       name="name" placeholder="Merchant name">

                                <button class="btn input-group-text btn-secondary waves-effect waves-light" type="button">{{$link->currency->code}}</button>
                            </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputUsername1">Your name</label>
                                <input type="text" class="form-control" id="examplname"
                                       name="name" placeholder="Your name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputUsername1">Your Email</label>
                                <input type="email" class="form-control" id="examplname"
                                       name="email" placeholder="Your email">
                            </div>
                            </div>
                            <div class="mt-3 row">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">Pay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
{{--<script src="{{asset('js/template.js')}}"></script>--}}
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<!-- endinject -->
</body>

</html>

