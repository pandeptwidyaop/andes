<span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="{{$nav_active == 'dashboard' ? 'active' : ''}}">
      <a href="{{asset('bendahara/dashboard')}}"> <i class="fa fa-dashboard"></i>Dashboard </a>
    </li>
    <li class="{{$nav_active == 'kas' ? 'active' : ''}}">
      <a href="#dropdownKas" aria-expanded="false" data-toggle="collapse">
        <i class="fa fa-group"></i>Kas
      </a>
      <ul id="dropdownKas" class="collapse list-unstyled ">
        <li><a href="{{asset('bendahara/kas')}}">Data Kas</a></li>
        <li><a href="{{asset('bendahara/tambah-kas')}}">Tambah Kas</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'pemasukan' ? 'active' : ''}}">
      <a href="#dropdownPemasukan" aria-expanded="false" data-toggle="collapse">
        <i class="fa fa-money">
        </i>Pemasukan
      </a>
      <ul id="dropdownPemasukan" class="collapse list-unstyled ">
        <li><a href="{{asset('bendahara/pemasukan')}}">Data Pemasukan</a></li>
        <li><a href="{{asset('bendahara/tambah-pemasukan')}}">Tambah Pemasukan</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'pengeluaran' ? 'active' : ''}}">
      <a href="#dropdownPengeluaran" aria-expanded="false" data-toggle="collapse">
      <i class="fa fa-money"></i>Pengeluaran </a>
      <ul id="dropdownPengeluaran" class="collapse list-unstyled ">
        <li><a href="{{asset('bendahara/pengeluaran')}}">Data Pengeluaran</a></li>
        <li><a href="{{asset('bendahara/tambah-pengeluaran')}}">Tambah Pengeluaran</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'laporan' ? 'active' : ''}}">
      <a href="#dropdownReport" aria-expanded="false" data-toggle="collapse">
        <i class="fa fa-paper-plane"></i>Laporan Keuangan
      </a>
      <ul id="dropdownReport" class="collapse list-unstyled ">
        <li><a href="{{asset('bendahara/laporan-kas')}}">Laporan Kas</a></li>
        <li><a href="{{asset('bendahara/laporan-pemasukan')}}">Laporan Pemasukan</a></li>
        <li><a href="{{asset('bendahara/laporan-pengeluaran')}}">Laporan Pengeluaran</a></li>
      </ul>
    </li>
    <li class="{{$nav_active == 'profile' ? 'active' : ''}}"> <a href="{{asset('bendahara/profile')}}"> <i class="icon-flask"></i>My Profile </a></li>
  </ul>
