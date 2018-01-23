@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'rapat'])
@section('content')
    @component('layouts.components.header')
        Rapat
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('sekretaris/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Rapat </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Data Rapat'])
                    <form class="form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="">Judul Rapat</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                             <div class="form-group">
                               <label for="">Topik Pembahasan</label>
                               <input type="email" class="form-control" id="" placeholder="">
                             </div>
                             <div class="form-group">
                               <label for="">Hasil Rapat</label>
                               <textarea></textarea>
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
<<<<<<< HEAD
@push('script')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
@endpush
=======
>>>>>>> 044ac0351cd86b7a3003469304d4ced60fd9866c
