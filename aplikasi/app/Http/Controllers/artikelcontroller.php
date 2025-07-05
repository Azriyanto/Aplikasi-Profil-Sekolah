<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class artikelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $infoberita = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(3) // hanya ambil 3 data
                    ->get();

         $beritaterbaru = components::where('status', 'Artikel')
                    ->whereDate('created_at', Carbon::today())
                    ->take(4) // ganti 4 jika hanya ingin ambil 4 data
                    ->get();

        $trendingBerita = components::where('status', 'Artikel')->whereDate('created_at', Carbon::today())->pluck('nama')->toArray();
        $marqueeText = implode(' • ', $trendingBerita);

        return view('halaman.artikel', compact(['infoberita','marqueeText','beritaterbaru']));
    }

    public function artikeldata()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $artikeldate = components::where('status', 'Artikel')->get();
        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        return view('artikel.index', compact(['profildatauser','artikeldate','newsupdates'])); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        return view('artikel.create', compact(['profildatauser']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tujuan_upload = 'uploads/';
        // Check if foto is uploaded
         if ($request->hasFile('foto')) {
             $foto = $request->file('foto');
             $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->status. '.' . $foto->getClientOriginalExtension();
             $foto->move($tujuan_upload . 'foto-componen/', $nama_foto);
         } else {
             $nama_foto = 'default-foto.png';
         }

          $artikel = [
             'nama' => $request->nama,
             'konten' => $request->konten,
             'status' => $request->status,
             'foto' => $nama_foto,
         ];
         
       
            components::create($artikel);
            return redirect()->back()->with('success', 'Data berhasil disimpan!');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $artikeldate = components::orderBy('created_at', 'DESC')->get();
        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        return view('artikel.artikeledit', compact(['newsupdates','profildatauser','artikeldate']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, components $components)
    {
        if (Auth::user()->status == 'admin') {
                $data = [
                    'nama' => $request->nama,
                    'konten' => $request->konten,
                    'status' => $request->status,
                ];

                // Handle upload foto baru
                if ($request->hasFile('foto')) {
                    // Hapus foto lama jika ada
                    $path = public_path('uploads/foto-componen/' . $components->foto);
                    if (File::exists($path)) {
                        File::delete($path);
                    }

                    $foto_baru = $request->file('foto');
                    $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . preg_replace('/[^a-zA-Z0-9]/', '', $request->nama) . '.' . $foto_baru->getClientOriginalExtension();
                    $tujuan_upload = public_path('uploads/foto-componen/');
                    $foto_baru->move($tujuan_upload, $nama_foto);

                    $data['foto'] = $nama_foto;
                } else {
                    // Pakai foto lama
                    $data['foto'] = $request->foto_lama;
                }

                // Update ke database
                $components->update($data);

                return redirect()->back()->with('success', 'Data guru berhasil dirubah!!.');
            } else {
                abort(403);
            }
    }

     public function componentshapus(Request $request)
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $artikeldate = components::orderBy('created_at', 'DESC')->get();
        return view('artikel.hapusartikel', compact(['profildatauser','artikeldate']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(components $components)
    {
        $path = public_path('uploads/foto-componen/' . $components->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
        
            $components->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

     public function bulkDeletecomponent(Request $request)
    {
        if ($request->has('delete_all')) {
            // Hapus semua data
            $datacomponents = components::all();
        } elseif ($request->has('ids')) {
            // Hapus hanya data yang dipilih
            $datacomponents = components::whereIn('id', $request->ids)->get();
        } else {
            return redirect()->back()->with('error', 'Tidak ada data yang dipilih.');
        }

        foreach ($datacomponents as $data) {
            // Hapus file jika ada
            $fotoPaths = [
                public_path('uploads/foto-componen/' . $data->foto),
            ];

            foreach ($fotoPaths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            $data->delete();
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
