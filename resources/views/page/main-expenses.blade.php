@extends('layouts.app')

@section('page-title', 'Main Expenses')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm"
                        style="width: auto; height: 2rem; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-plus" style="margin-right: 0.5rem;"></i> Add Transaction
                    </button>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Id</th>
                                    <th>Transaction Date</th>
                                    <th>Frequency</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#2345</td>
                                    <td>4 September 2000</td>
                                    <td>Daily</td>
                                    <td>15.000</td>
                                    <td>Tuku Tahu Tek</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn btn-primary btn-sm"
                                            style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            style="width: 2rem; height: 2rem; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
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
