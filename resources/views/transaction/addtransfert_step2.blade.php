@extends('base')
@push('css_or_js')

@endpush
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Mobile transfert - Create beneficiare</h4>
                <form action="" method="post">
                    @csrf
                    <div id="wizard">
                        <!-- SECTION 2 -->
                        <h4></h4>
                        <section>
                            <div class="col-md-12 form-group">
                                <label for="beneficiary_id">Select Beneficiary</label>
                                <select class="form-select basic-single" name="beneficiary_id" type="text" id="beneficiary_id">
                                    <option value="0">Select Beneficiary</option>
                                    @foreach($beneficiaries as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="divider_text text-center">
                                <h4>OR</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputUsername1">name</label>
                                    <input type="text" class="form-control" id="examplname"
                                           name="name" placeholder="Beneficiary name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="examplemail">Email</label>
                                    <input type="email" class="form-control" id="examplemail"
                                           name="email" placeholder="Beneficiary email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="examplcivility">Civility</label>
                                    <select type="text" class="form-select" id="examplcivility"
                                            name="civility">
                                        <option value="M">Mr</option>
                                        <option value="MME">Mme</option>
                                        <option value="MLLE">Mlle</option>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="exampleInputUsername1">Gender</label>
                                    <select type="text" class="form-select" id="examplgender"
                                            name="gender">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="examplemail">Phone</label>
                                    <input type="text" class="form-control" id="phone"
                                           name="phone" placeholder="Beneficiary phone">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="country">Country</label>
                                    <select class="form-select basic-single" name="country_id" type="text" id="country">
                                        <option>Select country</option>
                                        @foreach($countries as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{route('addtransfert',["step"=>"1"])}}" class="btn btn-outline-secondary float-start"><i class="mdi mdi-arrow-left"></i> PREVIOUS</a>
                                <button type="submit" class="btn btn-outline-dark float-end"><i class="mdi mdi-arrow-right"></i> NEXT</button>
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
