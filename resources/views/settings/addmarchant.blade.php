@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Merchants add</h4>
                <form class="forms-sample" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="exampleInputUsername1">Merchant name</label>
                            <input type="text" class="form-control" id="examplname"
                                   name="name" placeholder="Merchant name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="exampleInputUsername1">Merchant key</label>
                            <div class="input-group">

                            <input type="password" class="form-control" id="exampleInpukey"
                                   name="key" placeholder="......">
                                <button class="btn input-group-text btn-primary waves-effect waves-light"
                                        type="button" aria-haspopup="true" aria-expanded="false">Generate</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="exampleInputUsername1">Url</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                               name="url" placeholder="Merchant name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="exampleInputUsername1">CallbackUrl</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                               name="callback_url" placeholder="callback url">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
