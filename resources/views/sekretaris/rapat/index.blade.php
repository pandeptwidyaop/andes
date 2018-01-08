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
                                          <a href="javascript:void();" onclick="editMember()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02 April 2017</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                        <td>
                                          <a href="javascript:void();" onclick="editMember()"><i class="fa fa-edit"></i></a>
                                          <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
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
