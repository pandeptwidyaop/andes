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

Route::get('/', function () {
    return redirect('/admin');;
});
Route::get('/admin', function(){
    return redirect('/admin/ormawa');
});
Route::get('/admin/ormawa', function(){
    return view("admin.ormawa.index");
});


/*
====================================================
              BENDAHARA dan SEKRETARIS
====================================================
*/

Route::get('/bendahara/dashboard', function(){
  return view('bendahara.dashboard.index');
});
Route::get('/bendahara/kas', function(){
  return view('bendahara.kas.index');
});
Route::get('/bendahara/pemasukan', function(){
  return view('bendahara.pemasukan.index');
});
Route::get('/bendahara/pengeluaran', function(){
  return view('bendahara.pengeluaran.index');
});


Route::get('/sekretaris/dashboard', function(){
  return view('sekretaris.dashboard.index');
});
Route::get('/sekretaris/anggota', function(){
  return view('sekretaris.anggota.index');
});
Route::get('/sekretaris/absen', function(){
  return view('sekretaris.absen.index');
});
Route::get('/sekretaris/rapat', function(){
  return view('sekretaris.rapat.index');
});
Route::get('/sekretaris/surat-masuk', function(){
  return view('sekretaris.surat.surat-masuk');
});
Route::get('/sekretaris/surat-keluar', function(){
  return view('sekretaris.surat.surat-keluar');
});

/*
====================================================
              End Of BENDAHARA dan SEKRETARIS
====================================================
*/
