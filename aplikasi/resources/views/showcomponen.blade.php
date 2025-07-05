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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

        <style>
            /* Ukuran logo dan padding lebih kecil */
            /* ==== NAVBAR ==== */
            .logo-navbar {
                width: 24px;
                height: 24px;
            }

            .navbar-nav .nav-link,
            .navbar .form-control,
            .navbar .btn {
                font-size: 0.9rem;
            }

            .navbar-nav .nav-link {
                padding: 6px 10px;
            }

            .navbar .form-control {
                height: 30px;
            }

            .navbar .btn {
                padding: 4px 10px;
            }

            /* ==== LAYOUT UTAMA ==== */
            .container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
                max-width: 1200px;
                margin: auto;
            }

            .main-content {
                flex: 1 1 65%;
            }

            .sidebar-artikel {
                flex: 1 1 30%;
                background: #f9f9f9;
                padding: 15px;
                border-radius: 10px;
            }
            
            /* Heder */
           .hero-kegiatan {
            position: relative;
            width: 100%;
            min-height: 400px; /* tinggi minimal desktop */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            /* overlay dengan pseudo element agar overlaynya rapi */
            }

            .hero-kegiatan .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5); /* semi transparan hitam untuk kontras */
            z-index: 1;
            }

            .hero-kegiatan .hero-text {
            position: relative;
            z-index: 2;
            max-width: 800px;
            }

            .hero-kegiatan h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            }

            .hero-kegiatan p {
            font-size: 1.25rem;
            line-height: 1.5;
            margin-bottom: 20px;
            }

            /* Tombol */
            .btn-galeri {
            display: inline-block;
            padding: 12px 30px;
            background-color: #ff6600;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            }

            .btn-galeri:hover {
            background-color: #032b99;
            }

            /* Responsive untuk layar lebih kecil */
            @media (max-width: 768px) {
            .hero-kegiatan {
                min-height: 300px;
                padding: 0 15px;
            }

            .hero-kegiatan h1 {
                font-size: 2rem;
            }

            .hero-kegiatan p {
                font-size: 1rem;
            }
            
            .btn-galeri {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            }

            @media (max-width: 480px) {
            .hero-kegiatan {
                min-height: 250px;
                padding: 0 10px;
            }

            .hero-kegiatan h1 {
                font-size: 1.5rem;
            }

            .hero-kegiatan p {
                font-size: 0.9rem;
            }
            
            .btn-galeri {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
            }

            /* ==== ARTIKEL ==== */
            .article-header h1 {
                font-size: 2em;
                margin-bottom: 5px;
            }

            .article-header p {
                color: #888;
                font-size: 0.9em;
            }

            .article-image {
                width: 100%;
                height: auto;
                margin: 15px 0;
                border-radius: 8px;
            }

            .article-content {
                line-height: 1.6;
                font-size: 1.1em;
            }

            /* ==== SIDEBAR ARTIKEL LAINNYA ==== */
           .bagikan-artikel {
                margin-top: 40px;
            }

            .bagikan-artikel h3 {
                font-size: 1.4rem;
                margin-bottom: 10px;
                border-bottom: 2px solid #eee;
                padding-bottom: 5px;
            }

            .sosial-share {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .btn-share {
                width: 48px;
                height: 48px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                color: white;
                font-size: 1.2rem;
                transition: transform 0.2s;
                text-decoration: none;
            }

            .btn-share:hover {
                transform: scale(1.1);
            }

            /* Warna ikon */
            .fb { background-color: #3b5998; }
            .email { background-color: #c0392b; }
            .telegram { background-color: #3498db; }
            .whatsapp { background-color: #25d366; }
            .x { background-color: #111; }

            .postingan-terkait {
                margin-top: 50px;
            }

            .postingan-terkait h3 {
                font-size: 1.4rem;
                margin-bottom: 15px;
                border-bottom: 2px solid #eee;
                padding-bottom: 5px;
            }

            .related-posts {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }

            .card-post {
                width: calc(33.333% - 20px);
                background: white;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 2px 8px rgba(0,0,0,0.08);
                transition: transform 0.2s;
                display: flex;
                flex-direction: column;
            }

            .card-post:hover {
                transform: translateY(-4px);
            }

            .card-post img {
                width: 100%;
                height: 180px;
                object-fit: cover;
            }

            .card-text {
                padding: 15px;
            }

            .card-text h4 {
                margin: 0;
                font-size: 1.1rem;
            }

            .card-text a {
                text-decoration: none;
                color: #333;
                font-weight: bold;
            }

            .card-text a:hover {
                color: orange;
            }

            .card-text p {
                margin-top: 8px;
                font-size: 0.95rem;
                color: #666;
            }

            /* Responsive */
            @media (max-width: 992px) {
                .card-post {
                    width: calc(50% - 20px);
                }
            }

            @media (max-width: 600px) {
                .sosial-share {
                    justify-content: space-between;
                }

                .btn-share {
                    width: 44px;
                    height: 44px;
                    font-size: 1rem;
                }

                .card-post {
                    width: 100%;
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
                                    <li><a class="dropdown-item" href="Pengumuman">Pengumuman</a></li>
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
        <main>
        <section class="hero-kegiatan" style="background-image: url('{{ asset('uploads/foto-componen/' . $componen->foto) }}'); background-size: cover; background-position: center;">
            <div class="overlay">
                <div class="hero-text">
                    <h1>{{ Str::limit($componen->nama, 30) }}</h1>
                    <p style="color: #ffffff">{{ Str::limit(strip_tags($componen->konten), 100) }}</p>
                    <a href="#" class="btn-galeri">Tampilkan Lebih banyak >></a>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="article-header">
            <h1>{{ $componen->nama }}</h1>
            <p>{{ \Carbon\Carbon::parse($componen->created_at)->format('d M Y') }}</p>
            </div>

            @if($componen->foto)
            <img src="{{ asset('uploads/foto-componen/' . $componen->foto) }}" alt="Gambar komponen" class="article-image">
            @endif

            <div class="article-content">
            {{-- {{strip_tags($componen->konten)}} --}}
            {!!$componen->konten!!}
            </div>

        </div>


        <!-- Bagikan -->
            @php
                $url = urlencode(Request::url()); // URL halaman saat ini
                $judul = urlencode($componen->nama ?? ''); // Judul artikel
            @endphp

            <!-- Bagikan -->
            <div class="bagikan-artikel">
                <h3>Berbagi</h3>
                <div class="sosial-share">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" 
                    class="btn-share fb" 
                    target="_blank" 
                    title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!-- Email -->
                    <a href="mailto:?subject={{ $judul }}&body={{ $url }}" 
                    class="btn-share email" 
                    target="_blank" 
                    title="Email">
                        <i class="fas fa-envelope"></i>
                    </a>

                    <!-- Telegram -->
                    <a href="https://t.me/share/url?url={{ $url }}&text={{ $judul }}" 
                    class="btn-share telegram" 
                    target="_blank" 
                    title="Telegram">
                        <i class="fab fa-telegram-plane"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://api.whatsapp.com/send?text={{ $judul }}%20{{ $url }}" 
                    class="btn-share whatsapp" 
                    target="_blank" 
                    title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <!-- X / Twitter -->
                    <a href="https://twitter.com/intent/tweet?text={{ $judul }}&url={{ $url }}" 
                    class="btn-share x" 
                    target="_blank" 
                    title="X / Twitter">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                </div>
            </div>

        <!-- Postingan Terkait -->
        <div class="postingan-terkait">
            <h3>Postingan Artikel</h3>
            <div class="related-posts">
                @foreach($infoberita as $item)
                <div class="card-post">
                    <img src="{{ asset('uploads/foto-componen/' . $item->foto) }}" alt="{{ $item->nama }}">
                    <div class="card-text">
                        <h4>
                            <a href="{{ route('showcomponen', $item->id) }}">{{ Str::limit($item->nama, 30) }}</a>
                        </h4>
                        <p>{{ Str::limit(strip_tags($item->konten), 80) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


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