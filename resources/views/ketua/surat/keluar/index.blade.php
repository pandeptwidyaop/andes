@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'surat'])
@section('content')
    @component('layouts.components.header')
        Surat Keluar
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('ketua')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Surat Keluar </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Surat Masuk'])
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Judul Surat</th>
                                <th>Nomor Surat</th>
                                <th>Catatan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (config('master.in_letters') as $key => $value)
                                <tr>
                                    <td>{{$value['date']}}</td>
                                    <td>{{$value['title']}}</td>
                                    <td>{{$value['number']}}</td>
                                    <td>{{$value['description']}}</td>
                                    <td><a href="{{url('ketua/surat/masuk/lihat')}}" data-toggle="modal" data-target="#modalSurat"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
    <div class="modal fade text-left" id="modalSurat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="">{{config('master.in_letters.0.title')}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
              <p>Tanggal Terima : {{config('master.in_letters.0.date')}}</p>
              <p>Nomor : {{config('master.in_letters.0.number')}}</p>
              <p>Catatan : {{config('master.in_letters.0.description')}}</p>
              <div class="row">
                  @foreach (config('master.in_letters.0.pictures') as $key => $value)
                      <div class="col-md-12">
                         <div style="padding:5px">
                             <a href="{{asset($value)}}">
                                  <img src="{{asset($value)}}" alt="" class="img-fluid">
                             </a>
                         </div>
                      </div>
                  @endforeach
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
