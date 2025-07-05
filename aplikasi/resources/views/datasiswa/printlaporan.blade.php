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

    <h3 style="text-align: center;">LAPORAN DATA-DATA MURID BARU (SPMB)</h3>

    <table id="tabelku" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>FOTO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JENJANG</th>
                <th>KEBUTUHANKHUSUS</th>
                <th>TANGGAL PEDAFTARAN</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporanmuridspmb as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="{{ asset('uploads/foto-murid/'.$data->foto) }}" alt="pas foto" style="max-height: 50px;" class="rounded-circle">
                </td>
                <td>{{$data->nik}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenjangtingkat}}</td>
                <td>
                        @php
                    // Ambil data mentah dari field
                    $kebutuhanRaw = $data->kebutuhankusus;
                    // Daftar kebutuhan khusus berdasarkan kode
                    $daftarKebutuhan = [
                        1 => 'Tidak',
                        2 => 'Netra (A)',
                        3 => 'Rungu (B)',
                        4 => 'Grahita ringan (C)',
                        5 => 'Grahita Sedang (C1)',
                        6 => 'Daksa Ringan (D)',
                        7 => 'Daksa Sedang (D1)',
                        8 => 'Laras',
                        9 => 'Wicara (F)',
                        10 => 'Tuna Ganda (G)',
                        12 => 'Hiperaktif (H)',
                        13 => 'Cerdas Istimewa (I)',
                        14 => 'Bakat Istimewa (J)',
                        15 => 'Kesulitan Belajar (K)',
                        16 => 'Indigo (O)',
                        17 => 'Down Sindrome (P)',
                        18 => 'Autis (Q)',
                    ];
                
                    // Inisialisasi variabel kebutuhan
                    $kebutuhan = [];
                
                    // Deteksi format data mentah
                    if (is_array($kebutuhanRaw)) {
                        $kebutuhan = $kebutuhanRaw;
                    } else {
                        $decoded = json_decode($kebutuhanRaw, true);
                        if (json_last_error() === JSON_ERROR_NONE) {
                            if (is_array($decoded)) {
                                $kebutuhan = $decoded;
                            } else {
                                $kebutuhan = [$decoded];
                            }
                        } elseif (is_string($kebutuhanRaw) && str_contains($kebutuhanRaw, ',')) {
                            $kebutuhan = explode(',', $kebutuhanRaw);
                        } elseif (!empty($kebutuhanRaw) && $kebutuhanRaw !== 'null') {
                            $kebutuhan = [$kebutuhanRaw];
                        }
                    }
                
                    // Konversi ke nama kebutuhan
                    $kebutuhanNama = [];
                    foreach ($kebutuhan as $kode) {
                        $kode = is_numeric($kode) ? (int) $kode : trim($kode);
                        $kebutuhanNama[] = $daftarKebutuhan[$kode] ?? $kode;
                    }
                
                    $hasilTeks = implode(', ', $kebutuhanNama);
                @endphp
                
                        {{ $hasilTeks }}
            
                </td>
                <td>{{$data->tanggaldaftar}}</td>
                <td>{{$data->status}}</td>
            </tr>
            @endforeach
        </tbody>
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
