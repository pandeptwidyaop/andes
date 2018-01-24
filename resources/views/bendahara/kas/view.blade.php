@extends('layouts.app',['_nav' => 'bendahara','_nav_active' => 'kas'])
    @section('content')
        @component('layouts.components.header')
            Kas Anggota
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('sekretaris/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kas </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Kas : Rapat Perdana'])

                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <td><h4>NIM</h4></td>
                                    <td><h4>Nama</h4></td>
                                    <td><h4>Lunas</h4></td>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>150030010</td>
                                <td>I Gede Pradipta Adi Nugraha</td>
                                <td><center><label class="radio-inline"><input type="checkbox" name="optradio"></center></label></td>
                              </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary pull-right" style="margin-right:35px;margin-top:10px">Simpan</button>
                    @endcomponent
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Absensi Kas'])
                      <p style="font-size:20px;margin-bottom:-5px">Anggota yang belum terdaftar pada pembayaran kas : Rapat Perdana</p>
                        <p style="font-size:15px">Centang untuk memasukkan anggota ke absen pembayaran.</p>

                        <table class="table table-bordered" id="table">
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
                              @for ($i=1; $i < 2; $i++)
                                @foreach (json_decode(config('master.members')) as $member)
                                    <tr>
                                        <td>{{$member->nim}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->handphone}}</td>
                                        <td>{{$member->sex}}</td>
                                        <td>
                                          <center><input class="form-check-input" style="margin-left:-4px" type="checkbox" id="inlineCheckbox1"></center>
                                        </td>
                                    </tr>
                                @endforeach
                              @endfor
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary pull-right" style="margin-right:35px;margin-top:10px">Simpan</button>
                    @endcomponent
                </div>
            </div>
        </section>
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
                var e = $("table").DataTable({
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
