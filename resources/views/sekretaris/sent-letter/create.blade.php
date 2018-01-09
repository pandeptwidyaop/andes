@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'sent-letter'])
@section('content')
    @component('layouts.components.header')
        Surat Keluar
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('sekretaris/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Surat Keluar </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Data Surat Keluar'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Perihal Surat</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="">Nomor Surat</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                             <div class="form-group">
                               <label for="">Dokumentasi Surat</label>
                               <input type="file" class="form-control" id="" placeholder="">
                             </div>
                             <div class="form-group">
                               <label for="">Deskripsi</label>
                               <textarea class="form-control" id="" placeholder="" rows="5"></textarea>
                             </div>
                                <button type="button"class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
