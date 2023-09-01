@extends('base')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Balances</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Merchant name
                            </th>
                            <th>
                                Total send
                            </th>
                            <th>
                                Total receive
                            </th>
                            <th>
                                Balance
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="py-1">
                               Merchant default
                            </td>
                            <td>
                                $ 78.99
                            </td>
                            <td>
                                $ 83.99
                            </td>
                            <td>
                                $ 77.99
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                Merchant 2
                            </td>
                            <td>
                                $ 78.99
                            </td>
                            <td>
                                $ 365.99
                            </td>
                            <td>
                                $ 249.99
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

