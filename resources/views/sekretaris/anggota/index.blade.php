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
                  <table class="table" id="table">
                      <thead>
                          <tr>
                              <th>NIM</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Handphone</th>
                              <th>Jenis Kelamin</th>
                              <th>Opsi</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach (json_decode(config('master.members')) as $member)
                              <tr>
                                  <td>{{$member->nim}}</td>
                                  <td>{{$member->name}}</td>
                                  <td>{{$member->email}}</td>
                                  <td>{{$member->handphone}}</td>
                                  <td>{{$member->sex}}</td>
                                  <td>
                                      <a href="javascript:void();" onclick="editMember()"><i class="fa fa-edit"></i></a>
                                      <a href="#"><i class="fa fa-trash"></i></a>
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
