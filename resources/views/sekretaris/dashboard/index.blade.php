@extends('layouts.app',['_nav'=>'sekretaris','_nav_active' => 'dashboard'])
@section('content')
    @component('layouts.components.header')
        Dashboard
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">Dashboard</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="alert alert-success">Selamat datang di Ormawa Manager. Organisasi anda <strong>HIMAPRODI Sistem Informasi</strong> periode <strong>2015/2016</strong>.</div>
        </div>
    </section>
@endsection
