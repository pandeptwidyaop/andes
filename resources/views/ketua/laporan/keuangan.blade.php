@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'laporan'])
@section('content')
    @component('layouts.components.header')
        Laporan
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">Laporan Keuangan</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title'=> 'Data Laporan Keuangan'])
                    <button type="button" name="button" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                    <button type="button"class="btn btn-success"><i class="fa fa-download"></i> Download (*.xlsx)</button>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Bulan</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Kas</th>
                                <th>Total</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td>Rp. 3.450.000</td>
                                <td>Rp. 450.000</td>
                                <td>Rp. 1.000.000</td>
                                <td>Rp. 4.900.000</td>
                                <td><a href="#">detail</a></td>
                            </tr>
                            <tr>
                                <td>January</td>
                                <td>Rp. 5.000.000</td>
                                <td>Rp. 1.000.000</td>
                                <td>Rp. 1.000.000</td>
                                <td>Rp. 5.000.000</td>
                                <td><a href="#">detail</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th colspan="4">Total</th>
                            <th colspan="2">Rp. 9.900.000</th>
                        </tfoot>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
