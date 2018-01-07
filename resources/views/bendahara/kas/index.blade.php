@extends('layouts.app',['_nav' => 'bendahara'])
@section('content')
    @component('layouts.components.header')
        Kas
    @endcomponent

    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item"><a href="{{url('bendahara/kas')}}">Kas</a></li>
        <li class="breadcrumb-item active">Data Kas </li>
    @endcomponent

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Data Kas'])
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kegiatan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
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
