<span class="heading">Main</span>
<ul class="list-unstyled">
    <li class="{{$nav_active == 'dashboard' ? 'active' : ''}}"><a href="{{asset('sekretaris/dashboard')}}"> <i class="fa fa-dashboard"></i>Dashboard </a></li>
    <li class="{{$nav_active == 'anggota' ? 'active' : ''}}">
      <a href="#dropdownAnggota" aria-expanded="false" data-toggle="collapse"><i class="fa fa-users"></i>Anggota </a>
      <ul id="dropdownAnggota" class="collapse list-unstyled ">
        <li><a href="{{asset('sekretaris/data-anggota')}}">Data Anggota</a></li>
        <li><a href="{{asset('sekretaris/tambah-anggota')}}">Tambah Anggota</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'absen' ? 'active' : ''}}">
      <a href="#dropdownAbsen" aria-expanded="false" data-toggle="collapse"><i class="fa fa-user-md"></i>Absen </a>
      <ul id="dropdownAbsen" class="collapse list-unstyled ">
        <li><a href="{{asset('sekretaris/data-absen')}}">Data Absen</a></li>
        <li><a href="{{asset('sekretaris/tambah-absen')}}">Tambah Absen</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'rapat' ? 'active' : ''}}">
      <a href="#dropdownRapat" aria-expanded="false" data-toggle="collapse"><i class="fa fa-comments"></i>Rapat </a>
      <ul id="dropdownRapat" class="collapse list-unstyled ">
        <li><a href="{{asset('sekretaris/data-rapat')}}">Data Rapat</a></li>
        <li><a href="{{asset('sekretaris/tambah-data-rapat')}}">Tambah Data Rapat</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'received-letter' ? 'active' : ''}}">
      <a href="#dropdownSuratMasuk" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-newspaper-o"></i>Surat Masuk </a>
      <ul id="dropdownSuratMasuk" class="collapse list-unstyled ">
        <li><a href="{{asset('sekretaris/surat-masuk')}}">Data Surat Masuk</a></li>
        <li><a href="{{asset('sekretaris/tambah-surat-masuk')}}">Tambah Surat Masuk</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'sent-letter' ? 'active' : ''}}">
      <a href="#dropdownSuratKeluar" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-newspaper-o"></i>Surat Keluar </a>
      <ul id="dropdownSuratKeluar" class="collapse list-unstyled ">
        <li><a href="{{asset('sekretaris/surat-keluar')}}">Data Surat Keluar</a></li>
        <li><a href="{{asset('sekretaris/tambah-surat-keluar')}}">Tambah Surat Keluar</a></li>
    </ul>
  </li>
  <li class="{{$nav_active == 'laporan' ? 'active' : ''}}">
    <a href="#dropdownLaporan" aria-expanded="false" data-toggle="collapse"><i class="fa fa-paper-plane"></i>Laporan </a>
    <ul id="dropdownLaporan" class="collapse list-unstyled ">
      <li><a href="{{asset('sekretaris/laporan-anggota')}}">Laporan Absen Anggota</a></li>
      <li><a href="{{asset('sekretaris/laporan-surat-masuk')}}">Laporan Surat Masuk</a></li>
      <li><a href="{{asset('sekretaris/laporan-surat-keluar')}}">Laporan Surat Keluar</a></li>
    </ul>
  </li>
  <li class="{{$nav_active == 'profile' ? 'active' : ''}}"><a href="{{url('sekretaris/profile')}}"><i class="fa fa-child"></i>My Profile </a></li>
</ul>
