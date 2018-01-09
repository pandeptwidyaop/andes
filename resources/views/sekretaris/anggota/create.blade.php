@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'anggota'])
@section('content')
    @component('layouts.components.header')
        Anggota
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('sekretaris/data-anggota')}}">Data Anggota</a></li>
        <li class="breadcrumb-item active">Tambah Anggota </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Anggota Ormawa'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" id="" placeholder="">
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
                                <button type="button"class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
