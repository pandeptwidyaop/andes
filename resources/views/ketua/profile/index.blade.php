@extends('layouts.app',['_nav' => 'ketua', '_nav_active' => 'profile'])
@section('content')
    @component('layouts.components.header')
        My Profile
    @endcomponent
    @component('layouts.components.breadcrumb')
        <li class="breadcrumb-item active">My Profile </li>
    @endcomponent
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                @component('layouts.components.card',['class' => 'col-md-12','title' => 'My Profile Account'])
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" id="" placeholder="" value="{{config("master.users.ketua.name")}}">
                          </div>
                          <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" id="" placeholder="" value="{{config("master.users.ketua.username")}}">
                          </div>
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" class="form-control" id="" placeholder="" value="{{config("master.users.ketua.email")}}">
                            </div>
                            <div class="form-group">
                              <label for="">Tanggal Lahir</label>
                              <input type="text" class="form-control" id="" placeholder="" value="{{config("master.users.ketua.birthday")}}">
                            </div>
                            <div class="form-group">
                              <label for="">Handphone</label>
                              <input type="text" class="form-control" id="" placeholder="" value="{{config("master.users.ketua.phone")}}">
                            </div>
                            <div class="form-group">
                              <label for="">Alamat</label>
                              <textarea name="name" rows="8" cols="80" class="form-control">{{config("master.users.ketua.address")}}</textarea>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#passwordModal">Ganti Password</button>
                            <div class="modal fade text-left" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                              <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title" id="">Ganti Password</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="">Masukan Password</label>
                                        <input type="password" class="form-control" id="" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label for="">Masukan Kembali Pasword</label>
                                        <input type="password" class="form-control" id="" placeholder="">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ubah</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <button type="button" class="btn btn-primary pull-right">Simpan</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="avatar">
                                <img src="{{asset("img/".config("master.users.ketua.avatar"))}}" alt="..." class="img-fluid rounded-circle">
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#avatarModal">Ganti Foto</button>
                            <div class="modal fade text-left" id="avatarModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                              <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title" id="">Ganti Foto Profile</h4>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>

                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="">Pilih Gambar</label>
                                        <input type="file" class="form-control" id="" placeholder="" accept="image/*">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ubah</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
    </section>
@endsection
