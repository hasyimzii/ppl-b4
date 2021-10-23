@extends('layouts.app')

@section('title', 'Laporan Keuangan Outlet')
@section('content')
<div class="row page-titles mx-0" style="background: #343957;">
    <div class="col-sm-6 mt-1 p-md-0">
        <div class="welcome-text">
            <h4 class="text-white">Laporan Keuangan Outlet</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <a href="{{ route('report.index') }}">
            <button type="button" class="btn btn-light">
                Kembali
            </button>
        </a>
    </div>
</div>
<!-- row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Laporan</th>
                                <th>Total</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Penjualan</td>
                                <td>{{ $totalSale }}</td>
                                <td>
                                    <a href="{{ route('sale.list', $outlet->id) }}">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengeluaran</td>
                                <td>{{ $totalExpense }}</td>
                                <td>
                                    <a href="{{ route('expense.list', $outlet->id) }}">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr height="60">
                                <td>Pendapatan Bersih</td>
                                <td>
                                    @if($totalAll > 0)
                                        <div class="text-success">{{ $totalAll }}</div>
                                    @elseif($totalAll < 0)
                                        <div class="text-danger">{{ $totalAll }}</div>
                                    @else
                                        <div>{{ $totalAll }}</div>
                                    @endif
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection