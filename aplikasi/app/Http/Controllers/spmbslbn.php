<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bener;
use App\Models\components;
use App\Models\murid;
use Illuminate\Http\Request;

class spmbslbn extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $totalMurid = murid::count();
        $jumlahMuridTKLB = murid::where('status', 'Murid Baru')->where('jenjangtingkat', 'TKLB')->count();
        $persenMuridTKLB = 0;
        if ($totalMurid > 0) {
            $persenMuridTKLB = ($jumlahMuridTKLB / $totalMurid) * 100;
        }
        
         $jumlahMuridSDLB = murid::where('status', 'Murid Baru')->where('jenjangtingkat', 'SDLB')->count();
        $persenMuridSDLB = 0;
        if ($totalMurid > 0) {
            $persenMuridSDLB = ($jumlahMuridSDLB / $totalMurid) * 100;
        }


        $jumlahMuridSMPLB = murid::where('status', 'Murid Baru')->where('jenjangtingkat', 'SMPLB')->count();
        $persenMuridSMPLB = 0;
        if ($totalMurid > 0) {
            $persenMuridSMPLB = ($jumlahMuridSMPLB / $totalMurid) * 100;
        }
    
        $jumlahMuridSMALB = murid::where('status', 'Murid Baru')->where('jenjangtingkat', 'SMALB')->count();
        $persenMuridSMALB = 0;
        if ($totalMurid > 0) {
            $persenMuridSMALB = ($jumlahMuridSMALB / $totalMurid) * 100;
        }


        $muridbaru = murid::where('status', 'Murid Baru')->orderBy('tanggaldaftar', 'DESC')->get();

        $databener = bener::where('status', 'menu SPMB')->orderBy('created_at', 'DESC')->get();

        $infoberita = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(3) // hanya ambil 3 data
                    ->get();

        return view('halaman.spmb', compact(['databener','infoberita','muridbaru','jumlahMuridTKLB','persenMuridTKLB','jumlahMuridSDLB','persenMuridSDLB','jumlahMuridSMPLB','persenMuridSMPLB','jumlahMuridSMALB','persenMuridSMALB']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
    {
        //
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
