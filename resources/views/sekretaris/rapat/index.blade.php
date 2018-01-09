@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'rapat'])
    @section('content')
        @component('layouts.components.header')
            Absen
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('sekretaris/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Rapat </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Rapat'])
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th><center>Tanggal</center></th>
                                    <th><center>Judul Rapat</center></th>
                                    <th><center>Topik Pembahasan</center></th>
                                    <th><center>Hasil Rapat</center></th>
                                    <th><center>Opsi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>25 Januari 2017</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                        <td>
                                          <a href="javascript:void();" onclick="editRapat()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02 April 2017</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                        <td>
                                          <a href="javascript:void();" onclick="editRapat()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a>
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
                     <h4 class="modal-title" id="">Edit Data Rapat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="text" class="form-control" id="" placeholder="" value="150030003" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Judul Rapat</label>
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                     <div class="form-group">
                       <label for="">Topik Pembahasan</label>
                       <input type="email" class="form-control" id="" placeholder="">
                     </div>
                     <div class="form-group">
                       <label for="">Hasil Rapat</label>
                       <textarea class="form-control" id="" placeholder="" rows="5"></textarea>
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

            function editRapat(){
                $("#editModal").modal('show');
            }
        </script>
    @endpush
