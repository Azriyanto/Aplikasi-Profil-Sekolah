<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\components;
use App\Models\Kebutuhankusus;
use App\Models\murid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class datasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $totalMurid = murid::count();
        $jumlahMuridBaru = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->count();
        $persenMuridBaru = 0;
        if ($totalMurid > 0) {
            $persenMuridBaru = ($jumlahMuridBaru / $totalMurid) * 100;
        }

        $jumlahMuridlulus = murid::where('status', 'Murid Lulus')->count();
        $persenMuridlulus = 0;
        if ($totalMurid > 0) {
            $persenMuridlulus = ($jumlahMuridlulus / $totalMurid) * 100;
        }
    
        $jumlahMuridalumni = murid::where('status', 'Murid Alumni')->count();
        $persenMuridalumni = 0;
        if ($totalMurid > 0) {
            $persenMuridalumni = ($jumlahMuridalumni / $totalMurid) * 100;
        }

        $muridbaru = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->orderBy('tanggaldaftar', 'DESC')->get();
        $muridlulus = murid::where(['status' => "Murid Lulus"])->orderBy('tanggaldaftar', 'DESC')->get();
        $muridalumni = murid::where(['status' => "Murid Alumni"])->orderBy('tanggaldaftar', 'DESC')->get();

        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        return view('datasiswa.index', compact(['profildatauser','muridbaru','muridlulus','muridalumni','jumlahMuridBaru','persenMuridBaru','jumlahMuridlulus','persenMuridlulus','jumlahMuridalumni','persenMuridalumni','newsupdates']));
    }

    public function spmbmurid()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();


        $totalMurid = murid::count();
        $jumlahMuridTKLB = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->where('jenjangtingkat', 'SDLB')->count();
        $persenMuridTKLB = 0;
        if ($totalMurid > 0) {
            $persenMuridTKLB = ($jumlahMuridTKLB / $totalMurid) * 100;
        }

        $jumlahMuridSDLB = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->where('jenjangtingkat', 'SDLB')->count();
        $persenMuridSDLB = 0;
        if ($totalMurid > 0) {
            $persenMuridSDLB = ($jumlahMuridSDLB / $totalMurid) * 100;
        }

        $jumlahMuridSMPLB = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->where('jenjangtingkat', 'SMPLB')->count();
        $persenMuridSMPLB = 0;
        if ($totalMurid > 0) {
            $persenMuridSMPLB = ($jumlahMuridSMPLB / $totalMurid) * 100;
        }
    
        $jumlahMuridSMALB = murid::where('status', ['Murid Baru', 'Murid Baru Pindahan'])->where('jenjangtingkat', 'SMALB')->count();
        $persenMuridSMALB = 0;
        if ($totalMurid > 0) {
            $persenMuridSMALB = ($jumlahMuridSMALB / $totalMurid) * 100;
        }


            $muridspmbtk = murid::whereIn('status', ['Murid Baru', 'Murid Baru Pindahan'])
                ->where('jenjangtingkat', 'TKLB')
                ->orderBy('tanggaldaftar', 'DESC')
                ->get();   

            $muridspmbsd = murid::whereIn('status', ['Murid Baru', 'Murid Baru Pindahan'])
                ->where('jenjangtingkat', 'SDLB')
                ->orderBy('tanggaldaftar', 'DESC')
                ->get();
                
            $muridspmbsmp = murid::whereIn('status', ['Murid Baru', 'Murid Baru Pindahan'])
                ->where('jenjangtingkat', 'SMPLB')
                ->orderBy('tanggaldaftar', 'DESC')
                ->get();
                
            $muridspmbsma = murid::whereIn('status', ['Murid Baru', 'Murid Baru Pindahan'])
                ->where('jenjangtingkat', 'SMALB')
                ->orderBy('tanggaldaftar', 'DESC')
                ->get();

            $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        return view('datasiswa.spmbmurid', compact(['newsupdates','profildatauser','muridspmbtk','muridspmbsd','muridspmbsmp','muridspmbsma','jumlahMuridTKLB','jumlahMuridSDLB','persenMuridTKLB','persenMuridSDLB','persenMuridSMPLB','persenMuridSMALB','jumlahMuridSMPLB','jumlahMuridSMALB'])); 
    }
    
    public function muridlulus()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $totalMurid = murid::count();
        $jumlahMuridSDLBlulus = murid::where('status', 'Murid Lulus')->where('jenjangtingkat', 'SDLB')->count();
        $persenMuridSDLBlulus = 0;
        if ($totalMurid > 0) {
            $persenMuridSDLBlulus = ($jumlahMuridSDLBlulus / $totalMurid) * 100;
        }

        $jumlahMuridSMPLBlulus = murid::where('status', 'Murid Lulus')->where('jenjangtingkat', 'SMPLB')->count();
        $persenMuridSMPLBlulus = 0;
        if ($totalMurid > 0) {
            $persenMuridSMPLBlulus = ($jumlahMuridSMPLBlulus / $totalMurid) * 100;
        }
    
        $jumlahMuridSMALBlulus = murid::where('status', 'Murid Lulus')->where('jenjangtingkat', 'SMALB')->count();
        $persenMuridSMALBlulus = 0;
        if ($totalMurid > 0) {
            $persenMuridSMALBlulus = ($jumlahMuridSMALBlulus / $totalMurid) * 100;
        }


        $muridlulusSD = murid::where([
                ['status', '=', 'Murid Lulus'],
                ['jenjangtingkat', '=', 'SDLB'],
            ])
            ->orderBy('tanggaldaftar', 'DESC')
            ->get();

            $muridlulusSMP = murid::where([
                ['status', '=', 'Murid Lulus'],
                ['jenjangtingkat', '=', 'SMPLB'],
            ])
            ->orderBy('tanggaldaftar', 'DESC')
            ->get();

            $muridlulusSMA = murid::where([
                ['status', '=', 'Murid Lulus'],
                ['jenjangtingkat', '=', 'SMALB'],
            ])
            ->orderBy('tanggaldaftar', 'DESC')
            ->get();

            $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        return view('datasiswa.muridlulus', compact(['newsupdates','profildatauser','muridlulusSD','muridlulusSMP','muridlulusSMA','jumlahMuridSDLBlulus','jumlahMuridSMPLBlulus','jumlahMuridSMALBlulus','persenMuridSDLBlulus','persenMuridSMPLBlulus','persenMuridSMALBlulus'])); 
    }

        public function alumni()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $totalMurid = murid::count();
        $jumlahMuridalumni = murid::where('status', 'Murid Alumni')->count();
        $persenMuridalumni = 0;
        if ($totalMurid > 0) {
            $persenMuridalumni = ($jumlahMuridalumni / $totalMurid) * 100;
        }

        $newsupdates = components::where('status', 'Artikel')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();

        $muridalumni = murid::where(['status' => "Murid Alumni"])->orderBy('tanggaldaftar', 'DESC')->get();
        return view('datasiswa.alumni', compact(['newsupdates','profildatauser','muridalumni','jumlahMuridalumni','persenMuridalumni']));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();
        return view('datasiswa.createmurid', compact(['profildatauser']));
    }

    public function kebutuhankusus(Request $request){
        $kebutuhankhusus=[];
        if($search=$request->name){
            $kebutuhankhusus=Kebutuhankusus::where('title','LIKE',"%$search%")->get();
        }
        return response()->json($kebutuhankhusus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $tujuan_upload = 'uploads/';
        // Check if fotokk is uploaded
         if ($request->hasFile('fotokk')) {
             $fotokk = $request->file('fotokk');
             $nama_fotokk = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotokk->getClientOriginalExtension();
             $fotokk->move($tujuan_upload . 'fotokk-siswa/', $nama_fotokk);
         } else {
             $nama_fotokk = 'default-fotokk.png';
         }
     
         // Check if fotoaktekelahiran is uploaded
         if ($request->hasFile('fotoakte')) {
             $fotoakte = $request->file('fotoakte');
             $nama_fotoakte = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotoakte->getClientOriginalExtension();
             $fotoakte->move($tujuan_upload . 'fotoakte-murid/', $nama_fotoakte);
         } else {
             $nama_fotoakte = 'default-fotoakte.png';
         }
     
         // Check if foto is uploaded
         if ($request->hasFile('foto')) {
             $foto = $request->file('foto');
             $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $foto->getClientOriginalExtension();
             $foto->move($tujuan_upload . 'foto-murid/', $nama_foto);
         } else {
             $nama_foto = 'default-foto.png';
         }
     
         // Check if fotoktp is uploaded
         if ($request->hasFile('fotoktp')) {
             $fotofotoktp = $request->file('fotoktp');
             $nama_fotofotoktp = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotofotoktp->getClientOriginalExtension();
             $fotofotoktp->move($tujuan_upload . 'foto-ktp/', $nama_fotofotoktp);
         } else {
             $nama_fotofotoktp = 'default-fotoktp.png';
         }
     
         // Check if fotokelulusan is uploaded
         if ($request->hasFile('fotokelulusan')) {
             $fotofotokelulusan = $request->file('fotokelulusan');
             $nama_fotofotokelulusan = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotofotokelulusan->getClientOriginalExtension();
             $fotofotokelulusan->move($tujuan_upload . 'foto-fotokelulusan/', $nama_fotofotokelulusan);
         } else {
             $nama_fotofotokelulusan = 'default-fotokelulusan.png';
         }
     
         // Check if fotosuratpindah is uploaded
         if ($request->hasFile('fotosuratpindah')) {
             $fotofotosuratpindah = $request->file('fotosuratpindah');
             $nama_fotofotosuratpindah = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotofotosuratpindah->getClientOriginalExtension();
             $fotofotosuratpindah->move($tujuan_upload . 'foto-fotosuratpindah/', $nama_fotofotosuratpindah);
         } else {
             $nama_fotofotosuratpindah = 'default-fotosuratpindah.png';
         }

          $datamurid = [
             'tanggaldaftar' => $request->tanggaldaftar,
             'nama' => $request->nama,
             'jeniskelamin' => $request->jeniskelamin,
             'nisn' => $request->nisn,
             'tahunajaran' => $request->tahunajaran,
             'nik' => $request->nik,
             'nokk' => $request->nokk,
             
             'tempatlahir' => $request->tempatlahir,
             'tanggallahir' => $request->tanggallahir,
             'noregistrasiakte' => $request->noregistrasiakte,
             'agama' => $request->agama,
             'kewarganegaraan' => $request->kewarganegaraan,

             'kebutuhankusus' => json_encode($request->kebutuhankusus),
             
             'jenjangtingkat' => $request->jenjangtingkat,
             'alamat' => $request->alamat,
             'rtanrw' => $request->rt,
             'prosesstatus' => $request->prosesstatus,
             'namadusun' => $request->namadusun,
             'kelurahan' => $request->kelurahan,
             'kecamatan' => $request->kecamatan,
             'kodepos' => $request->kodepos,
             'tempattinggal' => $request->tempattinggal,
             'transportasi' => $request->transportasi,
             'anakke' => $request->anakke,

             'penerimakps' => $request->penerimakps,
             'kip' => $request->kip,
             'mendapatpip' => $request->mendapatpip,
             'alasanpip' => $request->alasanpip,

             'foto' => $nama_foto,
             'fotokk' => $nama_fotokk,
             'fotoakte' => $nama_fotoakte,
             'fotoktp' => $nama_fotofotoktp,
             'fotokelulusan' => $nama_fotofotokelulusan,
             'fotosuratpindah' => $nama_fotofotosuratpindah,
             'status' => $request->status,
             
             'namaayah' => $request->namaayah,
             'nikayah' => $request->nikayah,
             'tahunlahirayah' => $request->tahunlahirayah,
             'pendidikanayah' => $request->pendidikanayah,
             'pekerjaanayah' => $request->pekerjaanayah,
             'penghasilanayah' => $request->penghasilanbulananayah,
             'kebutuhankususayah' => json_encode($request->kebutuhankususayah),

             'namaibu' => $request->namaibu,
             'nikibu' => $request->nikibu,
             'tahunlahiribu' => $request->tahunlahiribu,
             'pendidikanibu' => $request->pendidikanibu,
             'pekerjaanibu' => $request->pekerjaanibu,
             'penghasilanibu' => $request->penghasilanibu,
             'kebutuhankususibu' => json_encode($request->kebutuhankususibu),

             'namawali' => $request->namawali,
             'nikwali' => $request->nikwali,
             'tahunlahirwali' => $request->tahunlahirwali,
             'pendidikanwali' => $request->pendidikanwali,
             'pekerjaanwali' => $request->pekerjaanwali,
             'penghasilanwali' => $request->penghasilanwali,
             'kebutuhankususwali' => json_encode($request->kebutuhankususwali),

             'nohp' => $request->nohp,
             'email' => $request->email,
             'tinggibadan' => $request->tinggibadan,
             'beratbadan' => $request->beratbadan,
             'lingkarkepala' => $request->lingkarkepala,
             'jaraktempuh' => $request->jaraktempuh,
             'waktutempuh' => $request->waktutempuh,
             'jumlahsaudara' => $request->jumlahsaudara,

             'namalomba' => $request->namaprestasi,
             'jenislomba' => $request->jenislomba,
             'tingkat' => $request->tingkat,
             'tahun' => $request->tahun,
             'penyelengara' => $request->penyelengara,
         ];

         // Kuota per jenjang
        $kuotaPerJenjang = [
            'TKLB' => 25,
            'SDLB' => 25,
            'SMPLB' => 40,
            'SMALB' => 48,
        ];


         // Ambil jenjang dari input
        $jenjang = $request->jenjangtingkat;
        // Hitung jumlah murid berdasarkan jenjang yang sama
        $jumlahTerdaftar = murid::where('jenjangtingkat', $jenjang)->count();
        // Cek apakah kuota penuh

        $datamurid['kebutuhankusus'] = is_array($request->kebutuhankusus) ? implode(', ', $request->kebutuhankusus) : $request->kebutuhankusus;
        $datamurid['kebutuhankususayah'] = is_array($request->kebutuhankususayah) ? implode(', ', $request->kebutuhankususayah) : $request->kebutuhankususayah;
        $datamurid['kebutuhankususibu'] = is_array($request->kebutuhankususibu) ? implode(', ', $request->kebutuhankususibu) : $request->kebutuhankususibu;
        $datamurid['kebutuhankususwali'] = is_array($request->kebutuhankususwali) ? implode(', ', $request->kebutuhankususwali) : $request->kebutuhankususwali;

        if ($jumlahTerdaftar >= $kuotaPerJenjang[$jenjang]) {
            return redirect()->back()
                ->withInput()
                ->with('error', "Kuota untuk jenjang $jenjang sudah penuh. Pendaftaran tidak dapat dilanjutkan.");
        }else{
            murid::create($datamurid);
            if (Auth::user()->status == 'siswa') {
                return redirect('dasboard')->with('success', 'Data berhasil disimpan!');
            } else {
                return redirect()->back()->with('success', 'Data berhasil disimpan!');
            }
        }
    }

    /**
     * Display the specified resource.
     */

    public function cekedit(Request $request){
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $muridedit = murid::orderBy('tanggaldaftar', 'DESC')->get();
        return view('datasiswa.editmurid', compact(['profildatauser','muridedit']));
    }

    public function cekhapus(Request $request){
        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();

        $muridedit = murid::orderBy('tanggaldaftar', 'DESC')->get();

        return view('datasiswa.hapus', compact(['profildatauser','muridedit']));
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

        $user = Auth::user()->name;
        $profildatauser = User::where('name', $user)->get();
        // Ambil data murid berdasarkan ID
        $data = murid::findOrFail($id);

        $mapping = [
                1 => 'Tidak',
                2 => 'Netra (A)',
                3 => 'Rungu (B)',
                4 => 'Grahita ringan (C)',
                5 => 'Grahita Sedang (C1)',
                6 => 'Daksa Ringan (D)',
                7 => 'Daksa Sedang (D1)',
                8 => 'Laras',
                9 => 'Wicara (F)',
                10 => 'Tuna ganda (G)',
                12 => 'Hiper aktif (H)',
                13 => 'Cerdas Istimewa (I)',
                14 => 'Bakat Istimewa (J)',
                15 => 'Kesulitan Belajar (K)',
                16 => 'Indigo (O)',
                17 => 'Down Sindrome (P)',
                18 => 'Autis (Q)',
            ];

            // Pastikan hasil akhir berupa array
            $kebutuhan_array = [];

            if (is_array($data->kebutuhankusus)) {
                $kebutuhan_array = $data->kebutuhankusus;
            } elseif (is_string($data->kebutuhankusus)) {
                $string = $data->kebutuhankusus;

                if (str_starts_with($string, '[')) {
                    // "[5,3]"
                    $decoded = json_decode($string);
                    if (is_array($decoded)) {
                        $kebutuhan_array = $decoded;
                    }
                } elseif (str_contains($string, ',')) {
                    // "5,3"
                    $kebutuhan_array = explode(',', $string);
                } else {
                    // "5"
                    $kebutuhan_array = [$string];
                }
            }

            $data->kebutuhan_array = $kebutuhan_array;

        return view('datasiswa.dataedit', compact('data','profildatauser','mapping'));
    }
     
    public function printlaporan(Request $request){

        $laporanmuridspmb = murid::orderBy('tanggaldaftar', 'DESC')->get();
        return view('datasiswa.printlaporan', compact(['laporanmuridspmb']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, murid $datasiswa)
    {
        $datamurid = [
            'tanggaldaftar' => $request->tanggaldaftar,
             'nama' => $request->nama,
             'jeniskelamin' => $request->jeniskelamin,
             'nisn' => $request->nisn,
             'tahunajaran' => $request->tahunajaran,
             'nik' => $request->nik,
             'nokk' => $request->nokk,
             
             'tempatlahir' => $request->tempatlahir,
             'tanggallahir' => $request->tanggallahir,
             'noregistrasiakte' => $request->noregistrasiakte,
             'agama' => $request->agama,
             'kewarganegaraan' => $request->kewarganegaraan,
             'kebutuhankusus' => json_encode($request->kebutuhankusus),
            //  'kebutuhankusus' => $request->kebutuhankusus,
             'jenjangtingkat' => $request->jenjangtingkat,
             'alamat' => $request->alamat,
             'rtanrw' => $request->rtanrw,
             'prosesstatus' => $request->prosesstatus,
             'namadusun' => $request->namadusun,
             'kelurahan' => $request->kelurahan,
             'kecamatan' => $request->kecamatan,
             'kodepos' => $request->kodepos,
             'tempattinggal' => $request->tempattinggal,
             'transportasi' => $request->transportasi,
             'anakke' => $request->anakke,

             'penerimakps' => $request->penerimakps,
             'kip' => $request->kip,
             'mendapatpip' => $request->mendapatpip,
             'alasanpip' => $request->alasanpip,
             'status' => $request->status,
             
             'namaayah' => $request->namaayah,
             'nikayah' => $request->nikayah,
             'tahunlahirayah' => $request->tahunlahirayah,
             'pendidikanayah' => $request->pendidikanayah,
             'pekerjaanayah' => $request->pekerjaanayah,
             'penghasilanayah' => $request->penghasilanbulananayah,
             'kebutuhankususayah' => json_encode($request->kebutuhankususayah),

             'namaibu' => $request->namaibu,
             'nikibu' => $request->nikibu,
             'tahunlahiribu' => $request->tahunlahiribu,
             'pendidikanibu' => $request->pendidikanibu,
             'pekerjaanibu' => $request->pekerjaanibu,
             'penghasilanibu' => $request->penghasilanibu,
             'kebutuhankususibu' => json_encode($request->kebutuhankususibu),

             'namawali' => $request->namawali,
             'nikwali' => $request->nikwali,
             'tahunlahirwali' => $request->tahunlahirwali,
             'pendidikanwali' => $request->pendidikanwali,
             'pekerjaanwali' => $request->pekerjaanwali,
             'penghasilanwali' => $request->penghasilanwali,
             'kebutuhankususwali' => json_encode($request->kebutuhankususwali),

             'nohp' => $request->nohp,
             'email' => $request->email,
             'tinggibadan' => $request->tinggibadan,
             'beratbadan' => $request->beratbadan,
             'lingkarkepala' => $request->lingkarkepala,
             'jaraktempuh' => $request->jaraktempuh,
             'waktutempuh' => $request->waktutempuh,
             'jumlahsaudara' => $request->jumlahsaudara,

             'namalomba' => $request->namaprestasi,
             'jenislomba' => $request->jenislomba,
             'tingkat' => $request->tingkat,
             'tahun' => $request->tahun,
             'penyelengara' => $request->penyelengara,
        ];

        if ($request->hasFile('foto')) {
            $path = public_path('uploads/foto-murid/' . $datasiswa->foto);
            if (File::exists($path)) {
                File::delete($path);
            }
            $foto_baru = $request->file('foto');
            $nama_foto = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $foto_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/foto-murid/';
            $foto_baru->move($tujuan_upload, $nama_foto);
            $datamurid['foto'] = $nama_foto;
        } else {
            $datamurid['foto'] = $request->foto_lama;
        }

        if ($request->hasFile('fotokk')) {
            $path = public_path('uploads/fotokk-siswa/' . $datasiswa->fotokk);
            if (File::exists($path)) {
                File::delete($path);
            }
            $fotokk_baru = $request->file('fotokk');
            $nama_fotokk = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotokk_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/fotokk-siswa/';
            $fotokk_baru->move($tujuan_upload, $nama_fotokk);
            $datamurid['fotokk'] = $nama_fotokk;
        } else {
            $datamurid['fotokk'] = $request->fotokk_lama;
        }

        if ($request->hasFile('fotoakte')) {
            $path = public_path('uploads/fotoakte-murid/' . $datasiswa->fotoakte);
            if (File::exists($path)) {
                File::delete($path);
            }
            $fotoakte_baru = $request->file('fotoakte');
            $nama_fotoakte = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotoakte_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/fotoakte-murid/';
            $fotoakte_baru->move($tujuan_upload, $nama_fotoakte);
            $datamurid['fotoakte'] = $nama_fotoakte;
        } else {
            $datamurid['fotoakte'] = $request->fotoakte_lama;
        }

        if ($request->hasFile('fotoktp')) {
            $path = public_path('uploads/foto-ktp/' . $datasiswa->fotoktp);
            if (File::exists($path)) {
                File::delete($path);
            }
            $fotoktp_baru = $request->file('fotoktp');
            $nama_fotoktp = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotoktp_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/foto-ktp/';
            $fotoktp_baru->move($tujuan_upload, $nama_fotoktp);
            $datamurid['fotoktp'] = $nama_fotoktp;
        } else {
            $datamurid['fotoktp'] = $request->fotoktp_lama;
        }

        if ($request->hasFile('fotokelulusan')) {
            $path = public_path('uploads/foto-fotokelulusan/' . $datasiswa->fotokelulusan);
            if (File::exists($path)) {
                File::delete($path);
            }
            $fotokelulusan_baru = $request->file('fotokelulusan');
            $nama_fotokelulusan = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotokelulusan_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/foto-fotokelulusan/';
            $fotokelulusan_baru->move($tujuan_upload, $nama_fotokelulusan);
            $datamurid['fotokelulusan'] = $nama_fotokelulusan;
        } else {
            $datamurid['fotokelulusan'] = $request->fotokelulusan_lama;
        }

        if ($request->hasFile('fotosuratpindah')) {
            $path = public_path('uploads/foto-fotosuratpindah/' . $datasiswa->fotosuratpindah);
            if (File::exists($path)) {
                File::delete($path);
            }
            $fotosuratpindah_baru = $request->file('fotosuratpindah');
            $nama_fotosuratpindah = Carbon::now()->isoFormat('DDMMYYHHmmss') . '-' . $request->nama . '.' . $fotosuratpindah_baru->getClientOriginalExtension();
            $tujuan_upload = 'uploads/foto-fotosuratpindah/';
            $fotosuratpindah_baru->move($tujuan_upload, $nama_fotosuratpindah);
            $datamurid['fotosuratpindah'] = $nama_fotosuratpindah;
        } else {
            $datamurid['fotosuratpindah'] = $request->fotosuratpindah_lama;
        }
        
        $datasiswa->update($datamurid);

        return redirect()->back()->with('success', 'Data berhasil di Update!');
    }

    public function cetak($id)
    {
         // Ambil data murid berdasarkan ID
        $datamurid = Murid::findOrFail($id);
        
        // Daftar kebutuhan khusus
        $daftarKebutuhan = [
            1  => 'Tidak',
            2  => 'Netra (A)',
            3  => 'Rungu (B)',
            4  => 'Grahita Ringan (C)',
            5  => 'Grahita Sedang (C1)',
            6  => 'Daksa Ringan (D)',
            7  => 'Daksa Sedang (D1)',
            8  => 'Laras',
            9  => 'Wicara (F)',
            10 => 'Tuna Ganda (G)',
            12 => 'Hiperaktif (H)',
            13 => 'Cerdas Istimewa (I)',
            14 => 'Bakat Istimewa (J)',
            15 => 'Kesulitan Belajar (K)',
            16 => 'Indigo (O)',
            17 => 'Down Sindrome (P)',
            18 => 'Autis (Q)',
        ];
        
        // Ambil dan normalisasi data kebutuhan khusus
        $kebutuhan = $datamurid->kebutuhankusus;
        
        // Jika dalam bentuk JSON: "[5,3]"
        if (is_string($kebutuhan) && str_starts_with($kebutuhan, '[')) {
            $kebutuhan = json_decode($kebutuhan, true);
        }
        
        // Jika dalam bentuk "5,3"
        if (is_string($kebutuhan) && str_contains($kebutuhan, ',')) {
            $kebutuhan = explode(',', $kebutuhan);
        }
        
        // Ubah ke array jika belum
        $kebutuhan = is_array($kebutuhan) ? array_map('trim', $kebutuhan) : [$kebutuhan];
        
        // Ubah kode ke nama kebutuhan
        $kebutuhanNama = [];
        foreach ($kebutuhan as $kode) {
            $kebutuhanNama[] = $daftarKebutuhan[$kode] ?? $kode;
        }
        
        // Simpan hasil ke properti tambahan
        $datamurid->kebutuhan_nama = implode(', ', $kebutuhanNama);
        
        // Kirim ke view
        return view('datasiswa.printdata', compact('datamurid'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(murid $datamurid)
    {

        $path = public_path('uploads/foto-murid/' . $datamurid->foto);
            if (File::exists($path)) {
                File::delete($path);
            }

        $path = public_path('uploads/fotokk-siswa/' . $datamurid->fotokk);
            if (File::exists($path)) {
                File::delete($path);
            }    

        $path = public_path('uploads/fotoakte-murid/' . $datamurid->fotoakte);
            if (File::exists($path)) {
                File::delete($path);
            }    

        $path = public_path('uploads/foto-ktp/' . $datamurid->fotoktp);
            if (File::exists($path)) {
                File::delete($path);
            }    

        $path = public_path('uploads/foto-fotokelulusan/' . $datamurid->fotokelulusan);
            if (File::exists($path)) {
                File::delete($path);
            }
        $path = public_path('uploads/foto-fotosuratpindah/' . $datamurid->fotosuratpindah);
            if (File::exists($path)) {
                File::delete($path);
            }
       
        
            $datamurid->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function bulkDelete(Request $request)
    {
        if ($request->has('delete_all')) {
            // Hapus semua data
            $murids = murid::all();
        } elseif ($request->has('ids')) {
            // Hapus hanya data yang dipilih
            $murids = murid::whereIn('id', $request->ids)->get();
        } else {
            return redirect()->back()->with('error', 'Tidak ada data yang dipilih.');
        }

        foreach ($murids as $murid) {
            // Hapus file jika ada
            $fotoPaths = [
                public_path('foto-murid/' . $murid->foto),
                public_path('fotokk-siswa/' . $murid->fotokk),
                public_path('fotoakte-murid/' . $murid->fotoakte),
                public_path('foto-ktp/' . $murid->fotoktp),
                public_path('foto-fotokelulusan/' . $murid->fotokelulusan),
                public_path('foto-fotosuratpindah/' . $murid->fotosuratpindah),
            ];

            foreach ($fotoPaths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            $murid->delete();
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

}
