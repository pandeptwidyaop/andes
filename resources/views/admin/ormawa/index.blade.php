@extends('layouts.app',['_nav' => 'admin'])
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
