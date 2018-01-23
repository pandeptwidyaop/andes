@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'anggota'])
    @section('content')
        @component('layouts.components.header')
            Anggota
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Anggota </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
              <div class="alert alert-info">
                  Halaman pendaftaran anggota untuk ormawa <strong>HIMAPRODI Sistem Informasi</strong> periode <strong>2015/2016</strong> adalah : <a href="{{url("registrasi/himaprodi-sistem-informasi#2015-2016")}}">{{url("registrasi/himaprodi-sistem-informasi#2015-2016")}}</a> <br>
                  Untuk menonaktifkan halaman registrasi silakan <a href="#">klik disini.</a>
              </div>
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Anggota'])
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Anggota</button>
                        <br><br>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Handphone</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (json_decode(config('master.members')) as $member)
                                    <tr>
                                        <td>{{$member->nim}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->handphone}}</td>
                                        <td>{{$member->sex}}</td>
                                        <td>
                                            <a href="javascript:void();" onclick="editMember()"><i class="fa fa-edit"></i></a>
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
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
                 <h4 class="modal-title" id="">Edit Data Anggota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" class="form-control" id="" placeholder="" value="150030003" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                 <div class="form-group">
                   <label for="">Email</label>
                   <input type="email" class="form-control" id="" placeholder="">
                 </div>
                 <div class="form-group">
                   <label for="">Handphone</label>
                   <input type="text" class="form-control" id="" placeholder="">
                 </div>
                 <div class="form-group">
                   <label for="">Tanggal Lahir</label>
                   <input type="text" class="form-control" id="" placeholder="">
                 </div>
                 <div class="form-group">
                   <label for="">Jenis Kelamin</label>
                   <select class="form-control" name="">
                       <option value="">Pria</option>
                       <option value="">Wanita</option>
                   </select>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="name" rows="3" cols="80" class="form-control"></textarea>
                  </div>
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

            function editMember(){
                $("#editModal").modal('show');
            }
        </script>
    @endpush
