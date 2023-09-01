@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Merchants list</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Merchant name
                            </th>
                            <th>
                                Key
                            </th>
                            <th>
                                Url
                            </th>
                            <th>
                                Callback
                            </th>
                            <th>
                                Status
                            </th>
                            <th>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($agents as $key=>$agent)
                        <tr>
                            <td>{{$agents->firstitem()+$key}}</td>
                            <td class="py-1">
                                {{$agent['name']}}
                            </td>
                            <td>
                                {{$agent['merchant_key']}}
                            </td>
                            <td>
                                {{$agent['url']}}
                            </td>
                            <td>
                                {{$agent['callback_url']}}
                            </td>
                            <td>
                                @if($agent['active'])
                                    <span class="badge badge-success"><i class="mdi mdi-check-bold"></i></span>
                                @else
                                    <span class="badge badge-danger"><i class="mdi mdi-alert-octagon"></i></span>

                                @endif
                            </td>
                            <td>

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
                            {!! $agents->links() !!}
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
        </div>
    </div>
@endsection
