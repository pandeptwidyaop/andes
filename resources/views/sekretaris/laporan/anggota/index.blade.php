@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'laporan'])
@section('content')
    @component('layouts.components.header')
        Laporan
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">Laporan Anggota</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title'=> 'Data Laporan Anggota'])
                    <button type="button" name="button" class="btn btn-primary"><i class="fa fa-download"></i> Download (*.xlsx)</button>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2"><center>
                                    NIM
                                </center></th>
                                <th rowspan="2"><center>
                                    Nama
                                </center></th>
                                <th colspan="3"><center>
                                    Keterangan
                                </center></th>
                                <th rowspan="2"><center>
                                    Detail
                                </center></th>
                            </tr>
                            <tr>
                                <td><center>
                                    Sakit
                                </center></td>
                                <td><center>
                                    Ijin
                                </center></td>
                                <td><center>
                                    Alpha
                                </center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (json_decode(config('master.members')) as $member)
                                <tr>
                                    <td>{{$member->nim}}</td>
                                    <td>{{$member->name}}</td>
                                    <td>{{str_split($member->nim)[6]}}</td>
                                    <td>{{str_split($member->nim)[7]}}</td>
                                    <td>{{str_split($member->nim)[8]}}</td>
                                    <th><a href="#">detail</a></th>
                                </tr>
                            @endforeach
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
