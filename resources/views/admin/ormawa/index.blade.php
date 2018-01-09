@extends('layouts.app',['_nav' => 'admin','_nav_active' => 'ormawa'])
@section('content')
    @component('layouts.components.header')
        Ormawa
    @endcomponent

    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('admin/ormawa')}}">Ormawa</a></li>
        <li class="breadcrumb-item active">Semua Ormawa </li>
    @endcomponent

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Semua Ormawa'])
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Ormawa</th>
                                <th>Jumlah Angkatan</th>
                                <th>Jumlah Pengurus</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (config('master.ormawa') as $key => $value)
                                <tr>
                                    <td>{{$value['name']}}</td>
                                    <td>
                                        @foreach ($value['periodes'] as $index)
                                            {{$index}} <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($value['administrators'] as $index)
                                            {{$index}} akun <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{url('admin/ormawa/manage')}}"><i class="fa fa-pencil"></i> manage</a> | <a href=""><i class="fa fa-trash"></i> hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
@push('css')

@endpush
@push('script')

@endpush
@push('js')

@endpush
