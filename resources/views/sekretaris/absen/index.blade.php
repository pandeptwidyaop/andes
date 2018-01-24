@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'absen'])
    @section('content')
        @component('layouts.components.header')
            Absen
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('sekretaris/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Absen </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Absensi'])
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Absen</button>
                        <br><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Judul Absen</th>
                                    <th colspan="3">Kehadiran</th>
                                    <th rowspan="2">User</th>
                                    <th rowspan="2">#</th>
                                </tr>
                                <tr>
                                    <th>H</th>
                                    <th>I</th>
                                    <th>A</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 Oktober 2017</td>
                                    <td>Rapat Perdana</td>
                                    <td>76</td>
                                    <td>1</td>
                                    <th>5</th>
                                    <td>{{config('master.users.sekretaris.name')}}</td>
                                    <td><a href="{{url('sekretaris/data-absen/view')}}" class="btn btn-primary btn-xs">
                                        Absen
                                    </a></td>
                                </tr>
                            </tbody>
                        </table>
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
