@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transferts list</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Customer
                            </th>
                            <th>
                                Sender
                            </th>
                            <th>
                                amount
                            </th>
                            <th>
                                Currency
                            </th>
                            <th>
                                Beneficiary
                            </th>
                            <th>
                                Type
                            </th>
                            <th>
                                Operator
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{$items->firstitem()+$key}}</td>
                                <td class="py-1">
                                    {{$item['created_at']}}
                                </td>
                                <td>
                                    {{$item['account_key']->user->name}}
                                </td>
                                <td>
                                    {{$item['sender']->name}}
                                </td>
                                <td>
                                    {{$item['amount']}}
                                </td>
                                <td>
                                    {{$item['currency']->code}}
                                </td>
                                <td>
                                    {{$item['beneficiary']->name}}
                                </td>
                                <td>
                                    {{$item['type']}}
                                </td>
                                <td>
                                    @if(!is_null($item['operator']))
                                        {{$item['operator']->name}}
                                    @endif

                                </td>
                                <td>
                                    @if($item['status']==\App\helpers\Constant::PENDING)
                                        <span class="badge badge-dark">{{$item['status']}}</span>
                                    @elseif($item['status']==\App\helpers\Constant::PROCESSING)
                                        <span class="badge badge-warning">{{$item['status']}}</span>
                                    @elseif($item['status']==\App\helpers\Constant::SUCCESS)
                                        <span class="badge badge-success">{{$item['status']}}</span>
                                    @else
                                        <span class="badge badge-danger">{{$item['status']}}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Resend</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            {!! $items->links() !!}
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
        </div>
    </div>
@endsection
