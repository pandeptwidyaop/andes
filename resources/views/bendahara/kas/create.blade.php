@extends('layouts.app',['_nav' => 'bendahara'])
@section('content')
  @component('layouts.components.header')
      Tambah Kas
  @endcomponent

  @component('layouts.components.breadcrumb')
      <li class="breadcrumb-item"><a href="{{url('bendahara/kas')}}">Data Kas</a></li>
      <li class="breadcrumb-item active">Tambah Kas </li>
  @endcomponent
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-close">
              <div class="dropdown">
                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
              </div>
            </div>
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Tambah Kas</h3>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label class="form-control-label">Email</label>
                  <input type="email" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Password</label>
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" value="Signin" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
