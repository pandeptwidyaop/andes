@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'rapat'])
@section('content')
    @component('layouts.components.header')
        Rapat
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">Data Rapat</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @for ($i=0; $i < 10; $i++)
                    @component('layouts.components.card',['class' => 'col-md-4','title' => 'Rapat Bulan '. Carbon\Carbon::now()->addMonths($i)->format('F')])
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...<br><br>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-sm">Lihat Hasil Rapat</button>
                        </div>
                    @endcomponent
                @endfor
            </div>
        </div>
    </section>
@endsection
