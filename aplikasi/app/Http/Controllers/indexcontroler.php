<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bener;
use App\Models\components;
use App\Models\dataguru;
use App\Models\murid;
use Carbon\Carbon;
use Illuminate\Http\Request;

class indexcontroler extends Controller
{
    public function index()
    {
        $jumlahMuridBaru = murid::where('status', 'Murid Baru')->count();
        $jumlahMuridlulus = murid::where('status', 'Murid Lulus')->count();

        $jumlahguru = dataguru::orderBy('created_at', 'DESC')->count();
        $dataguru = dataguru::orderBy('created_at', 'DESC')->get();
        $dataartikel = components::where('status', 'Artikel')->orderBy('created_at', 'DESC')->get();
        $datapengumuman = components::where('status', 'Pengumuman')->orderBy('created_at', 'DESC')->get();
        $dataprestasi = components::where('status', 'Prestasi')->orderBy('created_at', 'DESC')->get();
        $dataketerampilan = components::where('status', 'Keterampilan')->orderBy('created_at', 'DESC')->get();
        $datagaleri = components::where('status', 'Galeri Kegiatan')->orderBy('created_at', 'DESC')->get();

        $databener = bener::orderBy('created_at', 'DESC')->get();

        $duaHariLalu = Carbon::now()->subDays(1);
        $datanews = components::whereIn('status', ['Artikel','Pengumuman','Galeri Kegiatan'])
            ->where('created_at', '>=', $duaHariLalu)
            ->latest()
            ->take(4) // ambil maksimal 4 berita
            ->get();

        $infoberita = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(3) // hanya ambil 3 data
                    ->get();

        return view('welcom.index', compact(['databener','jumlahMuridBaru','jumlahMuridlulus','dataguru','jumlahguru','dataartikel','datapengumuman','dataprestasi','dataketerampilan','datagaleri','datanews','infoberita']));
    }

    public function showcomponen(components $components)
    {
        $infoberita = components::where('status', 'Artikel')
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();

        return view('showcomponen', [
            'componen' => $components,
            'infoberita' => $infoberita
        ]);
    }
}
