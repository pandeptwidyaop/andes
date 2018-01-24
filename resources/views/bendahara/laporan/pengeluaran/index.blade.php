@extends('layouts.app',['_nav' => 'bendahara','_nav_active' => 'laporan'])
@section('content')
    @component('layouts.components.header')
        Laporan
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">Laporan Pengeluaran</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title'=> 'Data Laporan Pengeluaran'])
                    <button type="button" name="button" class="btn btn-primary"><i class="fa fa-download"></i> Download (*.xlsx)</button>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Bulan</th>
                                <th>Kas</th>
                                <th>Pengeluaran</th>
                                <th>Total</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Januari</td>
                                <td>Rp. 5.000.000</td>
                                <td>Rp. 1.000.000</td>
                                <td>Rp. 4.000.000</td>
                                <td><a href="#">detail</a></td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>Rp. 4.000.000</td>
                                <td>Rp. 1.000.000</td>
                                <td>Rp. 3.000.000</td>
                                <td><a href="#">detail</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th colspan="4">Total</th>
                            <th colspan="2">Rp. 3.000.000</th>
                        </tfoot>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
