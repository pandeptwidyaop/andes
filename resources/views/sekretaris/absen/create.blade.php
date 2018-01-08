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
                  @component('layouts.components.card',['class' => 'col-md-12','title' => 'Buat Absen'])
                    <form>
                      <div class="row">
                        <div class="">
                          <label><b>Judul Absen</b></label>
                          <input type="text" class="form-control" style="">
                        </div>
                        <label style="margin-right:15px"></label>
                        <div class="">
                          <label><b>Tanggal</b></label>
                          <input type="text" class="form-control" style="">
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary pull-right" style="margin-right:35px;margin-top:10px">Simpan</button>
                    </form>
                  @endcomponent
                </div>
            </div>
        </section>
      @endsection
