<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\dataguru;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Controllerdataguru extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $guru = dataguru::orderBy('created_at', 'DESC')->get();

        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        return view('guru.index', compact(['profildatauser','guru','newsupdates']));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();
        return view('guru.creatguru', compact(['profildatauser']));
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
             $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $foto->getClientOriginalExtension();
             $foto->move($tujuan_upload . 'foto-guru/', $nama_foto);
         } else {
             $nama_foto = 'default-foto.png';
         }

          $guru = [
             'nama' => $request->nama,
             'nip' => $request->nip,
             'jabatan' => $request->jabatan,
             'status' => $request->status,
             'foto' => $nama_foto,
         ];
       
            dataguru::create($guru);
            return redirect()->back()->with('success', 'Data guru berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    

     public function editdata()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $guru = dataguru::orderBy('created_at', 'DESC')->get();
        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        return view('guru.editdata', compact(['profildatauser','guru','newsupdates']));
    }

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
    public function update(Request $request, dataguru $dataguru)
    {
            if (Auth::user()->status == 'admin') {
                $data = [
                    'nama' => $request->nama,
                    'nip' => $request->nip,
                    'jabatan' => $request->jabatan,
                    'status' => $request->status,
                ];

                // Handle upload foto baru
                if ($request->hasFile('foto')) {
                    // Hapus foto lama jika ada
                    $path = public_path('uploads/foto-guru/' . $dataguru->foto);
                    if (File::exists($path)) {
                        File::delete($path);
                    }

                    $foto_baru = $request->file('foto');
                    $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . preg_replace('/[^a-zA-Z0-9]/', '', $request->nama) . '.' . $foto_baru->getClientOriginalExtension();
                    $tujuan_upload = public_path('uploads/foto-guru/');
                    $foto_baru->move($tujuan_upload, $nama_foto);

                    $data['foto'] = $nama_foto;
                } else {
                    // Pakai foto lama
                    $data['foto'] = $request->foto_lama;
                }

                // Update ke database
                $dataguru->update($data);

                return redirect()->back()->with('success', 'Data guru berhasil dirubah!!.');
            } else {
                abort(403);
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataguru $dataguru)
    {
         $path = public_path('uploads/foto-guru/' . $dataguru->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
        
            $dataguru->delete();
            return redirect()->back()->with('success', 'Data guru berhasil dihapus');
    }
}
