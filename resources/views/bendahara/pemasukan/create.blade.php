@extends('layouts.app',['_nav' => 'bendahara','_nav_active' => 'pemasukan'])
@section('content')
    @component('layouts.components.header')
        Tambah Pemasukan
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('bendahara/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Pemasukan </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Data Pemasukan'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="">Nama Pemasukan</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                             <div class="form-group">
                               <label for="">Nominal</label>
                               <input type="number" class="form-control" id="" placeholder="">
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
