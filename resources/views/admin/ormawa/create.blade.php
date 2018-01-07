@extends('layouts.app',['_nav' => 'admin','_nav_active' => 'ormawa'])
@section('content')
    @component('layouts.components.header')
        Ormawa
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('admin/ormawa')}}">Ormawa</a></li>
        <li class="breadcrumb-item active">Tambah Ormawa </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Manage : HIMAPRODI Sistem Informasi'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Nama Ormawa</label>
                                  <input type="text" class="form-control" id="" placeholder="" value="">
                                </div>
                                <div class="form-group">
                                  <label for="">Deskripsi Ormawa</label>
                                  <textarea name="desc" rows="8" cols="80" class="form-control">
                                  </textarea>
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
