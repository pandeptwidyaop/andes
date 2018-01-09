@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'surat'])
@section('content')
    @component('layouts.components.header')
        Surat Masuk
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('ketua')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Surat Masuk </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Surat Masuk'])

                @endcomponent
            </div>
        </div>
    </section>
@endsection
