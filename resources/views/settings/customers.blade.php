@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Customers list</h4>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div class="btn-group">
                        {{--<button type="button" class="btn btn-primary btn-sm"
                                data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">
                            <i class="mdi mdi-plus-circle"></i>Add Operateur
                        </button>--}}

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone verified
                            </th>
                            <th>
                                Email verified
                            </th>
                            <th>
                                Status
                            </th>
                            <th>

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{$items->firstitem()+$key}}</td>
                                <td class="py-1">
                                    {{$item['name']}}
                                </td>
                                <td>
                                    {{$item['phone']}}
                                </td>
                                <td>
                                    {{$item['email']}}
                                </td>
                                <td>
                                    @if($item['is_phone_verified'])
                                        <span class="badge badge-success"><i class="mdi mdi-check-bold"></i></span>
                                    @else
                                        <span class="badge badge-danger"><i class="mdi mdi-close"></i></span>
                                    @endif
                                </td>
                                <td>
                                    @if($item['is_email_verified'])
                                        <span class="badge badge-success"><i class="mdi mdi-check-bold"></i></span>
                                    @else
                                        <span class="badge badge-danger"><i class="mdi mdi-close"></i></span>
                                    @endif
                                </td>
                                <td>
                                    @if($item['activate'])
                                        <span class="badge badge-success"><i class="mdi mdi-check-bold"></i></span>
                                    @else
                                        <span class="badge badge-danger"><i class="mdi mdi-close"></i></span>
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
                                            <a class="dropdown-item" href="#">Senders</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Beneficiares</a>
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
