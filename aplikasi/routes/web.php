<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroler;
use App\Http\Controllers\visiisi;
use App\Http\Controllers\struktursekolah;
use App\Http\Controllers\sambutan;
use App\Http\Controllers\perestasi;
use App\Http\Controllers\pengumuman;
use App\Http\Controllers\keterampilan;
use App\Http\Controllers\gurudanstaf;
use App\Http\Controllers\fasilitas;
use App\Http\Controllers\elearning;
use App\Http\Controllers\agendasekolah;
use App\Http\Controllers\Controllerdataguru;
use App\Http\Controllers\datasiswa;
use App\Http\Controllers\profiladmin;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\indexcontroler::class, 'index'])->name('home');
Route::get('visimisi', [App\Http\Controllers\visiisi::class, 'index'])->name('visimisi');
Route::get('struktur', [App\Http\Controllers\struktursekolah::class, 'index'])->name('struktur');
Route::get('sambutan', [App\Http\Controllers\sambutan::class, 'index'])->name('sambutan');
Route::get('prestasi', [App\Http\Controllers\perestasi::class, 'index'])->name('prestasi');
Route::get('pengumuman', [App\Http\Controllers\pengumuman::class, 'index'])->name('pengumuman');
Route::get('keterampilan', [App\Http\Controllers\keterampilan::class, 'index'])->name('keterampilan');
Route::get('gurudanstaf', [App\Http\Controllers\gurudanstaf::class, 'index'])->name('gurudanstaf');
Route::get('fasilitas', [App\Http\Controllers\fasilitas::class, 'index'])->name('fasilitas');
Route::get('elearning', [App\Http\Controllers\elearning::class, 'index'])->name('elearning');
Route::get('agendasekolah', [App\Http\Controllers\agendasekolah::class, 'index'])->name('agendasekolah');
// SPMB
Route::get('spmb', [App\Http\Controllers\spmbslbn::class, 'index'])->name('spmb');
Route::post('simpandata', [App\Http\Controllers\spmbslbn::class, 'store']);

// Artikel Halaman
Route::get('artikel', [App\Http\Controllers\artikelcontroller::class, 'index'])->name('artikel');

//componen
Route::get('showdata/{components}', [App\Http\Controllers\indexcontroler::class, 'showcomponen'])->name('showcomponen');

// pembuatan akun
Route::get('login', [App\Http\Controllers\login::class, 'index'])->name('login');
Route::get('daftar', [App\Http\Controllers\login::class, 'daftar'])->name('daftar');  
Route::post('login', [App\Http\Controllers\login::class, 'login']);
Route::post('daftarmurid', [App\Http\Controllers\login::class, 'store']);  

// rout yang sudah login saja yang bisa akses
Route::middleware(['auth'])->group(function(){
Route::get('dasboard', [App\Http\Controllers\homdasboard::class, 'index'])->name('dasboard');
Route::get('logout', [App\Http\Controllers\login::class, 'logout']);

//artikel 
Route::get('dataartikel', [App\Http\Controllers\artikelcontroller::class, 'artikeldata'])->name('dataartikel');
Route::get('tambahartikel', [App\Http\Controllers\artikelcontroller::class, 'create'])->name('tambahartikel');
Route::post('artikelsimpan', [App\Http\Controllers\artikelcontroller::class, 'store']);
Route::get('artikeledit', [App\Http\Controllers\artikelcontroller::class, 'show']);
Route::put('/updatecomponets/{components}', [App\Http\Controllers\artikelcontroller::class, 'update'])->name('datacomponents.update');
Route::delete('/hapuscomponents/{components}', [App\Http\Controllers\artikelcontroller::class, 'destroy'])->name('datacomponents.destroy');
Route::get('componentsdatahapus', [App\Http\Controllers\artikelcontroller::class, 'componentshapus'])->name('hapus.datacomponents');
Route::delete('/components/bulk-delete', [App\Http\Controllers\artikelcontroller::class, 'bulkDeletecomponent'])->name('components.bulk-delete');

// pengumuman
Route::get('datapengumuman', [App\Http\Controllers\pengumuman::class, 'datapengumuman'])->name('datapengumuman');
Route::get('tambahpengumuman', [App\Http\Controllers\pengumuman::class, 'create'])->name('tambahpengumuman');
Route::post('pengumumansimpan', [App\Http\Controllers\pengumuman::class, 'store']);

// Prestasi
Route::get('dataprestasi', [App\Http\Controllers\perestasi::class, 'dataprestasi'])->name('dataprestasi');
Route::get('tambahprestasi', [App\Http\Controllers\perestasi::class, 'create'])->name('tambahprestasi');
Route::post('prestasisimpan', [App\Http\Controllers\perestasi::class, 'store']);

// keterampilan
Route::get('dataketerampilan', [App\Http\Controllers\keterampilan::class, 'dataketerampilan'])->name('dataketerampilan');
Route::get('tambahketerampilan', [App\Http\Controllers\keterampilan::class, 'create'])->name('tambahketerampilan');
Route::post('keterampilansimpan', [App\Http\Controllers\keterampilan::class, 'store']);

// Galeri kegiatan
Route::get('galerikegiatan', [App\Http\Controllers\Controllergalerikegiatan::class, 'index'])->name('galerikegiatan');
Route::get('tambahgalerikegiatan', [App\Http\Controllers\Controllergalerikegiatan::class, 'create'])->name('tambahkegiatan');
Route::post('galerikegiatansimpan', [App\Http\Controllers\Controllergalerikegiatan::class, 'store']);


//Guru 
Route::get('creatguru', [App\Http\Controllers\Controllerdataguru::class, 'create'])->name('creatguru');
Route::post('storeguru', [App\Http\Controllers\Controllerdataguru::class, 'store']);
Route::get('editdataguru', [App\Http\Controllers\Controllerdataguru::class, 'editdata']);
Route::put('/dataguru/{dataguru}', [App\Http\Controllers\Controllerdataguru::class, 'update'])->name('dataguru.update');
Route::delete('/dataguru/{dataguru}', [App\Http\Controllers\Controllerdataguru::class, 'destroy'])->name('dataguru.destroy');

//Bener
Route::get('databener', [App\Http\Controllers\ControllerBener::class, 'index'])->name('databener');
Route::get('creatbener', [App\Http\Controllers\ControllerBener::class, 'create'])->name('creatbener');
Route::post('storebener', [App\Http\Controllers\ControllerBener::class, 'store']);
Route::get('editbener', [App\Http\Controllers\ControllerBener::class, 'edit']);
Route::put('/editbener/{bener}', [App\Http\Controllers\ControllerBener::class, 'update'])->name('databener.update');
Route::delete('/hapusbener/{bener}', [App\Http\Controllers\ControllerBener::class, 'destroy'])->name('databener.destroy');


// data siswa
Route::get('spmbmurid', [App\Http\Controllers\datasiswa::class, 'spmbmurid']);
Route::get('muridlulus', [App\Http\Controllers\datasiswa::class, 'muridlulus']);
Route::get('alumni', [App\Http\Controllers\datasiswa::class, 'alumni']);
Route::get('create', [App\Http\Controllers\datasiswa::class, 'create']);
Route::post('post', [App\Http\Controllers\datasiswa::class, 'store']);
Route::post('butuhankusus',[App\Http\Controllers\datasiswa::class, 'kebutuhankusus'])->name('kebutuhan-kusus');
Route::delete('/datasiswa/{datamurid}', [App\Http\Controllers\datasiswa::class, 'destroy'])->name('datasiswa.destroy');
Route::delete('/murid/bulk-delete', [App\Http\Controllers\datasiswa::class, 'bulkDelete'])->name('murid.bulk-delete');
Route::get('muridhapus', [App\Http\Controllers\datasiswa::class, 'cekhapus'])->name('hapus.data');
Route::get('muridedit', [App\Http\Controllers\datasiswa::class, 'cekedit'])->name('edit.data');
Route::put('/murid/{datasiswa}', [App\Http\Controllers\datasiswa::class, 'update'])->name('users.update');
Route::get('/murid/{id}/cetak', [App\Http\Controllers\datasiswa::class,'cetak'])->name('murid.cetak');
Route::get('/edit/{id}/data', [App\Http\Controllers\datasiswa::class,'edit'])->name('murid.edit');
Route::get('/murid/printlaporan', [App\Http\Controllers\datasiswa::class,'printlaporan'])->name('printlaporan.cetak');



Route::resources([
        'profil'        => profiladmin::class,
        'datasiswa'     => datasiswa::class,
        'dataguru'      => Controllerdataguru::class,
    ]);

});

