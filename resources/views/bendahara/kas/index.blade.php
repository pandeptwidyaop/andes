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
                            <thead>
                                <tr>
                                    <th><center>Kas</center></th>
                                    <th><center>Nominal</center></th>
                                    <th><center>Tanggal</center></th>
                                    <th><center>Opsi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Pelatihan Ormawa</td>
                                        <td>550000</td>
                                        <td>25 Desember 2017</td>
                                        <td>
                                          <center><a href="javascript:void();" onclick="editKas()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bazzar</td>
                                        <td>5500000</td>
                                        <td>10 Januari 2018</td>
                                        <td>
                                          <center><a href="javascript:void();" onclick="editKas()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a></center>
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
