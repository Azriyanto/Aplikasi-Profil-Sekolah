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

   <style>

    h2 {
      text-align: center;
      color: #333;
    }

    .struktur-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .box {
      background: #fff;
      border: 2px solid #ffa500;
      border-radius: 10px;
      padding: 15px;
      margin: 10px;
      text-align: center;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .box img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .line {
      width: 100%;
      height: 2px;
      background: #ccc;
      margin: 20px 0;
    }

    .level {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    @media (max-width: 600px) {
      .level {
        flex-direction: column;
        align-items: center;
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

                            <li class="nav-item active">
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
        <main>

            <section class="section-padding" id="struktur">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Struktur Sekolah</h2>
                        </div>

                        <div class="struktur">
                             
                             <div class="level">
                                <div class="box" data-aos="fade-up">
                                    <img src="images/KepalaSekolah.png" alt="Kepala Sekolah">
                                    <div>Kepala Sekolah</div>
                                    <p>T.sy.Nadhrah, S.Pd</p>
                                </div>
                                <div class="box" data-aos="fade-up">
                                <img src="https://images.icon-icons.com/624/PNG/512/Businessman-80_icon-icons.com_57362.png" alt="Komite Sekolah">
                                <div>Komite Sekolah</div>
                                <p>Roji'un</p>
                                </div>
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

            {{-- <div class="tree">
            <div class="node">
                Kepala Sekolah
                <div class="children">
                <div class="node">
                    Wakil Kepala Sekolah
                    <div class="children">
                    <div class="node">Kurikulum</div>
                    <div class="node">Kesiswaan</div>
                    <div class="node">Sarpras</div>
                    </div>
                </div>
                <div class="node">
                    Wakil Kepala Sekolah
                    <div class="children">
                    <div class="node">Kurikulum</div>
                    <div class="node">Kesiswaan</div>
                    <div class="node">Sarpras</div>
                    </div>
                </div>
                <div class="node">
                    Wakil Kepala Sekolah
                    <div class="children">
                    <div class="node">Kurikulum</div>
                    <div class="node">Kesiswaan</div>
                    <div class="node">Sarpras</div>
                    </div>
                </div>
                <div class="node">
                    Tata Usaha
                    <div class="children">
                    <div class="node">Administrasi</div>
                    <div class="node">Keuangan</div>
                    </div>
                </div>
                <div class="node">
                    Komite Sekolah
                    <div class="children">
                    <div class="node">Ketua Komite</div>
                    <div class="node">Sekretaris</div>
                    <div class="node">Bendahara</div>
                    </div>
                </div>
                </div>
            </div>
            </div> --}}



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