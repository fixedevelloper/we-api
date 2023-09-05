@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Operators list</h4>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm"
                                data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">
                            <i class="mdi mdi-plus-circle"></i>Add Operateur
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
                                name
                            </th>
                            <th>
                                code
                            </th>
                            <th>
                                country
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
                                    {{$item['code']}}
                                </td>
                                <td>
                                    {{$item['country']->name}}
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
                    <h4 class="modal-title" id="mySmallModalLabel">ADD OPERATOR</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" name="name" type="text" id="name"
                                       required="" placeholder="MTN cameroon">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="code" class="form-label">Code</label>
                                <input class="form-control" name="code" type="text" id="code"
                                       required="" placeholder="EX: mtn-cm">
                            </div>
                            <div class="mb-3 col-md-6 ">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" name="country_id" type="text" id="country">
                                    <option>Select country</option>
                                    @foreach($countries as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
