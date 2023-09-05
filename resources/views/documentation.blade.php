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
    <link rel="stylesheet" href="{{asset('codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('codemirror/ambiance.css')}}">
    <link rel="stylesheet" href="{{asset('codemirror/jquery.pwstabs.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@stack('css_or_js')
<!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="main-panel w-100  documentation">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 doc-header">
                            <a class="btn btn-success btn-sm" href="{{route('dashboard')}}"><i
                                    class="mdi mdi-home me-2"></i>Back to dashboard</a>
                            <h3 class="text-primary mt-4">Documentation wetransfertcash API</h3>
                        </div>
                    </div>
                    <div class="row doc-content">
                        <div class="col-12 col-md-3 grid-margin doc-table-contents">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-4">Table of contents</h3>
                                    <ul class="list-arrow">
                                        <li>
                                            <a href="#doc-intro">Introduction</a>
                                        </li>
                                        <li>
                                            <a href="#doc-started">Getting started</a>
                                        </li>
                                        <li>
                                            <a href="#doc-authentification">Authentication</a>
                                        </li>
                                        <li>
                                            <a href="#doc-components">Transaction</a>
                                            <ul class="list-arrow">
                                                <li>
                                                    <a href="#doc-collection">Collections</a>
                                                </li>
                                                <li>
                                                    <a href="#doc-tables">Transfert bank</a>
                                                </li>
                                                <li>
                                                    <a href="#doc-charts">Transfert Mobile money</a>
                                                </li>
                                                <li>
                                                    <a href="#doc-forms">Countries</a>
                                                </li>
                                                <li>
                                                    <a href="#doc-icons">Currencies</a>
                                                </li>
                                                <li>
                                                    <a href="#doc-editors">Code errors</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 offset-md-3 grid-margin">
                            <div class="col-12 grid-margin" id="doc-intro">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="mb-4">Introduction</h3>
                                        <p>Wetransfertcash is a API ..</p>
                                        <p>Before you start working with the template, we suggest you go through the
                                            pages that are bundled with the theme. Most of the template example pages
                                            contain quick tips on how to create or use a component which can
                                            be really helpful when you need to create something on the fly.</p>
                                        <p class="d-inline"><strong>Note</strong>: We are trying our best to document
                                            how to use the template. If you think that something is missing from the
                                            documentation, please do not hesitate to tell us about it. If you have any
                                            questions or issues regarding this theme please use Envato support form on
                                            our profile or email us at <a class="d-inline text-info"
                                                                          href="mailto:support@bootstrapdash.com">support@bootstrapdash.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 grid-margin" id="doc-started">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="mb-4">Getting started</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 grid-margin" id="doc-collection">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="mb-4">Collections</h3>
                                        <p>You can directly use the compiled and ready-to-use the version of the
                                            template. But in case you plan to customize the template extensively the
                                            template allows you to do so.</p>
                                        <p>Requetes post</p>
                                        <textarea class="shell-mode">
{
    "amount": 10,
    "currency": "xaf",
    "reference": "69874sedr47",
    "country": "CM",// CI,CG
    "payment_options":"card,mobilemoney",
    "customer": {
        "name": "Rodrigue mbah",
        "phone": "237675066919",
        "email": "rod@gmail.com"
    },
    "option": {
        "title": "The Titanic Store",
        "description": "Payment for an awesome cruise",
        "logo": "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg"
    }
}
                                        </textarea>
                                        <p class="mt-1">Note: The root folder denoted further in this documentation
                                            refers to the 'template' folder inside the downloaded folder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Wetransfertcash <a
                            href="https://www.wetransfertcash.com/" target="_blank">API</a> </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright  <script>document.write(new Date().getFullYear())</script> &copy; {{env('APP_NAME')}}. All rights reserved.</span>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<script src="{{asset('codemirror/codemirror.js')}}"></script>
<script src="{{asset('codemirror/javascript.js')}}"></script>
<script src="{{asset('codemirror/shell.js')}}"></script>
<script src="{{asset('codemirror/jquery.pwstabs.min.js')}}"></script>
<script src="{{asset('js/documentation.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>

</body>

</html>

