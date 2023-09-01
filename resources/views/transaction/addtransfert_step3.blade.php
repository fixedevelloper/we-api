@extends('base')
@push('css_or_js')

@endpush
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Mobile transfert - Validate transfert</h4>
                <form action="" method="post">
                    @csrf
                    <div id="wizard">
                        <!-- SECTION 3 -->
                        <h4></h4>
                        <section>
                            <div class="col-md-12 form-group" hidden>
                                <label for="typetransfert">Type transfert</label>
                                <select class="form-select" id="typetransfert"
                                        name="type" >
                                    <option value="mobilemoney">Mobile money</option>
                                    <option value="bank">Bank</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputUsername1">Amount</label>
                                    <input type="number" class="form-control" id="examplname"
                                           name="amount" placeholder="2.0">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputUsername1">Currency</label>
                                    <select class="form-select" name="operator_id" type="text" id="operator_id">
                                        @foreach($currencies as $item)
                                            <option value="{{$item->id}}">{{$item->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputUsername1">Reference</label>
                                    <input type="text" class="form-control" id="examplname"
                                           name="reference" placeholder="XF457878AZSDEE">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="relaction">Relaction</label>
                                    <input type="text" class="form-control" id="relaction"
                                           name="relaction" placeholder="XF457878AZSDEE">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="operator_id">Operator</label>
                                    <select class="form-select" name="operator_id" type="text" id="operator_id">

                                        @foreach($operators as $item)
                                            <option value="{{$item->id}}">{{$item->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{route('addtransfertstep2',["step"=>"2"])}}" class="btn btn-outline-secondary float-start"><i class="mdi mdi-arrow-left"></i> PREVIOUS</a>
                                <button type="submit" class="btn btn-outline-dark float-end"><i class="mdi mdi-content-save"></i>SEND</button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script_2')
    {{--    <script src="{{asset('js/jquery.steps.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>--}}
@endpush
