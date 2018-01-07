<span class="heading">Main Menu</span>
<ul class="list-unstyled">
  <li class="{{$nav_active == 'ormawa' ? 'active' : ''}}">
      <a href="#ormawaDropdown" aria-expanded="false" data-toggle="collapse">
          <i class="fa fa-users"></i>
          Ormawa
      </a>
        <ul id="ormawaDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('admin/ormawa')}}">Semua Ormawa</a></li>
          <li><a href="{{url('admin/ormawa/create')}}">Tambah Ormawa</a></li>
        </ul>
  </li>
  <li {{$nav_active == 'pengguna' ? 'active' : ''}}>
      <a href="#penggunaDropdown" aria-expanded="false" data-toggle="collapse">
          <i class="fa fa-user"></i>
          Pengguna
      </a>
        <ul id="penggunaDropdown" class="collapse list-unstyled">
          <li><a href="{{url('admin/pengguna')}}">Semua Pengguna</a></li>
          <li><a href="{{url('admin/pengguna/create')}}">Tambah Pengguna</a></li>
        </ul>
  </li>
  <li {{$nav_active == 'profile' ? 'active' : ''}}><a href="#"><i class="fa fa-child"></i>My Profile </a></li>
</ul>
