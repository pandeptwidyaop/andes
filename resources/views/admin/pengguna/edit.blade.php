@extends('layouts.app',['_nav' => 'admin','_nav_active' => 'pengguna'])
    @section('content')
        @component('layouts.components.header')
            Pengguna
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('admin/pengguna')}}">Pengguna</a></li>
            <li class="breadcrumb-item">pradipta </li>
            <li class="breadcrumb-item active">Edit </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-6','title' => 'Edit : pradipta'])
                        <div class="form-group">
                          <label for="">Ormawa</label>
                          <select class="form-control">
                              @foreach (config('master.ormawa') as $key => $value)
                                  <option value="">{{$value['name']}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Periode</label>
                          <select class="form-control" name="">
                              @foreach (config('master.ormawa.0.periodes') as $key => $value)
                                  <option>{{$value}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Nama</label>
                          <input type="text" class="form-control" id="" placeholder=""  value="I Gede Pradipta Adi Nugraha">
                        </div>
                        <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" class="form-control" id="" placeholder=""  value="pradipta" disabled>
                        </div>
                        <div class="form-group">
                          <label for="">Pengurus Level</label>
                          <select class="form-control" name="">
                              @foreach (config('master.users') as $key => $value)
                                  <option>{{$value['level']}} - {{$key}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Reset Password</label>
                          <input type="text" class="form-control" id="" placeholder="">
                          <p class="help-block">Biarkan kosong jika tidak ingin mengubah.</p>
                      </div>
                      <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="">
                            <option>Active</option>
                            <option>Blocked</option>
                        </select>
                      </div>
                      <button type="button" class="btn btn-primary pull-right">Simpan</button>
                    @endcomponent
                    @include('admin.pengguna.periode')
                </div>
            </div>
        </section>
    @endsection
