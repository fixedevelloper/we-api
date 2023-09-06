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
                        <h4>{{$link->name}}</h4>
                        @include("_partials.errors-and-messages")
                        <form class="pt-3" method="post">
                            @csrf
                            <div class="row">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input type="radio" name="model" class="btn-check btn-lg" value="mobile_money" id="success-outlined" autocomplete="off" checked>
                                        <label class="text-center btn btn-outline-success d-flex p-2 bd-highlight justify-content-center" for="success-outlined"><img src="{{asset('images/logo-small.png')}}">Mobile Money</label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <input type="radio" name="model" class="btn-check" value="credit_card" id="danger-outlined" autocomplete="off">
                                        <label class="btn btn-outline-danger d-flex p-2 bd-highlight justify-content-center" for="danger-outlined"><img src="{{asset('images/logo-small.png')}}">Credit card</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="mobile_money">
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputUsername1">Phone</label>
                                    <div class="input-group">
                                        <select class="btn input-group-text btn-success" type="button">
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->codeiso}}</option>
                                            @endforeach
                                        </select>
                                        <input type="text" value="{{$link->phone}}" class="form-control" id="examplname"
                                               name="phone" placeholder="675066919">

                                    </div>
                                </div></div>
                                <div class="row" id="card_bank">
                                    <div class="col-md-12 form-group">
                                        <label for="card_number">card number</label>
                                        <input type="text" class="form-control" id="card_number"
                                               name="cardnumber" placeholder="0000 0000 0000 0000">
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label for="valid_date">Valid date</label>
                                        <input type="text"  class="form-control" id="valid_date"
                                               name="valid_date" placeholder="MM/YY">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="cvv">CVV</label>
                                        <input type="password" class="form-control" id="cvv"
                                               name="cvv" placeholder="123">
                                    </div>
                                </div>
                            <div class="mt-3 row">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">Pay {{$link->amount}} {{$link->currency->code}}</button>
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


