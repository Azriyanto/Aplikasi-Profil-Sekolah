<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>SLBN 1|SPMB Online</title>

        <!--Icon-->
          <link href="{{asset('images/logosekolah.png')}}" rel="icon">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <!-- Bootstrap & Icons -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        <!-- Select2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

        <!-- Custom Template CSS -->
        <link href="{{ asset('css/templatemo-nomad-force.css') }}" rel="stylesheet">


        <style>
            /* Ukuran logo dan padding lebih kecil */
.logo-navbar {
    width: 24px;
    height: 24px;
}

/* Kecilkan ukuran font di navbar */
.navbar-nav .nav-link {
    font-size: 0.9rem;
    padding: 6px 10px;
}

/* Kecilkan tombol search */
.navbar .form-control {
    font-size: 0.9rem;
    height: 30px;
}
.navbar .btn {
    font-size: 0.9rem;
    padding: 4px 10px;
}

/* Media query untuk tampilan mobile */
@media (max-width: 576px) {
    .navbar-brand {
        font-size: 1rem;
    }

    .navbar-nav .nav-link {
        font-size: 0.85rem;
    }

    .navbar .form-control,
    .navbar .btn {
        font-size: 0.8rem;
        height: 28px;
    }

    .navbar .logo-navbar {
        width: 20px;
        height: 20px;
    }
}
        </style>
        
        <style>
            #visispmb {
                padding-top: 5px;
                margin-top: 0;
            }

            .marquee-text {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
            animation-play-state: running;
            }

            /* Inilah bagian pentingnya: hentikan saat hover */
            .marquee-wrapper:hover .marquee-text {
            animation-play-state: paused;
            }

            @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
            }
        </style>
        <style>
            .card-form {
                background: #ffffff;
                border-radius: 15px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                padding: 25px 20px;
                max-width: 700px;
                margin: auto;
            }

            .card-form h2 {
                text-align: center;
                margin-bottom: 25px;
                color: #304ffe;
                font-weight: 600;
            }

            .form-step {
                display: none;
            }

            .form-step.active {
                display: block;
                animation: fadeIn 0.4s ease-in-out;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .btn-nav {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 10px;
            }

            .btn-nav .btn {
                flex: 1 1 auto;
                font-size: 16px;
                border-radius: 50px;
            }

            .btn-primary {
                background-color: #304ffe;
                border: none;
            }

            .btn-primary:hover {
                background-color: #1e40ff;
            }

            .btn-secondary {
                background-color: #e0e0e0;
                color: #333;
                border: none;
            }

            .btn-secondary:hover {
                background-color: #d6d6d6;
            }

            /* Progress bar */
            .progressbar {
                display: flex;
                justify-content: space-between;
                margin-bottom: 30px;
                position: relative;
                counter-reset: step;
            }

            .progressbar::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 15px;
                right: 15px;
                height: 4px;
                background-color: #dcdcdc;
                z-index: 0;
            }

            .progress-step {
                width: 33.3%;
                text-align:left;
                position: relative;
                z-index: 1;
            }

            .progress-step::before {
                counter-increment: step;
                content: counter(step);
                width: 30px;
                height: 30px;
                line-height: 30px;
                display: inline-block;
                border: 2px solid #304ffe;
                color: #304ffe;
                border-radius: 50%;
                background-color: #fff;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .progress-step.active::before {
                background-color: #304ffe;
                color: white;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .card-form {
                    padding: 20px 15px;
                }

                .btn-nav {
                    flex-direction: column;
                    gap: 10px;
                }

                .btn-nav .btn {
                    width: 100%;
                }

                .progressbar::before {
                    left: 5px;
                    right: 5px;
                }
            }
        </style>
<!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->
    </head>
    
    {{-- <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;'> --}}
    <body>
        <main>
             <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <img src="{{asset('images/logosekolah.png')}}" alt="logo" class="logo-navbar" width="30" height="24" class="d-inline-block align-text-top"> 
                    <a class="navbar-brand" href="/">
                        <strong>SLB Negeri 1 </strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                                    <li><a class="dropdown-item" href="/prestasi">Prestasi</a></li>
                                    <li><a class="dropdown-item" href="/keterampilan">Keterampilan</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/gurudanstaf">Guru dan Staf</a></li>
                                    <li><a class="dropdown-item" href="/fasilitas">Fasilitas</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/struktur">Struktur Sekolah</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Informasi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/artikel">Artikel</a></li>
                                    <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                                    <li><a class="dropdown-item" href="#">Galeri Kegiatan</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Alumni</a></li>
                                </ul>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="/spmb">SPMB</a>
                            </li>

                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <main>
            
             <section> 
                <ul class="slider" style="background-image: linear-gradient(to bottom, #213363, #ffffff);">
                    @foreach($databener as $data)
                        <li>
                            <img src="{{ asset('uploads/foto-Bener/' . $data->foto) }}" style="width:90%; border-radius: 5px;">
                        </li>
                    @endforeach
                </ul>    
             </section>

             <div class="marquee-wrapper" style="overflow: hidden; background: orange; color: white; padding: 10px;">
                <div class="marquee-text">
                    <i class="bi bi-exclamation-triangle"></i> Pelaksanaan SPMB Online Sistem Informasi Pendaftaran Siswa Baru Sekolah Luar Biasa | Tahun Ajaran 2025/2026 tidak dipungut biaya (GRATIS)
                </div>
             </div>

             <section id="visispb" style="padding-top: 5px;">
                <div class="container mb-5 pb-lg-5">
                    <div class="row">

                        <div class="container py-5">
                            <div class="row align-items-center">
                                <div class="col-md-4" data-aos="zoom-in">
                                    <img src="images/logosekolah.png" alt="Avatar" style="width:50%">
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <h5>SLB NEGERI 1 TANJUNGPINANG</h5>
                                    <P style="font-size: 20px;">Tahun Ajaran 2025/2026</P>
                                    <p>Situs ini merupakan laman resmi untuk Sistem Penerimaan Murid Baru (SPMB)</p>
                                    <p>Provinsi Kepulauan Riau, Kota Tanjungpinang Tahun Ajaran 2025/2026 Untuk pelaksanaan (SPMB) Online</p>
                                </div>
                            </div>
                        </div>

                        <div class="persyaratan-container" data-aos="fade-up" style="max-width: 700px; margin: 30px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
                            <h2 style="text-align: center; color: #333;">Persyaratan Pendaftaran Siswa Baru</h2>
                            <p>Silakan Upload dokumen-dokumen berikut untuk mendaftar:</p>
                            <ul style="line-height: 1.8;">
                                <li>Pas Foto 3x4 Warna 2 Lembar</li>
                                <li>Foto copy akte/surat keterangan lahir 2 Lembar</li>
                                <li>Foto copy kartu keluarga 2 Lembar</li>
                                <li>Foto copy KTP Orang Tua/wali 2 lembar</li>
                                <li>Surat Keterangan dokter (kalau ada)</li>
                                <li>Foto copy ijazah TK/Paud (kalau ada)</li>
                                <li>Foto copy KPS/PKH/KIP/KKS/Surat Keterangan Tidak Mampu dari lurah (asli) Jika Punya</li>
                                <li>Foto copy Ijazah Terakhir / Surat keterangan Lulus untuk SDLB/SMPLB/SMALB</li>
                            </ul>
                            <h2 style="text-align: center; color: #333;">Persyaratan Murid Pindahan</h2>
                            <p>Silakan Upload dokumen-dokumen berikut untuk mendaftar:</p>
                            <ul style="line-height: 1.8;">
                                <li>Pas Foto 3x4 Warna 2 Lembar</li>
                                <li>Foto copy akte/surat keterangan lahir 2 Lembar</li>
                                <li>Foto copy kartu keluarga 2 Lembar</li>
                                <li>Foto copy KTP Orang Tua/wali 2 Lembar</li>
                                <li>Surat Keterangan dokter (kalau ada) 1 Lembar</li>
                                <li>Foto copy ijazah TK/Paud (kalau ada) 1 Lembar</li>
                                <li>Foto copy KPS/PKH/KIP/KKS/Surat Keterangan Tidak Mampu dari lurah (asli) Jika Punya 1 Lembar</li>
                                <li>Foto copy Ijazah Terakhir / Surat keterangan Lulus untuk SDLB/SMPLB/SMALB 1 Lembar</li>
                                <li>Raport dan fotocopy raport 1 Berkas</li>
                                <li>Surat pindah dari sekolah asal 1 Berkas</li>
                                <li>Foto copy NISN 2 lembar</li>
                                <li></li>
                                
                            </ul>
                            <p><strong>Catatan:</strong> Semua dokumen diserahkan dalam map plastik warna <span style="color:blue;">biru</span>.</p>
                        </div>


                        <section>
                            <h3 data-aos="fade-up">Langkah-langkah Pendaftaran Murid Baru</h3>
                            <ol data-aos="fade-up">
                            <li>Membuat akun di sistem pendaftaran</li>
                            <li>Login menggunakan akun yang telah dibuat</li>
                            <li>Mengisi formulir pendaftaran dengan lengkap</li>
                            <li>Upload dokumen seperti foto, kartu keluarga, akta kelahiran, dsb</li>
                            <li>Menunggu verifikasi dari pihak sekolah</li>
                            <li>Menerima notifikasi hasil pendaftaran</li>
                            </ol>


                            <div class="container mt-4" data-aos="fade-up"> 
                                <h3 class="mb-4">Prosedur Pendaftaran Siswa Baru</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">1. Buat Akun</h5>
                                        <p class="card-text">Klik tombol Login dan lengkapi data dasar seperti email dan password.</p>
                                        <p>1, Halaman Depan</p>
                                        <img src="images/langkahpendaftaran/halamandepan.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                        <p>2, Halaman Login</p>
                                        <img src="images/langkahpendaftaran/halamanlogin.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                        <p>3, Halaman Daftar</p>
                                        <img src="images/langkahpendaftaran/halamandaftar.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">2. Login</h5>
                                        <p class="card-text">Gunakan akun yang telah dibuat untuk masuk ke sistem.</p>
                                        </div>
                                        <p>1, Halaman Login</p>
                                        <img src="images/langkahpendaftaran/halamanlogin.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <p>2, Halaman Dasboard</p>
                                        <img src="images/langkahpendaftaran/halamandasboard.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                    </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">3. Isi Formulir</h5>
                                        <p class="card-text">Lengkapi data diri, orang tua, dan kebutuhan khusus dengan benar.</p>
                                        <p>1, Halaman Dasboard</p>
                                        <img src="images/langkahpendaftaran/halamandasboard.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                        <p>2, Tombol Daftar</p>
                                        <img src="images/langkahpendaftaran/kelik_tombol_daftar.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                        <p>1, Halaman Pengisian Formulir Pendaftaran</p>
                                        <img src="images/langkahpendaftaran/halaman_pengisian_pendaftaran.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">4. Upload Dokumen</h5>
                                        <p class="card-text">Unggah dokumen yang dibutuhkan seperti KK, akta, dan foto.</p>
                                        </div>
                                        <p>1, Halaman Upload File</p>
                                        <img src="images/langkahpendaftaran/UploadData.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                    </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">5. Tunggu Verifikasi</h5>
                                        <p class="card-text">Admin sekolah akan memverifikasi data Anda.</p>
                                        </div>
                                        <p>1, Halaman Tunggu Verifikasi</p>
                                        <img src="images/langkahpendaftaran/halamandasboard.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                    </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                        <h5 class="card-title">6. Hasil Pendaftaran</h5>
                                        <p class="card-text">Anda akan menerima notifikasi diterima atau tidaknya melalui sistem.</p>
                                        </div>
                                        <img src="images/langkahpendaftaran/halamandasboard.png" alt="Avatar" style="width:100%; height:auto; max-width:300px; display:block; margin:auto;">
                                        <br>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </section>


                        <div class="container py-5">
                            <div class="row align-items-center">
                                <div class="col-md-4" data-aos="zoom-in">
                                    <img src="images/SDSMPSMA.png" alt="Avatar" style="width:50%">
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-end mb-4">
                                            <div>
                                                <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">JENJANG DAN JALUR PENDAFTARAN</h2>
                                                <p data-aos="fade-up">SLB Negeri 1 Tanjungpinang</p>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="artikelshow">

                                        <div class="articel" data-aos="fade-up">
                                        <img src="images/tk.png" alt="Avatar" style="width:65%;border-radius: 10px 10px 0 0;">
                                            <div class="containerartikel">
                                                <h5><b>TKLB</b> = <span style="color: rgb(0, 128, 0);"><b>{{$jumlahMuridTKLB}}</b></span></h5> 
                                                <p>Kouta = 25 Rombel 5</p> 
                                            </div>
                                        </div>

                                        <div class="articel" data-aos="fade-up">
                                        <img src="images/SD.jpg" alt="Avatar" style="width:99%;border-radius: 10px 10px 0 0;">
                                        <div class="containerartikel">
                                            <h5><b>SDLB</b> = <span style="color: rgb(128, 0, 0);"><b>{{$jumlahMuridSDLB}}</b></span> </h5> 
                                            <p>Kouta = 25 Romnbel 5</p> 
                                        </div>
                                        </div>

                                        <div class="articel" data-aos="fade-up">
                                        <img src="images/SMP.png" alt="Avatar" style="width:89%;border-radius: 10px 10px 0 0;">
                                        <div class="containerartikel">
                                            <h5><b>SMPLB</b> = <span style="color: rgb(0, 47, 128);"><b>{{$jumlahMuridSMPLB}}</b></span> </h5> 
                                            <p>Kuta = 40    Rombel 5</p> 
                                        </div>
                                        </div>
                                        <div class="articel" data-aos="fade-up">
                                        <img src="images/SMA.png" alt="Avatar" style="width:83%;;border-radius: 10px 10px 0 0;">
                                        <div class="containerartikel">
                                            <h5><b>SMALB</b> = <span style="color: rgb(247, 247, 49);"><b>{{$jumlahMuridSMALB}}</b></span></h5> 
                                            <p>Kuta = 48  Rombel 6</p> 
                                        </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>    
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <h5 class="card-title">Data Nama-Nama</h5><span> Peserta Didik Baru yang Sudah Mendaftar</span>
                        <div class="card">
                            <div class="card-body">
                                <!-- Responsive table wrapper -->
                                <div class="table-responsive">
                                <table id="tabelPesertaDidik" class="table table-striped table-hover">
                                    <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>FOTO</th>
                                        <th>NAMA</th>
                                        <th>JENJANG</th>
                                        <th>TANGGAL PENDAFTARAN</th>
                                        <th>DATA</th>
                                        <th>STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($muridbaru as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                        <img src="{{ asset('uploads/foto-murid/'.$data->foto) }}" alt="pas foto" class="rounded-circle" style="max-height: 50px;">
                                        </td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->jenjangtingkat}}</td>
                                        <td>{{$data->tanggaldaftar}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>

                                            @if($data->prosesstatus == 'Murid Diterima')
                                                <span class="badge bg-success">{{ $data->prosesstatus }}</span>
                                            @elseif($data->prosesstatus == 'Murid Tidak diterima')
                                                <span class="badge bg-danger">{{ $data->prosesstatus }}</span>
                                            @elseif($data->prosesstatus == 'Proses Validasi')
                                                <span class="badge bg-warning text-dark">{{ $data->prosesstatus }}</span>
                                            @elseif($data->prosesstatus == 'Data Tidak Lengkap')
                                                <span class="badge bg-warning text-dark">{{ $data->prosesstatus }}</span>
                                            @else
                                                <span class="badge bg-secondary">{{ $data->prosesstatus }}</span>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                                <!-- End Responsive Table -->

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

        <footer class="site-footer mt-5">
            <div class="row">

                <div class="col-12">
                    <h5 class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        SLB NEGERI 1 Tanjungpinang
                    </h5>

                    <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                        slbnegeri1tanjungpinang.sch.id
                    </a>
                </div>

            </div>

             <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px;">
    
                <!-- Kolom 1: Info & Kontak -->
                <div style="flex: 1; min-width: 250px;">
                <h5 style="color: #ffffff"><strong>Info & Alamat Kami</strong></h5>
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/SLBN1Tanjungpinang" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="https://wa.me/6282170574124" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="https://www.instagram.com/slbnegeri1tanjungpinang/" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="https://www.youtube.com/channel/UC9-nDKo8Xze9CvuLBu8knNQ" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                <p style="color: #ffffff;">
                    Jl. Kijang Lama KM 07, Kec. Melayu Kota Piring, Tanjungpinang Timur,<br>
                    Kota Tanjung Pinang, Kepulauan Riau 29112
                </p>
                </div>

                <!-- Kolom 2: Info & Berita -->
                <div style="flex: 1; min-width: 250px;">
                    <h5 style="color: #ffffff"><strong>Info dan Berita Terbaru</strong></h5>
                    
                    @foreach($infoberita as $info)
                        <p style="color: #ffffff; margin-bottom: 4px;">
                            {{ \Carbon\Carbon::parse($info->created_at)->format('d F Y') }} pk. {{ \Carbon\Carbon::parse($info->created_at)->format('H:i:s') }} WIB
                        </p>
                        <p style="color: #ffffff;">{{ $info->nama }}</p>
                    @endforeach
                </div>

                <!-- Kolom 3: Dukungan -->
                <div style="flex: 1; min-width: 200px;">
                <h5 style="color: rgb(255, 255, 255)"><strong>Didukung Oleh</strong></h5>             
                <div style="display: flex; gap: 10px; align-items: center;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" style="height: 40px;">
                    <img src="https://cdn.siap-ppdb.com/file-ppdb/ppdb%20institusi/asset%20img/portal%20instansi/Logo_AppStore.svg" alt="App Store" style="height: 40px;">
                </div>
                </div>

                <div class="col-6">
                    <ul class="copyright-text">
                        Copyright © Digitach Global developer 2025 
                    </ul>
                </div>
                
            </div>
        </footer>
        

        <!-- ✅ JQUERY (Hanya 1x) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- ✅ Bootstrap Bundle (setelah jQuery) -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- ✅ Slick Carousel (setelah jQuery) -->
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- ✅ Select2 -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- ✅ DataTables -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <!-- ✅ Plugin tambahan -->
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
        <script src="{{ asset('js/scrollspy.min.js') }}"></script>

        <!-- ✅ SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- ✅ Custom JS (paling akhir) -->
        <script src="{{ asset('js/custom.js') }}"></script>


       <script type="text/javascript">
            $('.slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplaySpeed: 3000,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                });
        </script>

<script type="text/javascript">
            $('.artikelshow').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                    },
                    {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                });

        </script>

<style>
  .form-step { display: none; }
  .form-step.active { display: block; }
</style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


{{-- CSS sederhana untuk menyembunyikan step --}}
<style>
    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
    }
</style>


<script type="text/javascript">
  $(document).ready(function (e) {
     $('#user-button').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-image-before-upload').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (e) {
     $('#user-kk').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-image-kk').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (e) {
     $('#foto_ktp').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-image-Akte').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (e) {
     $('#fotoakte').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-fotoakte').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (e) {
     $('#fotokelulusan').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-fotokelulusan').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script type="text/javascript">
  $(document).ready(function (e) {
     $('#fotosuratpindah').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#preview-fotosuratpindah').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
     });
  });
</script>

<script>
      function toggleFormWali(value) {
          const formWali = document.getElementById('form-wali');

          if (value === 'ya') {
              formWali.style.display = 'block';
          } else {
              formWali.style.display = 'none';

              // Kosongkan input jika tidak punya wali
              document.getElementById('namawali').value = '';
              document.getElementById('nikwali').value = '';
              document.getElementById('tahunlahirwali').value = '';
              document.getElementById('pendidikanwali').value = '';
              document.getElementById('pekerjaanwali').value = '';
              document.getElementById('penghasilanwali').value = '';
              document.getElementById('kebutuhankususwali').value = '';
          }
      }
  </script>

  <script>
      function toggleFormprestasi(value) {
          const formWali = document.getElementById('form-prestasi');

          if (value === 'ya') {
              formWali.style.display = 'block';
          } else {
              formWali.style.display = 'none';

              // Kosongkan input jika tidak punya wali
              document.getElementById('namalomba').value = '';
              document.getElementById('jenislomba').value = '';
              document.getElementById('tingkat').value = '';
              document.getElementById('tahun').value = '';
              document.getElementById('penyelengara').value = '';
          }
      }
  </script>

   <script>
    $(document).ready(function(){
        $('.kebutuhankusus').select2({
            placeholder:'select',
            allowClear:true,
        });

        $("#kebutuhankusus").select2({
          ajax:{
            url:"{{route('kebutuhan-kusus')}}",
            type:"post",
            delay:250,
            dataType:'json',
            data: function(params){
              return{
                name:params.term,
                "_token":"{{csrf_token()}}",
              };
            },
            
            processResults:function(data){
              return{
                results:$.map(data,function(item){
                  return{
                    id:item.id,
                    text:item.title
                  }
                })
              };
            },
          },
        });

    });
  </script>

<script>
  $(document).ready(function() {
    $('#tabelPesertaDidik').DataTable({
      language: {
        search: "Cari:",
        lengthMenu: "Tampilkan _MENU_ data",
        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        paginate: {
          first: "Pertama",
          last: "Terakhir",
          next: "Berikutnya",
          previous: "Sebelumnya"
        },
        zeroRecords: "Tidak ada data ditemukan",
      },
      responsive: true
    });
  });
</script>

    </body>
</html>