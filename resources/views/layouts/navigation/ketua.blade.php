<span class="heading">Main Menu</span>
<ul class="list-unstyled">
    <li class="{{$nav_active == 'dashboard' ? 'active' : ''}}"><a href="{{url('ketua/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard </a></li>
    <li class="{{$nav_active == 'anggota' ? 'active' : ''}}"><a href="{{url('ketua/anggota')}}"><i class="fa  fa-users"></i>Anggota </a></li>
    <li class="{{$nav_active == 'rapat' ? 'active' : ''}}"><a href="{{url('ketua/rapat')}}"><i class="fa  fa-comments"></i>Rapat </a></li>
    <li class="{{$nav_active == 'surat' ? 'active' : ''}}">
        <a href="#suratDropdown" aria-expanded="false" data-toggle="collapse">
            <i class="fa fa-envelope"></i>Surat
        </a>
          <ul id="suratDropdown" class="collapse list-unstyled ">
            <li><a href="{{url('ketua/surat/masuk')}}">Surat Masuk</a></li>
            <li><a href="{{url('ketua/surat/keluar')}}">Surat Keluar</a></li>
          </ul>
    </li>
  <li class="{{$nav_active == 'laporan' ? 'active' : ''}}">
      <a href="#laporanDropdown" aria-expanded="false" data-toggle="collapse">
          <i class="fa fa-address-book-o"></i>Laporan
      </a>
        <ul id="laporanDropdown" class="collapse list-unstyled ">
          <li><a href="{{url('ketua/laporan/anggota')}}">Anggota</a></li>
          <li><a href="{{url('ketua/laporan/keuangan')}}">Keuangan</a></li>
        </ul>
  </li>
  <li class="{{$nav_active == 'pengurus' ? 'active' : ''}}">
      <a href="#penggunaDropdown" aria-expanded="false" data-toggle="collapse">
          <i class="fa fa-user"></i>Pengurus
      </a>
        <ul id="penggunaDropdown" class="collapse list-unstyled">
          <li><a href="{{url('ketua/pengurus')}}">Semua Pengurus</a></li>
          <li><a href="{{url('ketua/pengurus/create')}}">Tambah Pengurus</a></li>
        </ul>
  </li>
  <li class="{{$nav_active == 'profile' ? 'active' : ''}}"><a href="{{url('admin/profile')}}"><i class="fa fa-child"></i>My Profile </a></li>
</ul>
