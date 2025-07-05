<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pengumuman extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapengumuman = components::where('status', 'Pengumuman')->get();
        $infoberita = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(3) // hanya ambil 3 data
                    ->get();
        return view('halaman.Pengumuman', compact(['infoberita','datapengumuman']));
    }

    public function datapengumuman()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $datapengumuman = components::where('status', 'Pengumuman')->get();
        
        $newsupdates = components::where('status', 'Artikel')
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();

        return view('pengumuman.index', compact(['profildatauser','datapengumuman','newsupdates'])); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        return view('pengumuman.create', compact(['profildatauser']));
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

          $pengumuman = [
             'nama' => $request->nama,
             'konten' => $request->konten,
             'status' => $request->status,
             'foto' => $nama_foto,
         ];
         
       
            components::create($pengumuman);
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
