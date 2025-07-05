<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>SLBN 1|Tanjungpinang</title>

        <!--Icon-->
          <link href="{{asset('images/logosekolah.png')}}" rel="icon">
      <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
          
        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <link href="{{asset('css/aos.css')}}" rel="stylesheet">

        <link href="{{asset('css/templatemo-nomad-force.css')}}" rel="stylesheet">
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

                            <li class="nav-item">
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
    
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="images/KepalaSekolah.png" alt="Avatar" style="width:90%">
                        <h5>Kepala Sekolah</h5>
                        <h5>T.Sy.Nadhrah, S.Pd</h5>
                    </div>
                    <div class="col-md-8">
                        <h5>Assalamu'alaikum warahmatullahi wabarakatuh</h5>
                        <p>This is where you can write about yourself, your experiences, your skills, and your interests. You can also include a brief summary of your career or professional goals.</p>
                        <p>Example: I'm a web developer with [Number] years of experience, passionate about [Area of Expertise].</p>
                        <h5>Wassalamu'alaikum warahmatullahi wabarakatuh</h5>
                    </div>
                </div>
            </div>
        <main>

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
        

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('js/scrollspy.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>