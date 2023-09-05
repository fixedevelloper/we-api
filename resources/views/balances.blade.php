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
                                Balance
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($balances as $balance)
                        <tr>
                            <td class="py-1">
                                {{$balance['merchant_name']}}
                            </td>
                            <td>
                                $ {{$balance['solde']}}
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

