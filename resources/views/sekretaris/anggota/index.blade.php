@extends('layouts.app',['_nav' => 'sekretaris','_nav_active' => 'anggota'])
@section('content')
    @component('layouts.components.header')
        Anggota
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('sekretaris/data-anggota')}}">Anggota</a></li>
        <li class="breadcrumb-item active">Semua Anggota </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Semua Pengguna'])
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ormawa</th>
                                <th>Periode</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0; $i < 10; $i++)
                                @foreach (config('master.pengguna_data') as $key => $value)
                                    <tr>
                                        <th>{{$value['ormawa']}}</th>
                                        <th>{{$value['periode']}}</th>
                                        <th>{{$value['username']}}</th>
                                        <th>{{$value['name']}}</th>
                                        <th>{{$value['position']}}</th>
                                        <th>
                                            <a href="{{url('admin/pengguna/edit')}}"><i class="fa fa-pencil"></i> edit</a> | <a href="#"><i class="fa fa-trash"></i> hapus</a>
                                        </th>
                                    </tr>
                                @endforeach
                            @endfor
                        </tbody>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
