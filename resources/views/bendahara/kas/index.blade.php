@extends('layouts.app',['_nav' => 'bendahara','_nav_active' => 'kas'])
    @section('content')
        @component('layouts.components.header')
            Data Kas
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('bendahara/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kas </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Kas'])
                        <table class="table table-bordered" id="table">
                            <a href="{{url('bendahara/tambah-kas')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kas Anggota</a>
                            <br><br>
                            <thead>
                                <tr>
                                    <th rowspan="2"><center>Tanggal</center></th>
                                    <th rowspan="2"><center>Judul</center></th>
                                    <th rowspan="2">Nominal</th>
                                    <th colspan="2"><center>Pembayaran</center></th>
                                    <th rowspan="2">User</th>
                                    <th rowspan="2">Total</th>
                                    <th rowspan="2"><center>Opsi</center></th>
                                </tr>
                                <tr>
                                    <th>Bayar</th>
                                    <th>Belum bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 Oktober 2017</td>
                                    <td>Kas Rapat Perdana</td>
                                    <td>Rp. 10.000</td>
                                    <td>75</td>
                                    <td>8</td>
                                    <td>{{config('master.users.bendahara.name')}}</td>
                                    <td>Rp. 750.000</td>
                                    <td>
                                        <a href="{{url('bendahara/kas/view')}}" class="btn btn-primary btn-sm">Lihat</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endcomponent
                </div>
            </div>
          </section>
            <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title" id="">Edit Data Kas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="">Kas</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="">Nominal</label>
                        <input type="number" class="form-control" id="" placeholder="">
                      </div>
                     <div class="form-group">
                       <label for="">Tanggal</label>
                       <input type="text" class="form-control" id="" placeholder="">
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
    @endsection
    @push('css')
        <link rel="stylesheet" href="{{asset("vendor/datatable/style.css")}}">
        <link rel="stylesheet" href="{{asset("vendor/datatable/responsive.css")}}">
    @endpush
    @push('script')
        <script src="{{asset('vendor/datatable/js/jquery.dataTable.js')}}" charset="utf-8"></script>
        <script src="{{asset('vendor/datatable/js/dataTables.bootstraps4.js')}}" charset="utf-8"></script>
        <script src="{{asset('vendor/datatable/js/dataTable.responsive.min.js')}}" charset="utf-8"></script>
        <script src="{{asset('vendor/datatable/js/responsive.bootstraps4.js')}}" charset="utf-8"></script>
    @endpush
    @push('js')
        <script type="text/javascript">
            $(function(){
                var e = $("#table").DataTable({
                    responsive:{details:!1}});

                    $(document).on("sidebarChanged",function(){
                        e.columns.adjust(),
                        e.responsive.recalc(),
                        e.responsive.rebuild()
                    })
            });

            function editKas(){
                $("#editModal").modal('show');
            }
        </script>
    @endpush
