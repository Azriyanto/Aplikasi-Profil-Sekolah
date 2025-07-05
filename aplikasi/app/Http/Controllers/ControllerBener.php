<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bener;
use App\Models\components;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ControllerBener extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();
        $databener = bener::orderBy('created_at', 'DESC')->get();
        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();


        return view('bener.index', compact(['profildatauser','newsupdates','databener'])); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        return view('bener.create', compact(['profildatauser']));
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
             $foto->move($tujuan_upload . 'foto-Bener/', $nama_foto);
         } else {
             $nama_foto = 'default-foto.png';
         }

          $bener = [
             'nama' => $request->nama,
             'status' => $request->status,
             'foto' => $nama_foto,
         ];
       
            bener::create($bener);
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
    public function edit()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $databener = bener::orderBy('created_at', 'DESC')->get();
        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        return view('bener.editbener', compact(['profildatauser','databener','newsupdates']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bener $bener)
    {
        if (Auth::user()->status == 'admin') {
                $data = [
                    'nama' => $request->nama,
                    'status' => $request->status,
                ];

                // Handle upload foto baru
                if ($request->hasFile('foto')) {
                    // Hapus foto lama jika ada
                    $path = public_path('uploads/foto-Bener/' . $bener->foto);
                    if (File::exists($path)) {
                        File::delete($path);
                    }

                    $foto_baru = $request->file('foto');
                    $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . preg_replace('/[^a-zA-Z0-9]/', '', $request->nama) . '.' . $foto_baru->getClientOriginalExtension();
                    $tujuan_upload = public_path('uploads/foto-Bener/');
                    $foto_baru->move($tujuan_upload, $nama_foto);

                    $data['foto'] = $nama_foto;
                } else {
                    // Pakai foto lama
                    $data['foto'] = $request->foto_lama;
                }

                // Update ke database
                $bener->update($data);

                return redirect()->back()->with('success', 'Data berhasil dirubah!!.');
            } else {
                abort(403);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bener $bener)
    {
         $path = public_path('uploads/foto-Bener/' . $bener->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
        
            $bener->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
