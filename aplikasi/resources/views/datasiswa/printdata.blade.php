<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cetak Data Pendaftaran Siswa</title>
  
<!-- Favicons -->
  <link href="{{asset('images/logosekolah.png')}}" rel="icon">
  <link href="{{asset('images/logosekolah.png')}}" rel="apple-touch-icon">

  <style>
    body {
  font-family: "Times New Roman", Times, serif;
  font-size: 14px;
  margin: 0;
  padding: 0;
  color: #000;
}

.container {
  width: 90%;
  max-width: 800px; /* Batas lebar agar tidak terlalu mepet */
  margin: 30px auto; /* Tengah dan jarak dari tepi kertas */
  padding: 30px; /* Jarak dalam dari batas kertas */
  box-sizing: border-box;
}

/* KOP SURAT UTAMA */
.kop-surat {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 3px solid black;
  padding-bottom: 10px;
  margin-bottom: 10px;
  flex-wrap: wrap;
}

.kop-surat img {
  width: 90px;
  height: auto;
}

.kop-text {
  flex: 1 1 60%;
  text-align: center;
  padding: 0 10px;
}

.kop-text h1 {
  font-size: 22pt;
  margin: 0;
  font-weight: bold;
}

.kop-text h2 {
  font-size: 16pt;
  margin: 0;
}

.kop-text p {
  margin: 3px 0;
  font-size: 12pt;
}

.logo-kanan {
  width: 100%; /* bisa sesuaikan */
  height: auto;
}

/* Kodepos di kanan bawah */
.kodepos {
  text-align: right;
  font-weight: bold;
  font-size: 14px;
  margin-top: -10px;
}

.kodepos span {
  color: black;
}

/* TABEL */
table {
  width: 100%;
  margin-top: 30px;
}

td, th {
  padding: 8px;
  vertical-align: top;
  text-align: left;
}

/* Tombol tidak ikut tercetak */
.no-print {
  margin-top: 20px;
  text-align: center;
}

@media print {
  body {
    font-size: 12pt;
    color: #000;
  }

  .no-print {
    display: none;
  }

  .container {
    width: 100%;
    margin: 0;
    padding: 0;
  }

  .kop-surat {
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
  }

  .kop-surat img {
    width: 80px;
    height: auto;
  }

  .kop-text h1 {
    font-size: 18pt;
  }

  .kop-text h2 {
    font-size: 14pt;
  }

  .kop-text p {
    font-size: 12pt;
    margin: 2px 0;
  }

  table {
    font-size: 12pt;
  }

  td, th {
    padding: 6px;
  }

  .logo-kanan {
    width: 80px !important;
  }

  .kodepos {
    font-size: 12pt;
    text-align: right;
  }
}

/* RESPONSIF UNTUK LAYAR KECIL */
@media (max-width: 768px) {
  .kop-surat {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .kop-surat img {
    width: 70px;
    margin-bottom: 10px;
  }

  .kop-text {
    width: 100%;
    padding: 0;
  }

  .kop-text h1 {
    font-size: 18pt;
  }

  .kop-text h2 {
    font-size: 14pt;
  }

  .kop-text p {
    font-size: 11pt;
  }

  table {
    font-size: 12px;
  }
}

  </style>
</head>
<body>
  <div class="container">

    <div class="kop-surat">
        <img src="{{ asset('images/logiprovinsi.png') }}" alt="Logo Kiri">
        
        <div class="kop-text">
            <p>PEMERINTAH PROVINSI KEPULAUAN RIAU</p>
            <p><strong>DINAS PENDIDIKAN</strong></p>
            <h1><strong>SLB NEGERI 1 TANJUNGPINANG</strong></h1>
            <p>Jalan Kijang Lama Km.7 Telp. 0771-4571058 Tanjungpinang</p>
            <p>Email: slb_tanjungpinang@yahoo.com &nbsp; | &nbsp; 
            <a href="https://slbnegeri1tanjungpinang.sch.id/" target="_blank">https://slbnegeri1tanjungpinang.sch.id</a></p>
            <br>
            <div class="kodepos">
                <span>Kodepos: <strong>29151</strong></span>
            </div>
        </div>

        <img src="{{ asset('images/logosekolah.png') }}" alt="Logo Kanan" class="logo-kanan">

        
    </div>

    <h3 style="text-align: center;">DATA PENDAFTARAN PESERTA DIDIK</h3>

    <table>
        <tr>
            <td rowspan="64" style="width: 150px; text-align: center;">
            <img src="{{ asset('uploads/foto-murid/' . $datamurid->foto) }}" alt="Foto Siswa" style="width: 120px; height: auto; border: 1px solid #000; padding: 4px;">
            </td>
            <tr>
                <th>Tanggal Pendaftaran</th>
                <td>{{ \Carbon\Carbon::parse($datamurid->created_at)->translatedFormat('d F Y') }}</td>
            </tr>
            <th>Nama Lengkap</th>
            <td>{{ $datamurid->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $datamurid->jeniskelamin }}</td>
        </tr>
        <tr>
            <th>NISN</th>
            <td>{{ $datamurid->nisn }}</td>
        </tr>
        <tr>
            <th>Tahun Ajaran</th>
            <td>{{ $datamurid->tahunajaran }}</td>
        </tr>
        <tr>
            <th>NIK</th>
            <td>{{ $datamurid->nik }}</td>
        </tr>
        <tr>
            <th>Kartu Keluarga</th>
            <td>{{ $datamurid->nokk }}</td>
        </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <td>{{ $datamurid->tempatlahir }}, {{ \Carbon\Carbon::parse($datamurid->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
         <tr>
            <th>Akte Kelahiran</th>
            <td>{{ $datamurid->noregistrasiakte }}</td>
        </tr>
         <tr>
            <th>Agama</th>
            <td>{{ $datamurid->agama }}</td>
        </tr>
         <tr>
            <th>Kewarganegaraan</th>
            <td>{{ $datamurid->kewarganegaraan }}</td>
        </tr>
        <tr>
            <th>Berkebutuhan Khusus</th>
            <td>
                {{ $datamurid->kebutuhan_nama }}
            </td>
        </tr>
        <tr>
            <th>Tingkat SDLB/SMPLB/SMALB</th>
            <td>
                {{ $datamurid->jenjangtingkat }}
            </td>
        </tr>
        <tr>
            <th>alamat</th>
            <td>
                {{ $datamurid->alamat }}
            </td>
        </tr>
        <tr>
            <th>RT dan RW</th>
            <td>
                {{ $datamurid->rtanrw}}
            </td>
        </tr>
        <tr>
            <th>Nama Dusun</th>
            <td>
                {{ $datamurid->namadusun}}
            </td>
        </tr>
        <tr>
            <th>Desa / Kelurahan</th>
            <td>
                {{ $datamurid->kelurahan}}
            </td>
        </tr>
        <tr>
            <th>Kecamatan</th>
            <td>
                {{ $datamurid->kecamatan}}
            </td>
        </tr>
        <tr>
            <th>Kode Pos</th>
            <td>
                {{ $datamurid->kodepos}}
            </td>
        </tr>
        <tr>
            <th>Tempat Tinggal</th>
            <td>
                {{ $datamurid->tempattinggal}}
            </td>
        </tr>
        <tr>
            <th>Teransportasi</th>
            <td>
                {{ $datamurid->transportasi}}
            </td>
        </tr>
        <tr>
            <th>Anak Keberapa</th>
            <td>
                {{ $datamurid->anakke}}
            </td>
        </tr>
        <tr>
            <th>Penerima KPS/PKH</th>
            <td>
                {{ $datamurid->penerimakps}}
            </td>
        </tr>
        <tr>
            <th>Anak Punya KIP</th>
            <td>
                {{ $datamurid->kip}}
            </td>
        </tr>
        <tr>
            <th>Mendapat PIP</th>
            <td>
                {{ $datamurid->mendapatpip}}
            </td>
        </tr>
        <tr>
            <th>Alasan Menerima PIP</th>
            <td>
                {{ $datamurid->alasanpip}}
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                {{ $datamurid->status}}
            </td>
        </tr>
        <tr>
            <th>Status Lulus</th>
            <td>
                {{ $datamurid->prosesstatus}}
            </td>
        </tr>
        <tr>
            <th>Status Lulus</th>
            <td>
                {{ $datamurid->prosesstatus}}
            </td>
        </tr>
        <tr>
            <th>Status Lulus</th>
            <td>
                {{ $datamurid->prosesstatus}}
            </td>
        </tr>
        <tr>
            <th>Nama Ayah</th>
            <td>
                {{ $datamurid->namaayah}}
            </td>
        </tr>
        <tr>
            <th>NIK Ayah</th>
            <td>
                {{ $datamurid->nikayah}}
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir Ayah</th>
            <td>
                {{ $datamurid->tahunlahirayah}}
            </td>
        </tr>
        <tr>
            <th>Pendidikan Terakhir Ayah</th>
            <td>
                {{ $datamurid->pendidikanayah}}
            </td>
        </tr>
        <tr>
            <th>Pekerjaan Ayah</th>
            <td>
                {{ $datamurid->pekerjaanayah}}
            </td>
        </tr>
        <tr>
            <th>Penghasilan Bulanan Ayah</th>
            <td>
                {{ $datamurid->penghasilanayah}}
            </td>
        </tr>
        <tr>
            <th>Kebutuhan Khusus Ayah</th>
        
           @php
                $kebutuhanRaw = $datamurid->kebutuhankususayah;

                // Inisialisasi variabel kebutuhan
                $kebutuhan = [];

                if (is_array($kebutuhanRaw)) {
                    $kebutuhan = $kebutuhanRaw;
                } else {
                    $decoded = json_decode($kebutuhanRaw, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        // Kalau hasil decode berupa array
                        if (is_array($decoded)) {
                            $kebutuhan = $decoded;
                        } else {
                            // Kalau hasil decode adalah string (misal "Tuna Netra")
                            $kebutuhan = [$decoded];
                        }
                    } elseif (!empty($kebutuhanRaw) && $kebutuhanRaw !== 'null') {
                        // Kalau bukan JSON, tapi ada datanya
                        $kebutuhan = [$kebutuhanRaw];
                    }
                }
            @endphp

            <td>
                {{-- ✅ Jika lebih dari 1 kebutuhan, tampilkan sebagai teks saja --}}
                 @if (count($kebutuhan) > 1)
                   {{ implode(', ', $kebutuhan) }}
                {{-- ✅ Jika hanya satu, tampilkan juga dropdown (readonly/disabled) --}}
                 {{-- Jika hanya satu kebutuhan, tampilkan dropdown (readonly) --}}
                @elseif(count($kebutuhan) === 1)
                    {{ implode(', ', $kebutuhan) }}
                {{-- Kalau tidak ada kebutuhan --}}
                @else
                    <select class="form-control" disabled>
                        @php
                        $selectedKebutuhan = old('kebutuhankususayah', $data->kebutuhankususayah ?? '');
                        @endphp
                        <option value="Tidak" {{ $selectedKebutuhan == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        <option value="Netra(A)" {{ $selectedKebutuhan == 'Netra(A)' ? 'selected' : '' }}>Netra (A)</option>
                        <option value="Rungu(B)" {{ $selectedKebutuhan == 'Rungu(B)' ? 'selected' : '' }}>Rungu (B)</option>
                        <option value="Grahita ringan(C)" {{ $selectedKebutuhan == 'Grahita ringan(C)' ? 'selected' : '' }}>Grahita ringan (C)</option>
                        <option value="Grahita Sedang(C1)" {{ $selectedKebutuhan == 'Grahita Sedang(C1)' ? 'selected' : '' }}>Grahita Sedang (C1)</option>
                        <option value="Daksa Ringan(D)" {{ $selectedKebutuhan == 'Daksa Ringan(D)' ? 'selected' : '' }}>Daksa Ringan (D)</option>
                        <option value="Daksa Sedang(D1)" {{ $selectedKebutuhan == 'Daksa Sedang(D1)' ? 'selected' : '' }}>Daksa Sedang (D1)</option>
                        <option value="Laras" {{ $selectedKebutuhan == 'Laras' ? 'selected' : '' }}>Laras</option>
                        <option value="Wicara(F)" {{ $selectedKebutuhan == 'Wicara(F)' ? 'selected' : '' }}>Wicara (F)</option>
                        <option value="Tuna ganda(G)" {{ $selectedKebutuhan == 'Tuna ganda(G)' ? 'selected' : '' }}>Tuna ganda (G)</option>
                        <option value="Hiper aktif(H)" {{ $selectedKebutuhan == 'Hiper aktif(H)' ? 'selected' : '' }}>Hiper aktif (H)</option>
                        <option value="Cerdas Istimewa(i)" {{ $selectedKebutuhan == 'Cerdas Istimewa(i)' ? 'selected' : '' }}>Cerdas Istimewa (i)</option>
                        <option value="Bakat Istimewa(J)" {{ $selectedKebutuhan == 'Bakat Istimewa(J)' ? 'selected' : '' }}>Bakat Istimewa (J)</option>
                        <option value="Kesulitan Belajra(K)" {{ $selectedKebutuhan == 'Kesulitan Belajra(K)' ? 'selected' : '' }}>Kesulitan Belajra (K)</option>
                        <option value="Indigo(O)" {{ $selectedKebutuhan == 'Indigo(O)' ? 'selected' : '' }}>Indigo (O)</option>
                        <option value="Down Sindrome(P)" {{ $selectedKebutuhan == 'Down Sindrome(P)' ? 'selected' : '' }}>Down Sindrome (P)</option>
                        <option value="Autis(Q)" {{ $selectedKebutuhan == 'Autis(Q)' ? 'selected' : '' }}>Autis (Q)</option>
                    </select>
                @endif
            </td>

        </tr>
        <tr>
            <th>Nama Ibu</th>
            <td>
                {{ $datamurid->namaibu}}
            </td>
        </tr>
        <tr>
            <th>NIK Ibu</th>
            <td>
                {{ $datamurid->nikibu}}
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir Ibu</th>
            <td>
                {{ $datamurid->tahunlahiribu}}
            </td>
        </tr>
        <tr>
            <th>Pendidikan Terakhir Ibu</th>
            <td>
                {{ $datamurid->pendidikanibu}}
            </td>
        </tr>
        <tr>
            <th>Pekerjaan Ibu</th>
            <td>
                {{ $datamurid->pekerjaanibu}}
            </td>
        </tr>
        <tr>
            <th>Penghasilan Bulanan Ibu</th>
            <td>
                {{ $datamurid->penghasilanibu}}
            </td>
        </tr>
        <tr>
            <th>Kebutuhan Khusus Ibu</th>
            <td>
            @php
                $kebutuhanRaw = $datamurid->kebutuhankususibu;

                // Inisialisasi variabel kebutuhan
                $kebutuhan = [];

                if (is_array($kebutuhanRaw)) {
                    $kebutuhan = $kebutuhanRaw;
                } else {
                    $decoded = json_decode($kebutuhanRaw, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        // Kalau hasil decode berupa array
                        if (is_array($decoded)) {
                            $kebutuhan = $decoded;
                        } else {
                            // Kalau hasil decode adalah string (misal "Tuna Netra")
                            $kebutuhan = [$decoded];
                        }
                    } elseif (!empty($kebutuhanRaw) && $kebutuhanRaw !== 'null') {
                        // Kalau bukan JSON, tapi ada datanya
                        $kebutuhan = [$kebutuhanRaw];
                    }
                }
            @endphp

            <td>
                {{-- ✅ Jika lebih dari 1 kebutuhan, tampilkan sebagai teks saja --}}
                 @if (count($kebutuhan) > 1)
                   {{ implode(', ', $kebutuhan) }}
                {{-- ✅ Jika hanya satu, tampilkan juga dropdown (readonly/disabled) --}}
                 {{-- Jika hanya satu kebutuhan, tampilkan dropdown (readonly) --}}
                @elseif(count($kebutuhan) === 1)
                    {{ implode(', ', $kebutuhan) }}
                {{-- Kalau tidak ada kebutuhan --}}
                @else
                    <select class="form-control" disabled>
                        @php
                        $selectedKebutuhan = old('kebutuhankususibu', $data->kebutuhankususibu ?? '');
                        @endphp
                        <option value="Tidak" {{ $selectedKebutuhan == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        <option value="Netra(A)" {{ $selectedKebutuhan == 'Netra(A)' ? 'selected' : '' }}>Netra (A)</option>
                        <option value="Rungu(B)" {{ $selectedKebutuhan == 'Rungu(B)' ? 'selected' : '' }}>Rungu (B)</option>
                        <option value="Grahita ringan(C)" {{ $selectedKebutuhan == 'Grahita ringan(C)' ? 'selected' : '' }}>Grahita ringan (C)</option>
                        <option value="Grahita Sedang(C1)" {{ $selectedKebutuhan == 'Grahita Sedang(C1)' ? 'selected' : '' }}>Grahita Sedang (C1)</option>
                        <option value="Daksa Ringan(D)" {{ $selectedKebutuhan == 'Daksa Ringan(D)' ? 'selected' : '' }}>Daksa Ringan (D)</option>
                        <option value="Daksa Sedang(D1)" {{ $selectedKebutuhan == 'Daksa Sedang(D1)' ? 'selected' : '' }}>Daksa Sedang (D1)</option>
                        <option value="Laras" {{ $selectedKebutuhan == 'Laras' ? 'selected' : '' }}>Laras</option>
                        <option value="Wicara(F)" {{ $selectedKebutuhan == 'Wicara(F)' ? 'selected' : '' }}>Wicara (F)</option>
                        <option value="Tuna ganda(G)" {{ $selectedKebutuhan == 'Tuna ganda(G)' ? 'selected' : '' }}>Tuna ganda (G)</option>
                        <option value="Hiper aktif(H)" {{ $selectedKebutuhan == 'Hiper aktif(H)' ? 'selected' : '' }}>Hiper aktif (H)</option>
                        <option value="Cerdas Istimewa(i)" {{ $selectedKebutuhan == 'Cerdas Istimewa(i)' ? 'selected' : '' }}>Cerdas Istimewa (i)</option>
                        <option value="Bakat Istimewa(J)" {{ $selectedKebutuhan == 'Bakat Istimewa(J)' ? 'selected' : '' }}>Bakat Istimewa (J)</option>
                        <option value="Kesulitan Belajra(K)" {{ $selectedKebutuhan == 'Kesulitan Belajra(K)' ? 'selected' : '' }}>Kesulitan Belajra (K)</option>
                        <option value="Indigo(O)" {{ $selectedKebutuhan == 'Indigo(O)' ? 'selected' : '' }}>Indigo (O)</option>
                        <option value="Down Sindrome(P)" {{ $selectedKebutuhan == 'Down Sindrome(P)' ? 'selected' : '' }}>Down Sindrome (P)</option>
                        <option value="Autis(Q)" {{ $selectedKebutuhan == 'Autis(Q)' ? 'selected' : '' }}>Autis (Q)</option>
                    </select>
                @endif
            </td>
        </tr>
        <tr>
            <th>Nama Wali</th>
            <td>
                {{ $datamurid->namawali}}
            </td>
        </tr>
        <tr>
            <th>NIK Wali</th>
            <td>
                {{ $datamurid->nikwali}}
            </td>
        </tr>
        <tr>
            <th>Tanggal Lahir Wali</th>
            <td>
                {{ $datamurid->tahunlahirwali}}
            </td>
        </tr>
        <tr>
            <th>Pendidikan Terakhir Wali</th>
            <td>
                {{ $datamurid->pendidikanwali}}
            </td>
        </tr>
        <tr>
            <th>Pekerjaan Wali</th>
            <td>
                {{ $datamurid->pekerjaanwali}}
            </td>
        </tr>
        <tr>
            <th>Penghasilan Bulanan Wali</th>
            <td>
                {{ $datamurid->penghasilanwali}}
            </td>
        </tr>
        <tr>
            <th>Kebutuhan Khusus Wali</th>
            <td>
            @php
                $kebutuhanRaw = $datamurid->kebutuhankususwali;

                // Inisialisasi variabel kebutuhan
                $kebutuhan = [];

                if (is_array($kebutuhanRaw)) {
                    $kebutuhan = $kebutuhanRaw;
                } else {
                    $decoded = json_decode($kebutuhanRaw, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        // Kalau hasil decode berupa array
                        if (is_array($decoded)) {
                            $kebutuhan = $decoded;
                        } else {
                            // Kalau hasil decode adalah string (misal "Tuna Netra")
                            $kebutuhan = [$decoded];
                        }
                    } elseif (!empty($kebutuhanRaw) && $kebutuhanRaw !== 'null') {
                        // Kalau bukan JSON, tapi ada datanya
                        $kebutuhan = [$kebutuhanRaw];
                    }
                }
            @endphp

            <td>
                {{-- ✅ Jika lebih dari 1 kebutuhan, tampilkan sebagai teks saja --}}
                 @if (count($kebutuhan) > 1)
                   {{ implode(', ', $kebutuhan) }}
                {{-- ✅ Jika hanya satu, tampilkan juga dropdown (readonly/disabled) --}}
                 {{-- Jika hanya satu kebutuhan, tampilkan dropdown (readonly) --}}
                @elseif(count($kebutuhan) === 1)
                    {{ implode(', ', $kebutuhan) }}
                {{-- Kalau tidak ada kebutuhan --}}
                @else
                    <select class="form-control" disabled>
                        @php
                        $selectedKebutuhan = old('kebutuhankususwali', $data->kebutuhankususwali ?? '');
                        @endphp
                        <option value="Tidak" {{ $selectedKebutuhan == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        <option value="Netra(A)" {{ $selectedKebutuhan == 'Netra(A)' ? 'selected' : '' }}>Netra (A)</option>
                        <option value="Rungu(B)" {{ $selectedKebutuhan == 'Rungu(B)' ? 'selected' : '' }}>Rungu (B)</option>
                        <option value="Grahita ringan(C)" {{ $selectedKebutuhan == 'Grahita ringan(C)' ? 'selected' : '' }}>Grahita ringan (C)</option>
                        <option value="Grahita Sedang(C1)" {{ $selectedKebutuhan == 'Grahita Sedang(C1)' ? 'selected' : '' }}>Grahita Sedang (C1)</option>
                        <option value="Daksa Ringan(D)" {{ $selectedKebutuhan == 'Daksa Ringan(D)' ? 'selected' : '' }}>Daksa Ringan (D)</option>
                        <option value="Daksa Sedang(D1)" {{ $selectedKebutuhan == 'Daksa Sedang(D1)' ? 'selected' : '' }}>Daksa Sedang (D1)</option>
                        <option value="Laras" {{ $selectedKebutuhan == 'Laras' ? 'selected' : '' }}>Laras</option>
                        <option value="Wicara(F)" {{ $selectedKebutuhan == 'Wicara(F)' ? 'selected' : '' }}>Wicara (F)</option>
                        <option value="Tuna ganda(G)" {{ $selectedKebutuhan == 'Tuna ganda(G)' ? 'selected' : '' }}>Tuna ganda (G)</option>
                        <option value="Hiper aktif(H)" {{ $selectedKebutuhan == 'Hiper aktif(H)' ? 'selected' : '' }}>Hiper aktif (H)</option>
                        <option value="Cerdas Istimewa(i)" {{ $selectedKebutuhan == 'Cerdas Istimewa(i)' ? 'selected' : '' }}>Cerdas Istimewa (i)</option>
                        <option value="Bakat Istimewa(J)" {{ $selectedKebutuhan == 'Bakat Istimewa(J)' ? 'selected' : '' }}>Bakat Istimewa (J)</option>
                        <option value="Kesulitan Belajra(K)" {{ $selectedKebutuhan == 'Kesulitan Belajra(K)' ? 'selected' : '' }}>Kesulitan Belajra (K)</option>
                        <option value="Indigo(O)" {{ $selectedKebutuhan == 'Indigo(O)' ? 'selected' : '' }}>Indigo (O)</option>
                        <option value="Down Sindrome(P)" {{ $selectedKebutuhan == 'Down Sindrome(P)' ? 'selected' : '' }}>Down Sindrome (P)</option>
                        <option value="Autis(Q)" {{ $selectedKebutuhan == 'Autis(Q)' ? 'selected' : '' }}>Autis (Q)</option>
                    </select>
                @endif
            </td>
        </tr>
        <tr>
            <th>No Hp</th>
            <td>
                {{ $datamurid->nohp}}
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                {{ $datamurid->email}}
            </td>
        </tr>
        <tr>
            <th>Tinggi Badan</th>
            <td>
                {{ $datamurid->tinggibadan}}
            </td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <td>
                {{ $datamurid->beratbadan}}
            </td>
        </tr>
        <tr>
            <th>Lingkaran Kepala</th>
            <td>
                {{ $datamurid->linkarkepala}}
            </td>
        </tr>
        <tr>
            <th>Jarak Tempuh</th>
            <td>
                {{ $datamurid->jaraktempuh}}
            </td>
        </tr>
        <tr>
            <th>Waktu Tempuh</th>
            <td>
                {{ $datamurid->waktutempuh}}
            </td>
        </tr>
        <tr>
            <th>Jumlah Saudara</th>
            <td>
                {{ $datamurid->jumlahsaudara}}
            </td>
        </tr>
        <tr>
            <th>Nama Lomba</th>
            <td>
                {{ $datamurid->jenislomba}}
            </td>
        </tr>
                <tr>
            <th>Tingkat Lomba</th>
            <td>
                {{ $datamurid->tingkat}}
            </td>
        </tr>
        <tr>
            <th>Tahun Lomba</th>
            <td>
                {{ $datamurid->tahun}}
            </td>
        </tr>
        <tr>
            <th>Penyelenggara</th>
            <td>
                {{ $datamurid->Penyelenggara}}
            </td>
        </tr>
    </table>

    <h4>Lampiran Dokumen</h4>

    <table style="width: 100%; border: none; margin-top: 5px;">
    <tr>
        <td style="text-align:left;">
        <p><strong>Scan Kartu Keluarga<</strong></p>
            @if ($datamurid->fotokk)
                <img src="{{ asset('uploads/fotokk-siswa/' . $datamurid->fotokk) }}" alt="Kartu Keluarga" style="max-width: 700px; height: auto; border: 1px solid #000; padding: 4px;">
            @else
                <p style="color: gray;">foto Kartu Keluarga  belum diunggah</p>
            @endif    
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            <p><strong>Scan KTP</strong></p>
            @if ($datamurid->fotoktp)
                <img src="{{ asset('uploads/foto-ktp/' . $datamurid->fotoktp) }}" alt="KTP" style="max-width: 700px; height: auto; border: 1px solid #000; padding: 4px;">
            @else
                <p style="color: gray;">KTP belum diunggah</p>
            @endif
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            <p><strong>Scan AKTE Lahir</strong></p>
            @if ($datamurid->fotoakte)
                <img src="{{ asset('uploads/fotoakte-murid/' . $datamurid->fotoakte) }}" alt="Akte murid" style="max-width: 700px; height: auto; border: 1px solid #000; padding: 4px;">
            @else
                <p style="color: gray;">Akte Murid belum diunggah</p>
            @endif
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            <p><strong>Scan Surat Kelulusan</strong></p>
            @if ($datamurid->fotokelulusan)
                <img src="{{ asset('uploads/foto-fotokelulusan/' . $datamurid->fotokelulusan) }}" alt="keterangan lulus" style="max-width: 700px; height: auto; border: 1px solid #000; padding: 4px;">
            @else
                <p style="color: gray;">keterangan lulus belum diunggah</p>
            @endif
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            <p><strong>Scan Surat Pindah</strong></p>
            @if ($datamurid->fotosuratpindah)
                <img src="{{ asset('uploads/foto-fotosuratpindah/' . $datamurid->fotosuratpindah) }}" alt="keterangan pindah" style="max-width: 700px; height: auto; border: 1px solid #000; padding: 4px;">
            @else
                <p style="color: gray;">surat pindah belum diunggah</p>
            @endif
        </td>
    </tr>
    </table>


    <div style="margin-top: 50px; width: 100%;">
    <div style="width: 50%; float: left; text-align: center;">
        <p>Verifikator,</p>
        <br><br><br>
        <strong>(___________________)</strong>
    </div>
    <div style="width: 50%; float: right; text-align: center;">
        <p>Kepala Sekolah,</p>
        <br><br><br>
        <strong>(___________________)</strong>
    </div>
    </div>
    <div style="clear: both;"></div>


    <div class="no-print">
      <button onclick="window.print()">🖨 Cetak</button>
      <a href="{{ url()->previous() }}" style="margin-left: 10px;">🔙 Kembali</a>
    </div>
  </div>
</body>
</html>
