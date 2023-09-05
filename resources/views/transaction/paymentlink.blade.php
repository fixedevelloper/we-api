@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Payment links</h4>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm"
                                data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">
                            <i class="mdi mdi-plus-circle"></i>Add PaymentLink
                        </button>

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
                                Amount
                            </th>
                            <th>
                                Link
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
                                    {{$item['amount']}} {{$item['currency']->code}}
                                </td>
                                <td>
                                    <a href="{{$item['url']}}" target="_blank">Link</a>
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
                            {!! $items->links() !!}
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">ADD Payment link</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" name="name" type="text" id="name"
                                       required="" placeholder="Payment store">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="amount" class="form-label">Amount</label>
                                <input class="form-control" name="amount" type="text" id="amount"
                                       required="" placeholder="EX:12.69">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="currency_id" class="form-label">Currency</label>
                                <select class="form-select" name="currency_id" type="text" id="currency_id">
                                    <option>Select currency</option>
                                    @foreach($currencies as $item)
                                        <option value="{{$item->id}}">{{$item->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 d-grid text-center">
                            <button class="btn btn-success" type="submit"> Enregistrer </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
