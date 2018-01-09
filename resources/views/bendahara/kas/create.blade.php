@extends('layouts.app',['_nav' => 'bendahara','_nav_active' => 'kas'])
@section('content')
    @component('layouts.components.header')
        Tambah Kas
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('bendahara/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Kas </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Data Kas'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Kas</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="">Nominal</label>
                                <input type="number" class="form-control" id="" placeholder="">
                              </div>
                             <div class="form-group">
                               <label for="">Tanggal</label>
                               <input type="text" class="form-control" id="" placeholder="">
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
