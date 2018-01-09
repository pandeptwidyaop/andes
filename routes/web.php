<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
====================================================
              ADMIN dan KETUA
====================================================
*/
Route::get('/', function () {
    return redirect('/admin');;
});
Route::get('/admin', function(){
    return redirect('/admin/ormawa');
});
Route::get('/admin/ormawa', function(){
    return view("admin.ormawa.index");
});

Route::get('/admin/ormawa/manage', function(){
    return view('admin.ormawa.manage');
});

Route::get('/admin/ormawa/create', function(){
    return view('admin.ormawa.create');
});

Route::get('/admin/pengguna', function(){
    return view('admin.pengguna.index');
});

Route::get("/admin/pengguna/edit", function(){
    return view('admin.pengguna.edit');
});

Route::get("/admin/pengguna/create", function(){
    return view('admin.pengguna.create');
});

Route::get("/admin/profile", function(){
    return view('admin.profile.index');
});

Route::get('/ketua', function(){
    return redirect('ketua/dashboard');
});

Route::get("ketua/dashboard", function(){
    return view('ketua.dashboard.index');
});

Route::get('ketua/anggota', function(){
    return view('ketua.anggota.index');
});

Route::get('ketua/anggota/edit', function(){
    return view('ketua.anggota.edit');
});

Route::get('ketua/rapat', function(){
    return view('ketua.rapat.index');
});

/*
====================================================
              BENDAHARA dan SEKRETARIS
====================================================
*/

Route::get('/bendahara', function(){
  return redirect('/bendahara/dashboard');
});
Route::get('/bendahara/dashboard', function(){
  return view('bendahara.dashboard.index');
});
Route::get('/bendahara/kas', function(){
  return view('bendahara.kas.index');
});
Route::get('/bendahara/tambah-kas', function(){
  return view('bendahara.kas.create');
});
Route::get('/bendahara/pemasukan', function(){
  return view('bendahara.pemasukan.index');
});
Route::get('/bendahara/tambah-pemasukan', function(){
  return view('bendahara.pemasukan.create');
});
Route::get('/bendahara/pengeluaran', function(){
  return view('bendahara.pengeluaran.index');
});
Route::get('/bendahara/tambah-pengeluaran', function(){
  return view('bendahara.pengeluaran.index');
});
Route::get('/bendahara/profile', function(){
  return view('bendahara.profile.index');
});



Route::get('/sekretaris', function(){
  return redirect('sekretaris/dashboard');
});
Route::get('/sekretaris/dashboard', function(){
  return view('sekretaris.dashboard.index');
});
Route::get('/sekretaris/data-anggota', function(){
  return view('sekretaris.anggota.index');
});
Route::get('/sekretaris/tambah-anggota', function(){
  return view('sekretaris.anggota.create');
});
Route::get('/sekretaris/data-absen', function(){
  return view('sekretaris.absen.index');
});
Route::get('/sekretaris/tambah-absen', function(){
  return view('sekretaris.absen.create');
});
Route::get('/sekretaris/data-rapat', function(){
  return view('sekretaris.rapat.index');
});
Route::get('/sekretaris/tambah-data-rapat', function(){
  return view('sekretaris.rapat.create');
});
Route::get('/sekretaris/surat-masuk', function(){
  return view('sekretaris.received-letter.index');
});
Route::get('/sekretaris/tambah-surat-masuk', function(){
  return view('sekretaris.received-letter.create');
});
Route::get('/sekretaris/surat-keluar', function(){
  return view('sekretaris.sent-letter.index');
});
Route::get('/sekretaris/tambah-surat-keluar', function(){
  return view('sekretaris.sent-letter.create');
});
Route::get('/sekretaris/profile', function(){
  return view('sekretaris.profile.index');
});

/*
====================================================
              End Of BENDAHARA dan SEKRETARIS
====================================================
*/
