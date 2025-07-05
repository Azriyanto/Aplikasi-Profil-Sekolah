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
      <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
            
            <!--switch alert--->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
            <!--end switch alert--->

        <!-- Select2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

          
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

/*Text Bergerak sendiri*/
 .marquee-container {
  display: flex;
  align-items: center;
  overflow: hidden;
  background-color: #146496;
  height: 40px;
}

.label {
  flex-shrink: 0;
  background-color: #213363;
  color: white;
  padding: 0 12px;
  height: 100%;
  display: flex;
  align-items: center;
  font-weight: bold;
  white-space: nowrap;
}

.marquee {
  overflow: hidden;
  position: relative;
  flex: 1;
}

.marquee-content {
  display: inline-block;
  white-space: nowrap;
  padding-left: 100%;
  animation: scroll-left 15s linear infinite;
  color: white;
}

@keyframes scroll-left {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

@media (max-width: 600px) {
  .label {
    font-size: 14px;
    padding: 0 8px;
  }

  .marquee-content {
    font-size: 13px;
  }
}


/* Container umum */
.postingan-terkait {
    padding: 20px;
    background: #f9f9f9;
}

/* Judul */
.postingan-terkait h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

/* Grid utama */
.related-posts {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

/* Card */
.card-post {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.card-post:hover {
    transform: translateY(-5px);
}

/* Gambar */
.card-post img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

/* Konten teks */
.card-text {
    padding: 15px;
}

.card-text h4 {
    font-size: 1rem;
    margin: 0 0 10px 0;
    color: #2c3e50;
}

.card-text h4 a {
    text-decoration: none;
    color: inherit;
}

.card-text p {
    font-size: 0.9rem;
    color: #666;
}

/* Mobile friendly font size */
@media screen and (max-width: 600px) {
    .postingan-terkait h3 {
        font-size: 1.2rem;
    }

    .card-text h4 {
        font-size: 0.95rem;
    }

    .card-text p {
        font-size: 0.85rem;
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

                            <li class="nav-item dropdown active">
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
        <main>

            <div class="marquee-container">
                <span class="label">Terending 🔥:</span>
                <div class="marquee">
                    <div class="marquee-content">
                         {{ $marqueeText }}
                    </div>
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
                                    {{-- <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-end mb-4">
                                            <div>
                                                <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">JENJANG DAN JALUR PENDAFTARAN</h2>
                                                <p data-aos="fade-up">SLB Negeri 1 Tanjungpinang</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <ul class="artikelshow">

                                        @foreach($beritaterbaru as $data)
                                            <div class="articel" data-aos="fade-up">
                                                <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" alt="Avatar" style="width: 90%; border-radius: 10px 10px 0 0;">
                                                <div class="containerartikel">
                                                    <h5><b>{{ Str::limit($data->nama, 20) }}</b></h5>
                                                    <p>{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>    
                </div>
            </section>

            <div class="postingan-terkait">
            <h3>Postingan Artikel </h3>
            <div class="related-posts">
                    @foreach($infoberita as $item)
                    <div class="card-post">
                        <img src="{{ asset('uploads/foto-componen/' . $item->foto) }}" alt="{{ $item->nama }}">
                        <div class="card-text">
                            <h4>
                                <a href="{{ route('showcomponen', $item->id) }}">{{ Str::limit($item->nama, 50) }}</a>
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

        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,             // ✅ Menambahkan autoplay
    autoplaySpeed: 2000,        // ✅ Interval per gerakan (2 detik)
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
          slidesToShow: 2,      // Saran: kurangi jumlah slide di layar kecil
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
</script>


<!-- ✅ JQUERY (Wajib untuk Select2 dan DataTables, cukup 1x saja!) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    let itemsToShow = 5;

    document.getElementById('loadMoreBtn').addEventListener('click', function () {
        const items = document.querySelectorAll('.card-item');
        let hiddenCount = 0;

        items.forEach((item, index) => {
            if (index < itemsToShow + 5) {
                item.style.display = 'block';
            } else {
                hiddenCount++;
            }
        });

        itemsToShow += 5;

        // Jika semua sudah ditampilkan, sembunyikan tombol
        if (itemsToShow >= items.length) {
            this.style.display = 'none';
        }
    });
</script>



    </body>
</html>