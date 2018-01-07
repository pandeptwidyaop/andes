<span class="heading">Main</span>
<ul class="list-unstyled">
          <li class="{{$nav_active == 'dashboard' ? 'active' : ''}}">
            <a href="{{asset('bendahara/dashboard')}}"> <i class="icon-home"></i>Home </a>
          </li>
          <li {{$nav_active == 'kas' ? 'active' : ''}}>
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
              <i class="icon-interface-windows"></i>Kas
            </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{asset('bendahara/kas')}}">Data Kas</a></li>
              <li><a href="{{asset('bendahara/tambah-kas')}}">Tambah Kas</a></li>
            </ul>
          </li>
          <li>
          <a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse">
            <i class="icon-interface-windows">
            </i>Pemasukan
          </a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
              <li><a href="{{asset('bendahara/pemasukan')}}">Data Pemasukan</a></li>
              <li><a href="{{asset('bendahara/tambah-pemasukan')}}">Tambah Pemasukan</a></li>
            </ul>
          </li>
          <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Pengeluaran </a>
            <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
              <li><a href="{{asset('bendahara/pengeluaran')}}">Data Pengeluaran</a></li>
              <li><a href="{{asset('bendahara/tambah-pengeluaran')}}">Tambah Pengeluaran</a></li>
            </ul>
          </li>
          <li> <a href="#"> <i class="icon-flask"></i>My Profile </a></li>
</ul>
