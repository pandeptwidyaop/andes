@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'pengurus'])
@section('content')
    @component('layouts.components.header')
        Pengurus
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item">Pengurus</li>
        <li class="breadcrumb-item active">Data Pengurus</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title'=> 'Data Pengurus'])
                    <a href="{{url('ketua/pengurus/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengurus</a>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Level Akses</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (config('master.users') as $key => $user)
                                @if ($key != 'admin')
                                    <tr>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$key}}</td>
                                        <td>{{$user['level']}}</td>
                                        <td><a href="#">edit</a> | <a href="#">hapus</a></td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
