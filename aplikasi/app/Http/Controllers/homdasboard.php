<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\dataguru;
use App\Models\murid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homdasboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data user
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $datauser = Auth::user();
        // Ambil data murid berdasarkan nama user yang login
        $muridnama = murid::where('nama', $datauser->name)->get();
        // pengecekan jika siswa sudah daftar tidak bisa daftar lagi
        $daftar = murid::where('nama', $datauser->name)->exists();

        // Murid
        $totalMurid = murid::count();
        $jumlahMuridBaru = murid::where('status', 'Murid Baru')->count();
        $persenMuridBaru = 0;
        if ($totalMurid > 0) {
            $persenMuridBaru = ($jumlahMuridBaru / $totalMurid) * 100;
        }

        $jumlahMuridalumni = murid::where('status', 'Murid Alumni')->count();
        $persenMuridalumni = 0;
        if ($totalMurid > 0) {
            $persenMuridalumni = ($jumlahMuridalumni / $totalMurid) * 100;
        }

        $jumlahguru = dataguru::orderBy('created_at', 'DESC')->count();
        $persenguru = 0;
        if ($jumlahguru > 0) {
            $persenguru = ($jumlahguru / $jumlahguru) * 100;
        }



        // Artikel berita
        $newsupdates = components::where('status', 'Artikel')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $datasemuaguru = dataguru::orderBy('created_at', 'DESC')->get(); 
        
        

        // $sevenDays = collect();
        // $spmbData = collect();
        // $guruData = collect();
        // $alumniData = collect();

        // for ($i = 6; $i >= 0; $i--) {
        //     $tanggal = Carbon::today()->subDays($i)->toDateString();
        //     $sevenDays->push($tanggal);

        //     $spmbData->push(murid::whereDate('created_at', $tanggal)->where('status', 'Murid Baru')->count());
        //     $guruData->push(dataguru::whereDate('created_at', $tanggal)->count());
        //     $alumniData->push(murid::whereDate('created_at', $tanggal)->where('status', 'Murid Alumni')->count());
        // }

        $years = collect();       // Untuk x-axis chart
        $spmbData = collect();    // Data murid baru per tahun
        $guruData = collect();    // Data guru per tahun
        $alumniData = collect();  // Data alumni per tahun

        $currentYear = Carbon::now()->year;

        for ($i = 3; $i >= 0; $i--) {
            $year = $currentYear - $i;
            $years->push($year);

            $spmbData->push(murid::whereYear('created_at', $year)->where('status', 'Murid Baru')->count());
            $guruData->push(dataguru::whereYear('created_at', $year)->count());
            $alumniData->push(murid::whereYear('created_at', $year)->where('status', 'Murid Alumni')->count());
        }


        
        $filter = request('filter'); // dari query string ?filter=today
        $query = components::where('status', 'Artikel');

        if ($filter == 'month') {
            $query->whereMonth('created_at', Carbon::now()->month);
        } elseif ($filter == 'year') {
            $query->whereYear('created_at', Carbon::now()->year);
        } else {
            // default: today
            $query->whereDate('created_at', Carbon::today());
        }

        $topArtikel = $query->orderBy('created_at', 'desc')->take(5)->get();

        return view('dasboard.index', compact([
             'profildatauser',
            'newsupdates',
            'jumlahMuridBaru',
            'persenMuridBaru',
            'jumlahMuridalumni',
            'persenMuridalumni',
            'jumlahguru',
            'persenguru',
            // 'sevenDays',
            'years',
            'spmbData',
            'guruData',
            'alumniData',
            'datasemuaguru',
            'topArtikel',
            'muridnama',
            'daftar',
        ]));
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
