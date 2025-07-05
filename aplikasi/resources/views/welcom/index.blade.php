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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


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

.stat-container {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.stat-box {
  background-color: #1c2a76;
  color: white;
  padding: 30px;
  border-radius: 15px;
  width: 220px;
  text-align: center;
  
  transition: transform 0.3s;
  box-shadow: 0 5px 10px rgba(59, 59, 59, 0.702);
}

.stat-box i {
  font-size: 40px;
  margin-bottom: 15px;
}

.stat-box h3 {
  font-size: 16px;
  margin: 0;
  color: #ffffff;
}

.stat-box:hover {
  transform: translateY(-5px);
}

/* batasa image gambar seluruh guru  */
.about-image {
  transition: transform 0.3s ease;
}

.about-image:hover {
  transform: scale(1.1);
}


 * {
      box-sizing: border-box;
    }

    .struktur {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .box {
      background-color: #fff;
      border: 2px solid #ffa94d;
      border-radius: 12px;
      padding: 15px 10px;
      margin: 10px;
      width: 180px;
      max-width: 90vw;
      box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .box:hover {
      transform: scale(1.03);
    }

    .box img {
      width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }

    .line {
      width: 2px;
      height: 30px;
      background-color: #ffa94d;
    }

    .level {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    @media (max-width: 600px) {
      .level {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .box {
        width: 90%;
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

            <section class="hero" id="hero">
                <div class="heroText">
                    <h5 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                        SLB Negeri 1 Tanjungpinang
                    </h5>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        Selamat Datang di<strong class="custom-underline"> website Kami</strong>
                    </p>
                </div>  

                <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="videos/videoplayback.mp4">
                        <source src="videos/videoplayback.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="overlay"></div>
            </section>

            <section>
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

                            <li class="nav-item active">
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
                                <a class="nav-link" href="#struktur">Struktur Sekolah</a>
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
            </section> 

            <section> 
                <ul class="slider" style="background-image: linear-gradient(to bottom, #213363, #ffffff);">
                    @foreach($databener as $data)
                        <li>
                            <img src="{{ asset('uploads/foto-Bener/' . $data->foto) }}" style="width:90%; border-radius: 5px;">
                        </li>
                    @endforeach
                </ul>    
             </section>
            
            <section>
                <h5 class="mb-3" data-aos="fade-up" style="text-align: center">Selamat Datang di SLB NEGERI 1 TANJUNGPINANG</h5>
                <ul class="pilihan" data-aos="zoom-in">
                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh3fy3qJupWy_JglyWttyI5-RuY8pNrAxzti46LcfAe0hQi95jcdHNCg5IYqU9zoZtYKpELZNsPGn7ILvHPlPqiFgQX_1KsedIoS2lXNhAL3VD5dn_T8fQbxlSJbl5glxCcvYhLtjENpoJXooMdH6Kjgi-rzbxf-Hb4HAGoq29Y5pRoYcMm7ckwKFsCb2Q=w480-rw" style="width:90%;">
                            <a href="/elearning">E-Learning</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi94mJOAwnLAg1zMwlyepDX1DMg7Ef5bYShH5ARTr8OMJ_gBnxT6nvbZT6TF1uXD1IM6V0r7AJ_ff7_jdhA34B_7f1Kk-2GRLVCr5OGxv2DodjRtkeGgRlVKgP8EhC10s3Qg1p0liqlFLQoItFtIPzLlRQVbeaSMgw6GgMqiT1MhTJY7ectSuVTW7i0zis=w480-rw" style="width:90%">
                            <a href="/sambutan">Sambutan</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgPFTWriMhZGabwR4vMTrxeu8cp7sYIv66i1wFOia7n9e2kmd5FbokIJKi36HIMIu69ijlsWanIJF0TaJLgiSRyzt09n_LSQvuW3NxN0NqxpbGJklpDYwna9XU3SwTd228tqvoBKj23tASC8DlcejGhociZrXdbzReZgIIXqUTQBMgxNGU7K005JgBxJMc=w480-rw" style="width:90%">
                            <a href="/visimisi">Visi dan Misi</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjxZCOJykaihpumc9DOXfFhs_2vWM3904kMthO_RHSXOwBEWoW_BEkyrLkaXGQXN63FtaERN0OWnoBDhcNxn6PIfENMpAnCKMjH0gJ-EzMUaaL2icBYl_BIRlcOHZ1Fv_ih4p0MJx1Q4IdX6pzzEwr7Yd0Hrw-59SGWna7wv30oY5jtzhs6DFuR2JI0hzc=w480-rw" style="width:90%">
                            <a href="/pengumuman">Pengumuman</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjvlK3E6LfnLCM6oBbK7sf7l96_kP3cumcsqxHerCvtoiqY6pzK3wITmK81hedNwHuLUTjYed2EJgCx-qdp6Y28kzHehXbSGCT32SgU-QxvcrO2AfSJUp0s1Z6tyUbPwesGrjrP2zIXvZKmUHPUFDLAl58o6vPP6AxOOiFM5iSs3rwiLIjGDh6UOhIUcsg=w480-rw" style="width:90%">
                            <a href="/gurudanstaf">Guru</a>
                        </div>
                    </div>

                   <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjnkwSCQL_A_U-UJQfKJ6hJ-3Ll3sOtLdAWVVwcuhySNzZcyvy-yu-rrXTrFggvrzAqynxStRMuR7Ib3Sr7-AifI4BdG1A3YJ3rSegRU6e49H4P8Fat5YVizhlixZCqJyzXnVOeUMyhFXO_N_UtPqnb8tYsoaOYZHShMiVlRozMXqI2Z-xpk4zVCscgcEc=w480-rw" style="width:90%">
                            <a href="/agendasekolah">Agenda</a>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhRIJvFxevjAyUoD-quMSO84VcBXbQDTmMCQHM6iGv0lZ2fiS_qkAqB9C99OGfMzuaK8mqd7_JgcOtESUJtKBmbwfjGK4RyF7Q4Myugjlgic1TIzMso1QaumMhNza32eqyyfRBBGltZhN_pdMaxd56gRRWUo1v4oPc62pTjkVvJGae7pFwnanrL8QboWKs=w480-rw" style="width:90%">
                            <a href="/keterampilan">Keterampilan</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEheu87FMJnN6Zp6GJ5pc3LyJn_l1zogFIcz185TFuteE48RKg__WWeEKF84b1_dLn-RBkdKnXZchg67MCPBUkvJNYwI6G1WDWs0B6oUqAlcrlnTF-0iIZ0gg0ntNSP_dyqppzaO_4A_vw1bQiysB0Lt1JUyVZHIsFZPVcMZzAtO3SflxHpbv3szqzt2DLo=w480-rw" style="width:90%">
                            <a href="/prestasi">Perestasi</a>
                        </div>
                    </div>
                </ul>   
            </section>

            <section id="visi">
                <div class="container mb-5 pb-lg-5">
                    <div class="row">
                        <div class="container py-5">
                            <div class="row align-items-center">
                                <div class="col-md-4" data-aos="zoom-in">
                                    <img src="images/KepalaSekolah.png" alt="Avatar" style="width:50%; height:auto; max-width:200px; display:block; margin:auto;">
                                    <h5>Kepala Sekolah</h5>
                                    <h5>T.Sy.Nadhrah, S.Pd</h5>
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <h5>Assalamu'alaikum warahmatullahi wabarakatuh</h5>
                                    <p>This is where you can write about yourself, your experiences, your skills, and your interests. You can also include a brief summary of your career or professional goals.</p>
                                    <p>Example: I'm a web developer with [Number] years of experience, passionate about [Area of Expertise].</p>
                                    <h5>Wassalamu'alaikum warahmatullahi wabarakatuh</h5>
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <h4>SEJARAH SLB NEGERI 1 TANJUNGPINANG</h4>
                                    <p>SLB Negeri 1 Tanjungpinang adalah salah satu lembaga pendidikan khusus yang terletak di Jalan Kijang Lama Km. 7, Kelurahan Melayu Kota Piring, Kecamatan Tanjungpinang Timur, Kota Tanjung Pinang, Kepulauan Riau. Berdiri sejak tahun 1983, sekolah ini telah menjadi pionir dalam memberikan layanan pendidikan bagi anak-anak berkebutuhan khusus di wilayah Kepulauan Riau.</p>
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <h4>Visi</h4>
                                    <p>Mewujudkan pelayanan Pendidikan bagi anak berkebutuhan khusus yang berilmu pengetahuan, berakhlak mulia, mandiri, kreatif dan inovatif</p>
                                    <h4>Misi</h4>
                                    <p>Misi SLB Negeri 1 Tanjungpinang adalah sebagai berikut:</p>
                                    <p>(1)	Mengembangkan potensi guru seoptimal mungkin dalam melaksanakan proses pembelajaran,</p>
                                    <p>(2)	Memotivasi dan menumbuhkan rasa prcaya diri setiap siswa,</p>
                                    <p>(3)	Meningkatkan kreatifitas,</p>
                                    <p>(4)	Meningkatkan ketrampilan yang dapat mnjadi sumber penghasilan bagi anak didik (kwirausahaan),</p>
                                    <p>(5)	Membentuk sekolah yang asri, religius, dan berbudaya,</p>
                                    <p>(6)	Meningkatkan disiplin dan etos krja warga sekolah,</p>
                                    <p>(7)	Menciptakan suasana kekeluargaan dalam segala situasi di sekolah</p>
                                </div>
                                <div class="col-md-8" data-aos="fade-up">
                                    <h4>Tingkatan Satuan Pendidikan</h4>
                                    <p>SLBN 1 Tanjungpinang memiliki komitmen yang kuat dalam menyediakan pendidikan inklusif dan berkualitas untuk berbagai jenjang pendidikan, mulai dari Pendidikan Usia Dini/Taman Kanak-Kanak Luar Biasa (TKLB), Sekolah Dasar Luar Biasa (SDLB), Sekolah Menengah Pertama Luar Biasa (SMPLB), hingga Sekolah Menengah Atas Luar Biasa (SMALB). Setiap jenjang pendidikan dirancang secara khusus untuk memenuhi kebutuhan individual setiap siswa, dengan pendekatan yang personal dan profesional.</p>
                                    <h4>Ketunaan yang dibina</h4>
                                    <p>adalah sebagai berikut:</p>
                                    <p>(1)	Tunanetra (hambatan penglihatan) – A</p>
                                    <p>(2)	Tunarungu (hambatan pendengaran) – B </p>
                                    <p>(3)	Tunagrahita (hambatan intelektual) – C </p>
                                    <p>(4)	Tunadaksa (hambatan fisik) – D</p>
                                    <p>(5)	Autisme (hambatan sosial) – Q</p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </section>

            <section data-aos="fade-up">
                    <div class="stat-container">
                        <div class="stat-box">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h3>Tenaga Pendidik <b> {{$jumlahguru}} </b></h3>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-graduation-cap"></i>
                            <h3>Siswa Telah Lulus <b> {{$jumlahMuridlulus}} </b></h3>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-user-graduate"></i>
                            <h3>Siswa Baru <b> {{$jumlahMuridBaru}}</b></h3>
                        </div>
                        <div class="stat-box">
                            <i class="fas fa-briefcase"></i>
                            <h3>Keterampilan <b> 30 </b></h3>
                        </div>
                    </div>
            </section>
            
            <section id="artikel">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">Artikel</h2>
                            <p data-aos="fade-up">Artikel SLB Negeri 1 Tanjungpinang</p>
                        </div>
                        <a aria-label="Lihat semua Artikel" class="d-flex align-items-center gap-1" href="/artikel" title="Lihat semua Artikel">
                            <span class="d-none d-md-inline" data-aos="fade-up">Tampilkan selengkapnya  ></span>
                        </a>
                    </div>
                </div>

                <ul class="artikelshow">

                     @foreach($dataartikel as $data)
                        <div class="col" data-aos="fade-up">
                            <a href="{{ route('showcomponen', $data->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($data->nama, 40) }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </ul>
            </section>

            <section class="section-padding pb-0">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">Pengumuman</h2>
                            <p data-aos="fade-up">Pengumuman dan Berita Informasi</p>
                        </div>
                        <a aria-label="Lihat semua Artikel" class="d-flex align-items-center gap-1" href="/pengumuman" title="Lihat semua Artikel">
                            <span class="d-none d-md-inline" data-aos="fade-up">Tampilkan selengkapnya  ></span>
                        </a>
                    </div>
                </div>

                <ul class="artikelshow">

                    @foreach($datapengumuman as $data)
                        <div class="col" data-aos="fade-up">
                            <a href="{{ route('showcomponen', $data->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($data->nama, 40) }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </ul>
            </section>

            <section class="section-padding pb-0" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0" style="overflow: hidden;">      
                            <img src="images/keluargaslb1.jpg" class="img-fluid about-image" alt="">
                        </div>

                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3" data-aos="fade-up">Nama Guru di SLB Negeri 1 Tanjungpinang</h3>

                                <p class="text-secondary-white-color" data-aos="fade-up">Yuk Kenali Guru-guru yang ada di slb negeri 1 tanjungpinang</p>

                                {{-- <div class="mt-3 custom-links">
                                    
                                    <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Kontak Kami</a>

                                    <a href="#contact" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">Work with Us</a>
                                </div> --}}

                            </div>
                        </div>

                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @php
                                        $colors = ['bg-warning', 'bg-primary', 'bg-success', 'bg-info', 'bg-danger'];
                                    @endphp

                                    @foreach($dataguru as $data)
                                        @php $color = $colors[$loop->index % count($colors)]; @endphp
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-aos="fade-up">
                                            <img src="{{ asset('uploads/foto-guru/'.$data->foto) }}" class="img-fluid about-image" alt="" style="width:100%;border-radius: 20px 20px 0 0; tex">

                                            <div class="team-thumb {{ $color }}">
                                                <h3 class="text-white mb-0">{{ $data->nama }}</h3>
                                                <p class="text-secondary-white-color mb-0">{{ $data->jabatan }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </section>
                        </div>
                    </div>
                </div>       
            </section>
            
            <section class="section-padding pb-0">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">Prestasi</h2>
                            <p data-aos="fade-up">Perestasi Pendidikan dan Pesrta Didik</p>
                        </div>
                        <a aria-label="Lihat semua Artikel" class="d-flex align-items-center gap-1" href="/prestasi" title="Lihat semua Artikel">
                            <span class="d-none d-md-inline" data-aos="fade-up">Tampilkan selengkapnya  ></span>
                        </a>
                    </div>
                </div>

                <ul class="artikelshow">

                    @foreach($dataprestasi as $data)
                        <div class="col" data-aos="fade-up">
                            <a href="{{ route('showcomponen', $data->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($data->nama, 40) }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </ul>
                </div>
            </section>

            <section>
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">Keterampilan</h2>
                            <p data-aos="fade-up">Keterampilan Siswa</p>
                        </div>
                        <a aria-label="Lihat semua Artikel" class="d-flex align-items-center gap-1" href="/keterampilan" title="Lihat semua Artikel">
                            <span class="d-none d-md-inline" data-aos="fade-up">Tampilkan selengkapnya  ></span>
                        </a>
                    </div>
                </div>

                <ul class="artikelshow">

                    @foreach($dataketerampilan as $data)
                        <div class="col" data-aos="fade-up">
                            <a href="{{ route('showcomponen', $data->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($data->nama, 40) }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </ul>
            </section>

            <section class="section-padding" id="struktur">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Struktur Sekolah</h2>
                        </div>

                        <div class="struktur">
                            <div class="box" data-aos="fade-up">
                                <img src="images/KepalaSekolah.png" alt="Kepala Sekolah">
                                <div>Kepala Sekolah</div>
                                <p>T.sy.Nadhrah, S.Pd</p>
                            </div>
                            
                            <div class="line"></div>

                            <div class="box" data-aos="fade-up">
                                <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="Komite Sekolah">
                                <div>Komite Sekolah</div>
                                <p>Roji'un</p>
                            </div>
                            
                            <div class="line"></div>

                            <div class="level">
                                <div class="box" data-aos="fade-up">
                                    <h5>Tata Usaha</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Ketua Tu">
                                    <div>Kep. Yulizar</div>
                                    <p>Kepala Tata Usaha </p>
                                     <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Itra Ningsih</div>
                                     <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Dika Putri Ayunda W , S.E</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Rusmalena, S.Sos</div>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Suherman</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Dapodik, Proktor dan Teknisi ANBK</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Kep. Muhammad Nur Azriyanto, S.Kom</div>
                                    <p>Operator dapodik</p>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid, S.Sn.</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Kepala Jurusan</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="Ketua">
                                    <div>Kep.Achmad Moroadi, M.Pd (Tunanetra)</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Febri Yeni M, S.Pd (Autis)</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Eva Ramayanti Syam, S.Pd (Tunagrahita)</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Fitri Yanti, S.Pd (Tunadaksa)</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Esti Hertanti, S.Pd (Tunarungu)</div>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Rowi Khoirun, S.PdI (Bidang Studi)</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Pengelola Keuangan</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="ketua">
                                    <div>Kep. Tri Febrianty, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Nur Hidayanti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Fera Wirda Yani, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Febri Yeni M, S.Pd</div>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid, S.Sn</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="anggota">
                                    <div>Dika Putri Ayunda Wardani, S.E</div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="level">
                                <div class="box" data-aos="fade-up">
                                    <h5>Waka Kuri Kulum</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Kep. Muryani,S.Pd</div>
                                     <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Febri Yeni M, S.Pd</div>
                                     <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Gusua Reza, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Riskha Putri Setiany, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Nur Hidayanti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Ria Raisya, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Gemeliyati, S.Pd,I</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Fitri Yanti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Dika Putri Ayunda Wardani, S.E</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Itra Ningsih</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Waka Sarpras</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Kep.Fera Wirda Yani, S.Pd</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid, S.Sn</div><p>(Pengurus Barang)</p>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Achmad Moroadi, M.Pd</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Nurijon Suwendi, s.Pd</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Rowi Khoirun, S.Pd</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Lukman Usman, S.Pd</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Rusmalena, S.Sos</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Suherman</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Adi Saputra</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Prilla Reysita Sari</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Waka Kesiswaan</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Kep.Sri Suwarti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Ade Satriana, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Mardotilla Putri Iskandar, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Rosa Febrianti, S.Pd.Sd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Eva Ramayanti Syam, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Darleli, S.Sn</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Rini Nasir, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Esti Hertanti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Fitriawati, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Yulizar</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Waka Humas</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Kep. Juliana Debataraja, S.Pd</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Zulfahmi, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Lia Permata Sari S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Haryati, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Zelda Gusmeli, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Evelyne Garnis Triyana, S.Pd</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Muhammad Nur Azriyanto, S.Kom</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Wakil Kepala">
                                    <div>Rika Nila Sari</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Muhammad Aifilatu Khairi</div>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="level">
                                <div class="box" data-aos="fade-up">
                                    <h5>Pengurus Barang</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid S.Sn</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru A">
                                    <div>Rusmalena, S.Sos</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM SAPRAS</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Kesenian</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru B">
                                    <div>Darleli, S.Sn</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid.S.Sn</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Achmad Moroadi, M.Pd</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru B">
                                    <div>Esti Hertanti, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru B">
                                    <div>Tri Febrianty,S.Pd.</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Keterampilan Vokasi</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Febri Yeni M, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Ria Raisya,S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Rika Nila Sari</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Muhammad Aifilatu Khairi</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Prilla Reysita Sari</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM KURIKULUM</div>
                                </div>
                                    <div class="box" data-aos="fade-up">
                                    <h5>Pramuka</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Rowi Khoirun, S.PdI</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Gusua Reza, S.Pd</div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Nur Hidayanti,S.Pd</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Sabri Arrasyid.S.Sn</div>

                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Lukman Usman,S.Pd </div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Leni Pardian,S.Pd </div>
                                    
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Darleli,S.Sn</div>
                                    
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Muhammad Nur Azriyanto, S.Kom</div>

                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Rika Nila Sari</div>
                                </div>
                                
                                <div class="box" data-aos="fade-up">
                                    <h5>IT dan Teknisi</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Muhammad Nur Azriyanto, S.Kom</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Sabri Arrasyid, S.Sn</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Rowi Khoirun, S.PdI</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM HUMAS</div>
                                </div>
                                
                                <div class="box" data-aos="fade-up">
                                    <h5>UKS dan Olahraga</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Leni Pardian, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Eva Ramayanti Syam, S.Pd </div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Rosa Febrianti, S.Pd.SD </div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM KESISWAAN</div>
                                </div>
                                
                                <div class="box" data-aos="fade-up">
                                    <h5>7K, Literasi & Perpustakaan</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Gusua Reza, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Dika Putri Ayunda W,S.E.</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Rika Nila Sari</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM KURIKULUM</div>
                                </div>
                                
                                <div class="box" data-aos="fade-up">
                                    <h5>Rohani</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Gemelliyati,S.Pd,I</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Zelda Gusmeli,S.Pd.</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Tri Febrianty,S.Pd.</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">TIM KESISWAAN</div>
                                </div>
                            
                                <div class="box" data-aos="fade-up">
                                    <h5>BK & TPPPK</h5>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Sri Suwarti, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Fera Wirda Yani, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div>Muryani, S.Pd</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru C">
                                    <div> Juliana Debataraja, S.Pd</div>
                                    <div style="background-color: rgb(245, 130, 130); color: white; padding: 10px;">WALI KELAS</div>
                                </div>
                            </div>
                            
                            <div class="line"></div>

                            <div class="level">
                                <div class="box" data-aos="fade-up">
                                    <h5>Tendik / Membantu Tugas TU dan Guru</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Muhammad Aifilatu Khairi</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru A">
                                    <div>Rika Nila Sari</div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Guru A">
                                    <div>Prilla Reysita Sari</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Penjaga Sekolah</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Suherman</div>
                                </div>
                                <div class="box" data-aos="fade-up">
                                    <h5>Satpam</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Adi Saputra</div>
                                </div>
                                    <div class="box" data-aos="fade-up">
                                    <h5>Petugas Kebersihan</h5>
                                    <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="anggota">
                                    <div>Walgito</div>    
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <section style="background-image: linear-gradient(to bottom, #ffffff, #ffffff);">
                 <div class="col-12">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <h2 class="h3 mb-1 fw-bold" data-aos="fade-up">Galeri Kegiatan</h2>
                            <p data-aos="fade-up">Galeri Kegiatan Sekolah</p>
                        </div>
                        <a aria-label="Lihat semua Artikel" class="d-flex align-items-center gap-1" href="#" title="Lihat semua Artikel">
                            <span class="d-none d-md-inline" data-aos="fade-up">Tampilkan selengkapnya  ></span>
                        </a>
                    </div>
                </div>

                <ul class="artikelshow">

                    @foreach($datagaleri as $data)
                        <div class="col" data-aos="fade-up">
                            <a href="{{ route('showcomponen', $data->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Str::limit($data->nama, 40) }}</h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($data->konten), 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                </ul>
            </section>



            <section class="news section-padding" id="news">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
                        </div>

                        @php
                            $utama = $datanews->take(1); // berita pertama (utama)
                            $lainnya = $datanews->skip(1); // berita sisanya
                        @endphp

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            @foreach($utama as $data)
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="{{ url('foto-componen/'.$data->id) }}" class="news-image-hover news-image-hover-warning">
                                    <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="img-fluid large-news-image news-image" alt="{{ $data->nama }}">
                                </a>

                                <div class="news-category bg-warning text-white">{{ $data->status }}</div>

                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="{{ route('showcomponen', $data->id) }}" class="news-title-link">{{ $data->nama }}</a>
                                    </h5>
                                    <span class="text-muted">{{ $data->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-6 col-12">
                            @foreach($lainnya as $data)
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row mb-4" data-aos="fade-up">
                                <div class="news-top w-100" data-aos="fade-up">
                                    <a href="{{ route('showcomponen', $data->id) }}" class="news-image-hover news-image-hover-success">
                                        <img src="{{ asset('uploads/foto-componen/'.$data->foto) }}" class="img-fluid news-image" alt="{{ $data->nama }}">
                                    </a>

                                    <div class="news-category bg-success text-white">{{ $data->status }}</div>
                                </div>

                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="{{ route('showcomponen', $data->id) }}" class="news-title-link">{{ $data->nama }}</a>
                                        </h5>
                                        <span class="text-muted">{{ $data->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>

            <section>
                <div class="container mx-auto p-6">
                    <h2 data-aos="fade-up" class="text-3xl font-bold mb-6 text-center">Cerita Alumni</h2>
                    <p data-aos="fade-up" style="text-align: center">Cerita Dari Alumni SLB Negeri 1 Tanjungpinang</p>

                    <!-- Swiper Container -->
                    <div class="swiper mySwiper" >
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>

                            <!-- Slide lainnya -->
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>
                            <div class="swiper-slide bg-white rounded-2xl shadow-md p-4" data-aos="fade-up">
                                <img src="{{asset('images/logosekolah.png')}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1rem;">
                                <h3 class="text-xl font-semibold text-center">AKAN SEGERA HADIR MENU CERITA ALUMNI</h3>
                            </div>
                            <!-- Copy blok di atas dan ganti datanya -->
                        </div>

                        <!-- Navigasi -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <br>
            <section class="google-map">
                <h3 style="text-align: center">Lokasi Sekolah</h3>
                <p style="text-align: center">Terletak di lokasi strategis, sekolah kami memberikan akses mudah kepada</p>
                <p style="text-align: center"> siswa-siswa kami untuk mendapatkan pendidikan berkualitas.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.304702694578!2d104.4820758749651!3d0.9193601990717528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d96d9b51b348c7%3A0xfb2bed13c449c434!2sSLB%20Negeri%201%20Tanjungpinang!5e0!3m2!1sid!2sid!4v1747078344506!5m2!1sid!2sid" class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

        </main>

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
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
            $('.pilihan').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 9,
                slidesToScroll: 9,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 9,
                        slidesToScroll: 9,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 500,
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
        
        <script type="text/javascript">
            $('.artikelshow').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 500,
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

            //     $('.artikelshow').slick({
            // centerMode: true,
            // centerPadding: '60px',
            // slidesToShow: 3,
            // responsive: [
            //     {
            //     breakpoint: 768,
            //     settings: {
            //         arrows: false,
            //         centerMode: true,
            //         centerPadding: '40px',
            //         slidesToShow: 3
            //     }
            //     },
            //     {
            //     breakpoint: 480,
            //     settings: {
            //         arrows: false,
            //         centerMode: true,
            //         centerPadding: '40px',
            //         slidesToShow: 1
            //     }
            //     }
            // ]
            // });
        </script>

        <script type="text/javascript">
            $('.comentar').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
            });
        </script>
    
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
                }
            });
        </script>


    </body>
</html>