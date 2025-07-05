<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class perestasi extends Controller
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
        
        $prestasi = components::where('status', 'Prestasi')->orderBy('created_at', 'desc')->get();

        return view('halaman.Prestasi', compact(['infoberita','prestasi']));
    }

     public function dataprestasi()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $dataprestasi = components::where('status', 'Prestasi')->get();

        $newsupdates = components::where('status', 'Artikel')
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();

        return view('prestasi.index', compact(['profildatauser','dataprestasi','newsupdates'])); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        return view('prestasi.create', compact(['profildatauser']));
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

          $dataprestasi = [
             'nama' => $request->nama,
             'konten' => $request->konten,
             'status' => $request->status,
             'foto' => $nama_foto,
         ];
         
       
            components::create($dataprestasi);
            return redirect()->back()->with('success', 'Data berhasil disimpan!');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
