@extends('layouts.app',['_nav' => 'ketua','_nav_active' => 'pengurus'])
@section('content')
    @component('layouts.components.header')
        Pengurus
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item">Pengurus</li>
        <li class="breadcrumb-item active">Tambah Pengurus</li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'Tambah Pengurus Baru'])
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Nama</label>
                              <select class="form-control" name="">
                                  @foreach (json_decode(config('master.members')) as $member)
                                      <option>{{$member->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Jabatan</label>
                              <select class="form-control" name="">
                                  @foreach (config('master.users') as $key => $member)
                                      @if ($key != 'admin' && $key != 'ketua')
                                          <option>{{$member['level']}}</option>
                                      @endif
                                  @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="text" class="form-control" id="" placeholder="" value="123456abcde">
                            </div>
                            <button type="button" class="btn btn-primary pull-right">
                                Create
                            </button>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
