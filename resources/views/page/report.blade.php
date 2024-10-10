@extends('layouts.app')

@section('page-title', 'Report')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Transaction Date</th>
                                    <th>Frequency</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#2345</td>
                                    <td>Income</td>
                                    <td>4 September 2000</td>
                                    <td>Daily</td>
                                    <td>15.000</td>
                                    <td>Tuku Tahu Tek</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm float-right m-0">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
