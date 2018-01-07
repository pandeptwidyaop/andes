@extends('layouts.app',['_nav' => 'admin','_nav_active' => 'ormawa'])
    @section('content')
        @component('layouts.components.header')
            Ormawa
        @endcomponent
        @component('layouts.components.breadcrumb')
            <li class="breadcrumb-item"><a href="{{url('admin/ormawa')}}">Ormawa</a></li>
            <li class="breadcrumb-item">HIMAPRODI Sistem Informasi </li>
            <li class="breadcrumb-item active">Manage </li>
        @endcomponent
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Manage : HIMAPRODI Sistem Informasi'])
                        <form class="form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="">Nama Ormawa</label>
                                      <input type="text" class="form-control" id="" placeholder="" value="HIMAPRODI Sistem Informasi">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Deskripsi Ormawa</label>
                                      <textarea name="desc" rows="8" cols="80" class="form-control">
Sejarah HIMAPRODI SI
	Himpunan Mahasiswa Program Studi Sistem Informasi atau yang lebih familiar dengan sebutan HIMAPRODI SI adalah sebuah himpunan atau kumpulan mahasiswa STMIK STIKOM Bali yang mengambil program studi atau jurusan sistem informasi. HIMAPRODI SI sendiri terbentuk pada tanggal 7 Maret 2013 yang pada saat itu didirikan oleh Bagus Sentana dan kawan – kawan. Awalnya Bagus Sentana bermaksud untuk mendirikan sebuah Ormas (Organisasi Masyarakat Kampus) yang anggotanya hanya untuk mahasiswa Sistem Informasi saja. Namun karena karena ada saran dari Pembantu Ketua 3 saat itu untuk mengganti nama karena tidak etis rasanya membuat sebuah Ormas dengan latar belakang mahasiswa kampus. Dan akhirnya dirubahlah namanya menjadi KOMASI atau Komite Mahasiswa Sistem Informasi, namun nama ini juga tidak disetujui, akhirnya setelah rapat dengan para pendirinya saat itu akhirya terlintaslah nama yaitu Himpunan Mahasiswa Program Studi Sistem Informasi yang paten sampai saat ini.
Tujuan HIMAPRODI SI
1.	Membantu Prodi Sistem Informasi dalam akreditasi.

2.	Mengaktifkan kegiatan mahasiswa atau mahasiswi baik dari bidang akademik maupun non akademik bekerja sama dengan ormawa civitas Stikom Bali.

3.	Menumbuhkan rasa solidaritas antar mahasisw/i dari berbagai angkatan.
Sasaran HIMAPRODI SI
HIMAPRODI mengkhususkan diri kedalam bidang kegiatan akademis , minat & bakat, dan sosial pada semua mahasiswa sistem informasi , karena bisa diikuti laki-laki ataupun perempuan, serta menjadi wadah bagi mahasiswa STMIK STIKOM Bali untuk mengembangkan potensi mereka dalam Prodi Sistem Informasi.
Visi
Menjadi organisasi yang menjunjung tinggi Tri Dharma Perguruan Tinggi.
Misi
1.	Sebagai wadah untuk mahasiswa program studi sistem informasi dalam pengembangan bidang akademik dan non akademik.
2.	Sebagai perantara untuk mempererat hubungan silahturami antar mahasiswa/i program studi Sistem Informasi.
3.	Meningkatkan kegiatan kampus bagi mahasiswa/i Sistem Informasi dengan bekerja sama dengan ORMAWA dalam civitas kampus STIKOM Bali.
Semboyan HIMAPRODI SI
We are integrated to be the first

                                      </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endcomponent
                    @component('layouts.components.card',['class' => 'col-md-12','title' => 'Pengurus Ormawa : HIMAPRODI Sistem Informasi'])
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Periode</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (config('master.ormawa_member') as $key => $value)
                                    <tr>
                                        <td>{{$value['periode']}}</td>
                                        <td>{{$value['username']}}</td>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['position']}}</td>
                                        <td>
                                            <a href="{{url('admin/pengguna/manage')}}" class="btn btn-success btn-sm">Manage</a>
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
