<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard|SLBN1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/logosekolah.png')}}" rel="icon">
  <link href="{{asset('images/logosekolah.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!--switch alert--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
  <!--end switch alert--->
  
  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

    {{-- <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;'> --}}
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('images/logosekolah.png')}}" alt="">
        <span class="d-none d-lg-block">SLBN1</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('images/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>{{ Auth::user()->status }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/profil">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a href="/dasboard" class="nav-link collapsed">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Elearning</span>
            </a>
          </li>
          <li>
            <a href="/dataartikel">
              <i class="bi bi-circle"></i><span>Artikel</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Pengumuman</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Prestasi</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Keterampilan</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Galeri Kegiatan</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Cerita Alumni</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dataguru">
              <i class="bi bi-circle"></i><span>Data Guru</span>
            </a>
          </li>
          <li>
            <a href="/datasiswa" class="nav-link">
              <i class="bi bi-circle"></i><span>Data Murid</span>
            </a>
          </li>
          <li>
            <a href="/spmb">
              <i class="bi bi-circle"></i><span>Data Murid Baru (SPMB)</span>
            </a>
          </li>
          <li>
            <a href="/muridlulus">
              <i class="bi bi-circle"></i><span>Data Murid Kelulusan</span>
            </a>
          </li>
          <li>
            <a href="/alumni">
              <i class="bi bi-circle"></i><span>Data Murid Alumni</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Perkembangan SPMB</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>Perkembangan Kinerja Guru</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>Perkembangan Siswa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profil">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1> Edit Data Murid</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dasboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/datasiswa">Froms</a></li>
          <li class="breadcrumb-item active">Edit Data Murid</li>
        </ol>
      </nav>
    </div>

     <section class="section">
        <div class="row">
            <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Edit Data<span>| Murid</span></h5>
                            @if (session('error'))
                              <div class="alert alert-danger">
                                {{ session('error') }}
                              </div>
                            @endif
                            @if (session('success'))
                              <div class="alert alert-success">
                                  {{ session('success') }}
                              </div>
                            @endif

                        <form method="POST" action="{{ route('users.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tanggaldaftar"><span class="text-danger">*</span> Tanggal</label>
                                        <p>Tanggal ini bisa untuk tanggal pendaftaran, kelulusan kenaikan kelas atau kelulusan sekolah</p>
                                        <input
                                            type="date"
                                            id="tanggaldaftar"
                                            name="tanggaldaftar"
                                            class="form-control @error('tanggaldaftar') is-invalid @enderror"
                                            value="{{ old('tanggaldaftar', $data->tanggaldaftar ?? '') }}"
                                            spellcheck="false"
                                            required
                                        >
                                        @error('tanggaldaftar')
                                            <div class="invalid-feedback">
                                            Mohon pilih tanggal yang valid
                                            </div>
                                        @enderror
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama"><span class="text-danger">*</span>Nama</label>
                                        <input type="text" id="nama" name="nama" value="{{ $data->nama }}" class="form-control @error ('nama') is-invalid @enderror"  spellcheck="false" required>
                                        <div class="invalid-feedback">
                                        please choos a nama
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger">*</span>Jenis Kelamin</label><br>

                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="laki" value="Laki-laki"
                                        {{ old('jeniskelamin', $data->jeniskelamin ?? '') == 'Laki-laki' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="laki">Laki-laki</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan"
                                        {{ old('jeniskelamin', $data->jeniskelamin ?? '') == 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>

                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nisn"><span class="text-danger">* jika belum ada NISN Mohon mengisikan (0)</span>NISN</label>
                                        <input type="number" id="nisn" name="nisn" value="{{ $data->nisn }}" class="form-control @error ('nisn') is-invalid @enderror" spellcheck="false" required>
                                        <div class="invalid-feedback">
                                        please choos a nisn
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tahunajaran"><span class="text-danger">* contoh : 2024/2025</span> Tahun Ajaran</label>
                                    <input type="text" id="tahunajaran" name="tahunajaran" class="form-control" value="{{ old('tahunajaran', $data->tahunajaran ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="nik"><span class="text-danger">*</span>NIK/No. KITAS (Untuk WNA)</label>
                                    <input type="text" id="nik" name="nik" class="form-control" value="{{ old('nik', $data->nik ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="nokk"><span class="text-danger">*</span>No KK</label>
                                    <input type="number" id="nokk" name="nokk" class="form-control" value="{{ old('nokk', $data->nokk ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tempatlahir"><span class="text-danger">*</span>Tempat Lahir</label>
                                    <input type="text" id="tempatlahir" name="tempatlahir" value="{{ old('tempatlahir', $data->tempatlahir ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tanggallahir"><span class="text-danger">*</span>Tanggal Lahir</label>
                                    <input type="date" id="tanggallahir" name="tanggallahir" value="{{ old('tanggallahir', $data->tanggallahir ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="noregistrasiaktalahir"><span class="text-danger">*</span>No Registrasi Akta Lahir</label>
                                    <input type="text" id="noregistrasiaktalahir" name="noregistrasiakte" value="{{ old('noregistrasiakte', $data->noregistrasiakte ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="agama"><span class="text-danger">*</span>Agama & Kepercayaan </label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="agama"
                                            name="agama">
                                            <option value="">--Pilih--</option>
                                            <option value="islam" {{ old('agama', $data->agama ?? '') == 'islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="Kristen/Protestan" {{ old('agama', $data->agama ?? '') == 'Kristen/Protestan' ? 'selected' : '' }}>Kristen/Protestan</option>
                                            <option value="Katholik" {{ old('agama', $data->agama ?? '') == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                                            <option value="Hindu" {{ old('agama', $data->agama ?? '') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                            <option value="Budha" {{ old('agama', $data->agama ?? '') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                            <option value="Khonghucu" {{ old('agama', $data->agama ?? '') == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                                            <option value="Kepercayaan Kepada Tuhan YME" {{ old('agama', $data->agama ?? '') == 'Kepercayaan Kepada Tuhan YME' ? 'selected' : '' }}>Kepercayaan Kepada Tuhan YME</option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="kewarganegaraan"><span class="text-danger">*</span>Kewarganegaraan</label>
                                    <input type="text" id="kewarganegaraan" name="kewarganegaraan" class="form-control" value="{{ old('kewarganegaraan', $data->kewarganegaraan ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="berkebutuhankusus"><span class="text-danger">*</span>Berkebutuhan Kusus Anak</label>
                                        <fieldset class="form-group">
                                          
                                              <select class="js-example-basic-multiple form-control" name="kebutuhankusus[]" multiple="multiple">

                                                @foreach($mapping as $id => $label)
                                                    <option value="{{ $id }}" {{ in_array($id, $data->kebutuhan_array) ? 'selected' : '' }}>
                                                        {{ $label }}
                                                    </option>
                                                @endforeach

                                            </select>
                                      
                                          </fieldset>
                                    </div>
                                </div>

                              
                            
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tingkatkelas"><span class="text-danger">*</span>Tingkat sdlb/smplb/smalb</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="tingkatkelas"
                                            name="jenjangtingkat">
                                            <option value="">--Pilih--</option>
                                            <option value="TKLB" {{ old('jenjangtingkat', $data->jenjangtingkat ?? '') == 'TKLB' ? 'selected' : '' }}>TKLB</option>
                                            <option value="SDLB" {{ old('jenjangtingkat', $data->jenjangtingkat ?? '') == 'SDLB' ? 'selected' : '' }}>SDLB</option>
                                            <option value="SMPLB" {{ old('jenjangtingkat', $data->jenjangtingkat ?? '') == 'SMPLB' ? 'selected' : '' }}>SMPLB</option>
                                            <option value="SMALB" {{ old('jenjangtingkat', $data->jenjangtingkat ?? '') == 'SMALB' ? 'selected' : '' }}>SMALB</option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>                      

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="alamatjalan"><span class="text-danger">*</span>Alamat Jalan</label>
                                    <input type="text" id="alamatjalan" name="alamat" value="{{ old('alamat', $data->alamat ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="rt"><span class="text-danger">*Harap di buat</span>Rt/Rw</label>
                                    <input type="text" id="rt" name="rtanrw" value="{{ old('rtanrw', $data->rtanrw ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="namadusun"><span class="text-danger">*</span>Namadusun</label>
                                    <input type="text" id="namadusun" name="namadusun" value="{{ old('namadusun', $data->namadusun ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="namakelurahandesa"><span class="text-danger">*</span>Desa/Kelurahan</label>
                                    <input type="text" id="namakelurahandesa" name="kelurahan" value="{{ old('kelurahan', $data->kelurahan ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="kecamatan"><span class="text-danger">*</span>Kecamatan</label>
                                    <input type="text" id="kecamatan" name="kecamatan" class="form-control" value="{{ old('kecamatan', $data->kecamatan ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="kodepos"><span class="text-danger">*</span>Kode pos</label>
                                    <input type="text" id="kodepos" name="kodepos" class="form-control" value="{{ old('kodepos', $data->kodepos ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tempattinggal"><span class="text-danger">*</span>Tempat Tinggal</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="tempattinggal"
                                            name="tempattinggal">
                                            <option value="">--Pilih--</option>
                                            <option value="Bersama Orang tua" {{ old('tempattinggal', $data->tempattinggal) == 'Bersama Orang tua' ? 'selected' : '' }}>
                                                Bersama Orang tua
                                            </option>
                                            <option value="Wali" {{ old('tempattinggal', $data->tempattinggal) == 'Wali' ? 'selected' : '' }}>
                                                Wali
                                            </option>
                                            <option value="Kos" {{ old('tempattinggal', $data->tempattinggal) == 'Kos' ? 'selected' : '' }}>
                                                Kos
                                            </option>
                                            <option value="Asrama" {{ old('tempattinggal', $data->tempattinggal) == 'Asrama' ? 'selected' : '' }}>
                                                Asrama
                                            </option>
                                            <option value="Panti Asuhan" {{ old('tempattinggal', $data->tempattinggal) == 'Panti Asuhan' ? 'selected' : '' }}>
                                                Panti Asuhan
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="modatransportasi"><span class="text-danger">*</span>Transportasi</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="modatransportasi"
                                            name="transportasi">
                                            <option value="">--Pilih--</option>
                                            <option value="Jalan Kaki" {{ old('transportasi', $data->transportasi) == 'Jalan Kaki' ? 'selected' : '' }}>
                                                Jalan Kaki
                                            </option>
                                            <option value="Kendaraan pribadi" {{ old('transportasi', $data->transportasi) == 'Kendaraan pribadi' ? 'selected' : '' }}>
                                                Kendaraan pribadi
                                            </option>
                                            <option value="Kendaraan Umum/angkot/Pete-pete" {{ old('transportasi', $data->transportasi) == 'Kendaraan Umum/angkot/Pete-pete' ? 'selected' : '' }}>
                                                Kendaraan Umum/angkot/Pete-pete
                                            </option>
                                            <option value="Jemputan Sekolah" {{ old('transportasi', $data->transportasi) == 'Jemputan Sekolah' ? 'selected' : '' }}>
                                                Jemputan Sekolah
                                            </option>
                                            <option value="Kereta Api" {{ old('transportasi', $data->transportasi) == 'Kereta Api' ? 'selected' : '' }}>
                                                Kereta Api
                                            </option>
                                            <option value="Ojek" {{ old('transportasi', $data->transportasi) == 'Ojek' ? 'selected' : '' }}>
                                                Ojek
                                            </option>
                                            <option value="Andong/Bendi/Sado/ Dokar/Delman/Beca" {{ old('transportasi', $data->transportasi) == 'Andong/Bendi/Sado/ Dokar/Delman/Beca' ? 'selected' : '' }}>
                                                Andong/Bendi/Sado/ Dokar/Delman/Beca
                                            </option>
                                            <option value="Perahu penyebrangan/Rakit/Getek" {{ old('transportasi', $data->transportasi) == 'Perahu penyebrangan/Rakit/Getek' ? 'selected' : '' }}>
                                                Perahu penyebrangan/Rakit/Getek
                                            </option>
                                            <option value="Lainnya" {{ old('transportasi', $data->transportasi) == 'Lainnya' ? 'selected' : '' }}>
                                                Lainnya
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="anakke"><span class="text-danger">* Sesuaikan dengan urutan pada Kartu Keluarga</span> Anak Keberapa</label>
                                    <input type="text" id="anakke" name="anakke" class="form-control" value="{{ old('anakke', $data->anakke ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="menerimakip"><span class="text-danger">*</span>Penerima KPS/PKH</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="menerimakip"
                                            name="penerimakps">
                                            <option value="">--Pilih--</option>
                                            <option value="Iya" {{ old('penerimakps', $data->penerimakps) == 'Iya' ? 'selected' : '' }}>
                                                IYA
                                            </option>
                                            <option value="Tidak" {{ old('penerimakps', $data->penerimakps) == 'Tidak' ? 'selected' : '' }}>
                                                TIDAK
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="kip"><span class="text-danger">*</span>Apakah Punya KIP</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="kip"
                                            name="kip">
                                                <option value="">--Pilih--</option>
                                                <option value="Iya" {{ old('kip', $data->kip) == 'Iya' ? 'selected' : '' }}>
                                                    IYA
                                                </option>
                                                <option value="Tidak" {{ old('kip', $data->kip) == 'Tidak' ? 'selected' : '' }}>
                                                    TIDAK
                                                </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="kip"><span class="text-danger">*</span>Apakah Peserta didik tersebut layak mendapatkan PIP?</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="kip"
                                            name="mendapatpip">
                                                <option value="">--Pilih--</option>
                                            <option value="Iya" {{ old('mendapatpip', $data->mendapatpip) == 'Iya' ? 'selected' : '' }}>
                                                IYA
                                            </option>
                                            <option value="Tidak" {{ old('mendapatpip', $data->mendapatpip) == 'Tidak' ? 'selected' : '' }}>
                                                TIDAK
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="alasanmenolakpip"><span class="text-danger">*</span>Alasan Menerimma PIP</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="alasanmenolakpip"
                                            name="alasanpip">
                                            <option value="">--Pilih--</option>
                                            <option value="Tidak Mendapatkan PIP" {{ old('alasanpip', $data->alasanpip) == 'Tidak Mendapatkan PIP' ? 'selected' : '' }}>
                                                Tidak Mendapatkan PIP
                                            </option>
                                            <option value="Daerah Konflik" {{ old('alasanpip', $data->alasanpip) == 'Daerah Konflik' ? 'selected' : '' }}>
                                                Daerah Konflik
                                            </option>
                                            <option value="Dampak Bencana Alam" {{ old('alasanpip', $data->alasanpip) == 'Dampak Bencana Alam' ? 'selected' : '' }}>
                                                Dampak Bencana Alam
                                            </option>
                                            <option value="Kelainan Fisik" {{ old('alasanpip', $data->alasanpip) == 'Kelainan Fisik' ? 'selected' : '' }}>
                                                Kelainan Fisik
                                            </option>
                                            <option value="Keluarga Terpidana / Berada di Lapas" {{ old('alasanpip', $data->alasanpip) == 'Keluarga Terpidana / Berada di Lapas' ? 'selected' : '' }}>
                                                Keluarga Terpidana / Berada di Lapas
                                            </option>
                                            <option value="Pemegang PHK/KPS/KKS" {{ old('alasanpip', $data->alasanpip) == 'Pemegang PHK/KPS/KKS' ? 'selected' : '' }}>
                                                Pemegang PHK/KPS/KKS
                                            </option>
                                            <option value="Siswa Kurangmampu" {{ old('alasanpip', $data->alasanpip) == 'Siswa Kurangmampu' ? 'selected' : '' }}>
                                                Siswa Kurangmampu
                                            </option>
                                            <option value="Yatim Piyatu/Panti Asuhan/Panti sosial" {{ old('alasanpip', $data->alasanpip) == 'Yatim Piyatu/Panti Asuhan/Panti sosial' ? 'selected' : '' }}>
                                                Yatim Piyatu/Panti Asuhan/Panti sosial
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="status"><span class="text-danger">*</span>Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="status"
                                            name="status">
                                            <option value="">--Pilih--</option>
                                            <option value="Murid Baru" {{ old('status', $data->status) == 'Murid Baru' ? 'selected' : '' }}>
                                                Murid Baru
                                            </option>
                                            <option value="Murid Baru Pindahan" {{ old('status', $data->status) == 'Murid Baru Pindahan' ? 'selected' : '' }}>
                                                Murid Baru Pindahan
                                            </option>
                                            <option value="Murid Lulus" {{ old('status', $data->status) == 'Murid Lulus' ? 'selected' : '' }}>
                                                Murid Lulus
                                            </option>
                                            <option value="Murid Alumni" {{ old('status', $data->status) == 'Murid Alumni' ? 'selected' : '' }}>
                                                Murid Alumni
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="prosesstatus"><span class="text-danger">*</span>Statau Lulus</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="prosesstatus"
                                            name="prosesstatus">
                                            <option value="">--Pilih--</option>
                                            <option value="Proses Validasi" {{ old('prosesstatus', $data->prosesstatus) == 'Proses Validasi' ? 'selected' : '' }}>
                                                Proses Validasi
                                            </option>
                                            <option value="Data Tidak Lengkap" {{ old('prosesstatus', $data->prosesstatus) == 'Data Tidak Lengkap' ? 'selected' : '' }}>
                                                Data Tidak Lengkap
                                            </option>
                                            <option value="Murid Diterima" {{ old('prosesstatus', $data->prosesstatus) == 'Murid Diterima' ? 'selected' : '' }}>
                                                Murid Diterima
                                            </option>
                                            <option value="Murid Tidak diterima" {{ old('prosesstatus', $data->prosesstatus) == 'Murid Tidak diterima' ? 'selected' : '' }}>
                                                Murid Tidak diterima
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                @if($data->foto)
                                <img id="preview-image-before-upload" src="{{ asset('uploads/foto-murid/' . $data->foto) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-image-before-upload" style="max-height: 250px;">
                                @endif

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="user-button" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i> upload File Pasfoto</label>
                                    <input class="form-control" id="user-button" name="foto" type="file" hidden>
                                    <input type="hidden" name="foto_lama" value="{{ $data->foto }}">
                                </div>  
                                </div>

                                @if($data->fotokk)
                                <img id="preview-image-kk" src="{{ asset('uploads/fotokk-siswa/' . $data->fotokk) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-image-kk" style="max-height: 250px;">
                                @endif
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="user-kk" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i> upload File KK</label>
                                    <input class="form-control" id="user-kk" name="fotokk" type="file" hidden>
                                    <input type="hidden" name="fotokk_lama" value="{{ $data->fotokk }}">
                                </div>  
                                </div>

                                @if($data->fotoktp)
                                <img id="preview-image-Akte" src="{{ asset('uploads/foto-ktp/' . $data->fotoktp) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-image-Akte" style="max-height: 250px;">
                                @endif
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="foto_ktp" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i> upload File KTP Orangtua/Wali</label>
                                    <input class="form-control" id="foto_ktp" name="fotoktp" type="file" hidden>
                                    <input type="hidden" name="fotoktp_lama" value="{{ $data->fotoktp }}">
                                </div>  
                                </div>

                                @if($data->fotoakte)
                                <img id="preview-fotoakte" src="{{ asset('uploads/fotoakte-murid/' . $data->fotoakte) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-fotoakte" style="max-height: 250px;">
                                @endif
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="fotoakte" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i> Lampiran Akte Kelahiran</label>
                                    <input class="form-control" id="fotoakte" name="fotoakte" type="file" value="fill not aksess" hidden>
                                    <input type="hidden" name="fotoakte_lama" value="{{ $data->fotoakte }}">
                                </div>  
                                </div>

                                @if($data->fotokelulusan)
                                <img id="preview-fotokelulusan" src="{{ asset('uploads/foto-fotokelulusan/' . $data->fotokelulusan) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-fotokelulusan" style="max-height: 250px;">
                                @endif
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="fotokelulusan" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i>Bukti Kelulusan</label>
                                    <input class="form-control" id="fotokelulusan" name="fotokelulusan" type="file" hidden>
                                    <input type="hidden" name="fotokelulusan_lama" value="{{ $data->fotokelulusan }}">
                                </div>  
                                </div>

                                @if($data->fotosuratpindah)
                                <img id="preview-fotosuratpindah" src="{{ asset('uploads/foto-fotosuratpindah/' . $data->fotosuratpindah) }}" style="max-height: 250px;">
                                @else
                                <img id="preview-fotosuratpindah" style="max-height: 250px;">
                                @endif
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="fotosuratpindah" class="fw-bold" style="background-color: rgb(18, 107, 196); color: white;padding: 0.5rem;font-family: sans-serif;border-radius: 0.3rem;cursor: pointer;margin-top: 1rem;"><i class="bi bi-cloud-upload-fill"></i>Surat Pindah</label>
                                    <input class="form-control" id="fotosuratpindah" name="fotosuratpindah" type="file" hidden>
                                    <input type="hidden" name="fotosuratpindah_lama" value="{{ $data->fotosuratpindah }}">
                                </div>  
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                Data Diri Ayah
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="namaayah"><span class="text-danger">*</span>Nama Ayah</label>
                                        <input type="text" id="namaayah" name="namaayah" class="form-control" value="{{ old('namaayah', $data->namaayah ?? '') }}" spellcheck="false">
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nikayah"><span class="text-danger">*</span>NIK Ayah</label>
                                        <input type="number" id="nikayah" name="nikayah" class="form-control" value="{{ old('nikayah', $data->nikayah ?? '') }}" spellcheck="false">
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tahunlahirayah"><span class="text-danger">*</span>Tahun Lahir Ayah</label>
                                        <input type="date" id="tahunlahirayah" name="tahunlahirayah" value="{{ old('tahunlahirayah', $data->tahunlahirayah ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pendidikanayah"><span class="text-danger">*</span>Pendidikan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="pendidikanayah"
                                                name="pendidikanayah">
                                                <option value="">--Pilih--</option>
                                                @php
                                                    $selected = old('pendidikanayah', $data->pendidikanayah ?? '');
                                                @endphp
                                                <option value="Tidak Sekolah" {{ $selected == 'Tidak Sekolah' ? 'selected' : '' }}>
                                                    Tidak Sekolah
                                                </option>
                                                <option value="Putus SD" {{ $selected == 'Putus SD' ? 'selected' : '' }}>
                                                    Putus SD
                                                </option>
                                                <option value="SD Sederajat" {{ $selected == 'SD Sederajat' ? 'selected' : '' }}>
                                                    SD Sederajat
                                                </option>
                                                <option value="SMP Sederajat" {{ $selected == 'SMP Sederajat' ? 'selected' : '' }}>
                                                    SMP Sederajat
                                                </option>
                                                <option value="SMA Sederajat" {{ $selected == 'SMA Sederajat' ? 'selected' : '' }}>
                                                    SMA Sederajat 
                                                </option>
                                                <option value="D1" {{ $selected == 'D1' ? 'selected' : '' }}>
                                                    D1
                                                </option>
                                                <option value="D2" {{ $selected == 'D2' ? 'selected' : '' }}>
                                                    D2
                                                </option>
                                                <option value="D3" {{ $selected == 'D3' ? 'selected' : '' }}>
                                                    D3
                                                </option>
                                                <option value="D4/S1" {{ $selected == 'D4/S1' ? 'selected' : '' }}>
                                                    D4/S1
                                                </option>
                                                <option value="S2" {{ $selected == 'S2' ? 'selected' : '' }}>
                                                    S2
                                                </option>
                                                <option value="S3" {{ $selected == 'S3' ? 'selected' : '' }}>
                                                    S3
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaanayah"><span class="text-danger">*</span>Pekerjaan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="pekerjaanayah"
                                                name="pekerjaanayah">
                                                <option value="">--Pilih--</option>
                                                @php
                                                    $selectedPekerjaan = old('pekerjaanayah', $data->pekerjaanayah ?? '');
                                                @endphp

                                                <option value="Tidak Bekerja" {{ $selectedPekerjaan == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                    Tidak Bekerja
                                                </option>
                                                <option value="Nelayan" {{ $selectedPekerjaan == 'Nelayan' ? 'selected' : '' }}>
                                                    Nelayan
                                                </option>
                                                <option value="Petani" {{ $selectedPekerjaan == 'Petani' ? 'selected' : '' }}>
                                                    Petani
                                                </option>
                                                <option value="Peternak" {{ $selectedPekerjaan == 'Peternak' ? 'selected' : '' }}>
                                                    Peternak
                                                </option>
                                                <option value="PNS/TNI/POLRI" {{ $selectedPekerjaan == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                                    PNS/TNI/POLRI
                                                </option>
                                                <option value="Karyawan Swasta" {{ $selectedPekerjaan == 'Karyawan Swasta' ? 'selected' : '' }}>
                                                    Karyawan Swasta
                                                </option>
                                                <option value="Pedagang Kecil" {{ $selectedPekerjaan == 'Pedagang Kecil' ? 'selected' : '' }}>
                                                    Pedagang Kecil
                                                </option>
                                                <option value="Pedagang Besar" {{ $selectedPekerjaan == 'Pedagang Besar' ? 'selected' : '' }}>
                                                    Pedagang Besar
                                                </option>
                                                <option value="Wirausaha" {{ $selectedPekerjaan == 'Wirausaha' ? 'selected' : '' }}>
                                                    Wirausaha
                                                </option>
                                                <option value="Buruh" {{ $selectedPekerjaan == 'Buruh' ? 'selected' : '' }}>
                                                    Buruh
                                                </option>
                                                <option value="Pensiunan" {{ $selectedPekerjaan == 'Pensiunan' ? 'selected' : '' }}>
                                                    Pensiunan
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="penghasilanbulananayah"><span class="text-danger">*</span>Penghasilan Bulanan</label>
                                        <input type="number" id="penghasilanayah" name="penghasilanbulananayah" value="{{ old('penghasilanbulananayah', $data->penghasilanayah ?? '') }}" class="form-control" spellcheck="false" required>
                                    </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="berkebutuhankusus"><span class="text-danger">*</span>Berkebutuhan Kusus Ayah</label>
                                        <fieldset class="form-group">
                                            <select class="js-example-basic-multiple form-control" name="kebutuhankususayah[]" multiple="multiple">
                                                @php
                                                $selectedKebutuhanayah = old('kebutuhankususayah', $data->kebutuhankususayah ?? '');
                                                @endphp
                                                <option value="Tidak" {{ $selectedKebutuhanayah == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                <option value="Netra(A)" {{ $selectedKebutuhanayah == 'Netra(A)' ? 'selected' : '' }}>Netra (A)</option>
                                                <option value="Rungu(B)" {{ $selectedKebutuhanayah == 'Rungu(B)' ? 'selected' : '' }}>Rungu (B)</option>
                                                <option value="Grahita ringan(C)" {{ $selectedKebutuhanayah == 'Grahita ringan(C)' ? 'selected' : '' }}>Grahita ringan (C)</option>
                                                <option value="Grahita Sedang(C1)" {{ $selectedKebutuhanayah == 'Grahita Sedang(C1)' ? 'selected' : '' }}>Grahita Sedang (C1)</option>
                                                <option value="Daksa Ringan(D)" {{ $selectedKebutuhanayah == 'Daksa Ringan(D)' ? 'selected' : '' }}>Daksa Ringan (D)</option>
                                                <option value="Daksa Sedang(D1)" {{ $selectedKebutuhanayah == 'Daksa Sedang(D1)' ? 'selected' : '' }}>Daksa Sedang (D1)</option>
                                                <option value="Laras" {{ $selectedKebutuhanayah == 'Laras' ? 'selected' : '' }}>Laras</option>
                                                <option value="Wicara(F)" {{ $selectedKebutuhanayah == 'Wicara(F)' ? 'selected' : '' }}>Wicara (F)</option>
                                                <option value="Tuna ganda(G)" {{ $selectedKebutuhanayah == 'Tuna ganda(G)' ? 'selected' : '' }}>Tuna ganda (G)</option>
                                                <option value="Hiper aktif(H)" {{ $selectedKebutuhanayah == 'Hiper aktif(H)' ? 'selected' : '' }}>Hiper aktif (H)</option>
                                                <option value="Cerdas Istimewa(i)" {{ $selectedKebutuhanayah == 'Cerdas Istimewa(i)' ? 'selected' : '' }}>Cerdas Istimewa (i)</option>
                                                <option value="Bakat Istimewa(J)" {{ $selectedKebutuhanayah == 'Bakat Istimewa(J)' ? 'selected' : '' }}>Bakat Istimewa (J)</option>
                                                <option value="Kesulitan Belajra(K)" {{ $selectedKebutuhanayah == 'Kesulitan Belajra(K)' ? 'selected' : '' }}>Kesulitan Belajra (K)</option>
                                                <option value="Indigo(O)" {{ $selectedKebutuhanayah == 'Indigo(O)' ? 'selected' : '' }}>Indigo (O)</option>
                                                <option value="Down Sindrome(P)" {{ $selectedKebutuhanayah == 'Down Sindrome(P)' ? 'selected' : '' }}>Down Sindrome (P)</option>
                                                <option value="Autis(Q)" {{ $selectedKebutuhanayah == 'Autis(Q)' ? 'selected' : '' }}>Autis (Q)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                    Data Diri Ibu
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="namaibu"><span class="text-danger">*</span>Nama Ibu</label>
                                    <input type="text" id="namaibu" name="namaibu" class="form-control" value="{{ old('namaibu', $data->namaibu ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="nikibu"><span class="text-danger">*</span>NIK Ibu</label>
                                    <input type="number" id="nikibu" name="nikibu" class="form-control" value="{{ old('nikibu', $data->nikibu ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tahunlahiribu"><span class="text-danger">*</span>Tahun Lahir Ibu</label>
                                    <input type="date" id="tahunlahiribu" name="tahunlahiribu" class="form-control" value="{{ old('tahunlahiribu', $data->tahunlahiribu ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="pendidikanibu"><span class="text-danger">*</span>Pendidikan</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="pendidikanibu"
                                            name="pendidikanibu">
                                            <option value="">--Pilih--</option>
                                            @php
                                                $selected = old('pendidikanibu', $data->pendidikanibu ?? '');
                                            @endphp
                                            <option value="Tidak Sekolah" {{ $selected == 'Tidak Sekolah' ? 'selected' : '' }}>
                                                Tidak Sekolah
                                            </option>
                                            <option value="Putus SD" {{ $selected == 'Putus SD' ? 'selected' : '' }}>
                                                Putus SD
                                            </option>
                                            <option value="SD Sederajat" {{ $selected == 'SD Sederajat' ? 'selected' : '' }}>
                                                SD Sederajat
                                            </option>
                                            <option value="SMP Sederajat" {{ $selected == 'SMP Sederajat' ? 'selected' : '' }}>
                                                SMP Sederajat
                                            </option>
                                            <option value="SMA Sederajat" {{ $selected == 'SMA Sederajat' ? 'selected' : '' }}>
                                                SMA Sederajat 
                                            </option>
                                            <option value="D1" {{ $selected == 'D1' ? 'selected' : '' }}>
                                                D1
                                            </option>
                                            <option value="D2" {{ $selected == 'D2' ? 'selected' : '' }}>
                                                D2
                                            </option>
                                            <option value="D3" {{ $selected == 'D3' ? 'selected' : '' }}>
                                                D3
                                            </option>
                                            <option value="D4/S1" {{ $selected == 'D4/S1' ? 'selected' : '' }}>
                                                D4/S1
                                            </option>
                                            <option value="S2" {{ $selected == 'S2' ? 'selected' : '' }}>
                                                S2
                                            </option>
                                            <option value="S3" {{ $selected == 'S3' ? 'selected' : '' }}>
                                                S3
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="pekerjaanibu"><span class="text-danger">*</span>Pekerjaan</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="pekerjaanibu"
                                            name="pekerjaanibu">
                                            <option value="">--Pilih--</option>
                                            @php
                                                $selectedPekerjaan = old('pekerjaanibu', $data->pekerjaanibu ?? '');
                                            @endphp

                                            <option value="Tidak Bekerja" {{ $selectedPekerjaan == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                Tidak Bekerja
                                            </option>
                                            <option value="Nelayan" {{ $selectedPekerjaan == 'Nelayan' ? 'selected' : '' }}>
                                                Nelayan
                                            </option>
                                            <option value="Petani" {{ $selectedPekerjaan == 'Petani' ? 'selected' : '' }}>
                                                Petani
                                            </option>
                                            <option value="Peternak" {{ $selectedPekerjaan == 'Peternak' ? 'selected' : '' }}>
                                                Peternak
                                            </option>
                                            <option value="PNS/TNI/POLRI" {{ $selectedPekerjaan == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                                PNS/TNI/POLRI
                                            </option>
                                            <option value="Karyawan Swasta" {{ $selectedPekerjaan == 'Karyawan Swasta' ? 'selected' : '' }}>
                                                Karyawan Swasta
                                            </option>
                                            <option value="Pedagang Kecil" {{ $selectedPekerjaan == 'Pedagang Kecil' ? 'selected' : '' }}>
                                                Pedagang Kecil
                                            </option>
                                            <option value="Pedagang Besar" {{ $selectedPekerjaan == 'Pedagang Besar' ? 'selected' : '' }}>
                                                Pedagang Besar
                                            </option>
                                            <option value="Wirausaha" {{ $selectedPekerjaan == 'Wirausaha' ? 'selected' : '' }}>
                                                Wirausaha
                                            </option>
                                            <option value="Buruh" {{ $selectedPekerjaan == 'Buruh' ? 'selected' : '' }}>
                                                Buruh
                                            </option>
                                            <option value="Pensiunan" {{ $selectedPekerjaan == 'Pensiunan' ? 'selected' : '' }}>
                                                Pensiunan
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="penghasilanbulananibu"><span class="text-danger">*</span>Penghasilan Bulanan</label>
                                    <input type="number" id="penghasilanbulananibu" name="penghasilanibu" class="form-control" value="{{ old('penghasilanibu', $data->penghasilanibu ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="berkebutuhankusus"><span class="text-danger">*</span>Berkebutuhan Kusus Ibu</label>
                                        <fieldset class="form-group">
                                            <select class="js-example-basic-multiple form-control" name="kebutuhankususibu[]" multiple="multiple">
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
                                        </fieldset>
                                    </div>
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                    Data Diri Wali
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <label for="punya_wali" class="form-label">Apakah memiliki wali?</label>
                                    <select id="punya_wali" class="form-select" onchange="toggleFormWali(this.value)">
                                        <option value="">-- Pilih --</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>

                                <!-- Form Data Wali (tersembunyi awalnya) -->
                                <div id="form-wali" style="display: none;">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="namawali">Nama Wali</label>
                                        <input type="text" id="namawali" name="namawali" value="{{ old('namawali', $data->namawali ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nikwali">NIK Wali</label>
                                        <input type="number" id="nikwali" name="nikwali" value="{{ old('nikwali', $data->nikwali ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tahunlahirwali">Tahun Lahir Wali</label>
                                        <input type="date" id="tahunlahirwali" name="tahunlahirwali" value="{{ old('tahunlahirwali', $data->tahunlahirwali ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pendidikanwali">Pendidikan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="pendidikanwali"
                                                name="pendidikanwali">
                                                <option value="">--Pilih--</option>
                                                @php
                                                    $selected = old('pendidikanwali', $data->pendidikanwali ?? '');
                                                @endphp
                                                <option value="Tidak Sekolah" {{ $selected == 'Tidak Sekolah' ? 'selected' : '' }}>
                                                    Tidak Sekolah
                                                </option>
                                                <option value="Putus SD" {{ $selected == 'Putus SD' ? 'selected' : '' }}>
                                                    Putus SD
                                                </option>
                                                <option value="SD Sederajat" {{ $selected == 'SD Sederajat' ? 'selected' : '' }}>
                                                    SD Sederajat
                                                </option>
                                                <option value="SMP Sederajat" {{ $selected == 'SMP Sederajat' ? 'selected' : '' }}>
                                                    SMP Sederajat
                                                </option>
                                                <option value="SMA Sederajat" {{ $selected == 'SMA Sederajat' ? 'selected' : '' }}>
                                                    SMA Sederajat 
                                                </option>
                                                <option value="D1" {{ $selected == 'D1' ? 'selected' : '' }}>
                                                    D1
                                                </option>
                                                <option value="D2" {{ $selected == 'D2' ? 'selected' : '' }}>
                                                    D2
                                                </option>
                                                <option value="D3" {{ $selected == 'D3' ? 'selected' : '' }}>
                                                    D3
                                                </option>
                                                <option value="D4/S1" {{ $selected == 'D4/S1' ? 'selected' : '' }}>
                                                    D4/S1
                                                </option>
                                                <option value="S2" {{ $selected == 'S2' ? 'selected' : '' }}>
                                                    S2
                                                </option>
                                                <option value="S3" {{ $selected == 'S3' ? 'selected' : '' }}>
                                                    S3
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaanwali">Pekerjaan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="pekerjaanwali"
                                                name="pekerjaanwali">
                                                <option value="">--Pilih--</option>
                                                @php
                                                    $selectedPekerjaan = old('pekerjaanwali', $data->pekerjaanwali ?? '');
                                                @endphp

                                                <option value="Tidak Bekerja" {{ $selectedPekerjaan == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                    Tidak Bekerja
                                                </option>
                                                <option value="Nelayan" {{ $selectedPekerjaan == 'Nelayan' ? 'selected' : '' }}>
                                                    Nelayan
                                                </option>
                                                <option value="Petani" {{ $selectedPekerjaan == 'Petani' ? 'selected' : '' }}>
                                                    Petani
                                                </option>
                                                <option value="Peternak" {{ $selectedPekerjaan == 'Peternak' ? 'selected' : '' }}>
                                                    Peternak
                                                </option>
                                                <option value="PNS/TNI/POLRI" {{ $selectedPekerjaan == 'PNS/TNI/POLRI' ? 'selected' : '' }}>
                                                    PNS/TNI/POLRI
                                                </option>
                                                <option value="Karyawan Swasta" {{ $selectedPekerjaan == 'Karyawan Swasta' ? 'selected' : '' }}>
                                                    Karyawan Swasta
                                                </option>
                                                <option value="Pedagang Kecil" {{ $selectedPekerjaan == 'Pedagang Kecil' ? 'selected' : '' }}>
                                                    Pedagang Kecil
                                                </option>
                                                <option value="Pedagang Besar" {{ $selectedPekerjaan == 'Pedagang Besar' ? 'selected' : '' }}>
                                                    Pedagang Besar
                                                </option>
                                                <option value="Wirausaha" {{ $selectedPekerjaan == 'Wirausaha' ? 'selected' : '' }}>
                                                    Wirausaha
                                                </option>
                                                <option value="Buruh" {{ $selectedPekerjaan == 'Buruh' ? 'selected' : '' }}>
                                                    Buruh
                                                </option>
                                                <option value="Pensiunan" {{ $selectedPekerjaan == 'Pensiunan' ? 'selected' : '' }}>
                                                    Pensiunan
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="penghasilanbulananwali">Penghasilan Wali</label>
                                        <input type="text" id="penghasilanbulananwali" name="penghasilanwali" value="{{ old('penghasilanwali', $data->penghasilanwali ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="berkebutuhankusus"><span class="text-danger">*</span>Berkebutuhan Kusus Wali</label>
                                            <fieldset class="form-group" >
                                                <select class="js-example-basic-multiple form-control" name="kebutuhankususwali[]" multiple="multiple" style="width:100%">
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
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                    Kontak
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="nohp"><span class="text-danger">*</span>Nomor Hp</label>
                                    <input type="number" id="nohp" name="nohp" class="form-control" value="{{ old('nohp', $data->nohp ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="email"><span class="text-danger">*</span>Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email', $data->email ?? '') }}" class="form-control" spellcheck="false">
                                </div>  
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                    Data Priodik
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="tinggibadan"><span class="text-danger">*</span>Tinggi Badan <span class="text-danger">*</span>cm</label>
                                    <input type="number" id="tinggibadan" name="tinggibadan" class="form-control" value="{{ old('tinggibadan', $data->tinggibadan ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="beratbadan"><span class="text-danger">*</span>Berat Badan<span class="text-danger">*</span>Kg</label>
                                    <input type="number" id="beratbadan" name="beratbadan" class="form-control" value="{{ old('beratbadan', $data->beratbadan ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="lingkarkepala"><span class="text-danger">*</span>Lingkar Kepala<span class="text-danger">*</span>cm</label>
                                    <input type="number" id="lingkarkepala" name="lingkarkepala" class="form-control" value="{{ old('lingkarkepala', $data->lingkarkepala ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="jaraktempattinggalkesekolah"><span class="text-danger">*</span>Jarak tempat tinggal ke sekolah</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="jaraktempattinggalkesekolah"
                                            name="jaraktempuh">
                                            <option value="">--Pilih--</option>
                                            <option value="Kurang dari 1 km" {{ old('jaraktempuh', $data->jaraktempuh) == 'Kurang dari 1 km' ? 'selected' : '' }}>
                                                Kurang dari 1 km
                                            </option>
                                            <option value="Lebih dari 1 km" {{ old('jaraktempuh', $data->jaraktempuh) == 'Lebih dari 1 km' ? 'selected' : '' }}>
                                                Lebih dari 1 km
                                            </option>
                                        </select>
                                    </fieldset>
                                </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="waktutempuhkesekolah"><span class="text-danger">*</span>Waktu Tempuh ke sekolah (Jam/mnt)</label>
                                    <input type="number" id="waktutempuhkesekolah" name="waktutempuh" value="{{ old('waktutempuh', $data->waktutempuh ?? '') }}" class="form-control" spellcheck="false" required>
                                </div>  
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="jumlahsaudarakandung"><span class="text-danger">*</span>Jumlah Saudara Kandung</label>
                                    <input type="number" id="jumlahsaudarakandung" name="jumlahsaudara" class="form-control" value="{{ old('jumlahsaudara', $data->jumlahsaudara ?? '') }}" spellcheck="false" required>
                                </div>  
                                </div>

                                <br>
                                <div class="alert alert-primary" role="alert">
                                Prestasi
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <label for="prestasi" class="form-label">Apakah memiliki Prestasi</label>
                                    <select id="prestasi" class="form-select" onchange="toggleFormprestasi(this.value)">
                                        <option value="">-- Pilih --</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>

                                <!-- Form Data Wali (tersembunyi awalnya) -->
                                <div id="form-prestasi" style="display: none;">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="namalomba">Nama</label>
                                        <input type="text" id="namalomba" name="namalomba" value="{{ old('namalomba', $data->namalomba ?? '') }}" class="form-control" spellcheck="false" >
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="jenis">Jenis Perlombaan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="jenis"
                                                name="jenislomba">
                                                <option value="">--Pilih--</option>
                                                <option value="Sains" {{ old('jenislomba', $data->jenislomba) == 'Sains' ? 'selected' : '' }}>
                                                    Sains
                                                </option>
                                                <option value="Seni" {{ old('jenislomba', $data->jenislomba) == 'Seni' ? 'selected' : '' }}>
                                                    Seni
                                                </option>
                                                <option value="Olahraga" {{ old('jenislomba', $data->jenislomba) == 'Olahraga' ? 'selected' : '' }}>
                                                    Olahraga
                                                </option>
                                                <option value="Lain-Lain" {{ old('jenislomba', $data->jenislomba) == 'Lain-Lain' ? 'selected' : '' }}>
                                                    Lain-Lain
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tingkat">Tingkat Perlombaan</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="tingkat"
                                                name="tingkatlomba">
                                                <option value="">--Pilih--</option>
                                                <option value="sekolah" {{ old('tingkatlomba', $data->tingkatlomba) == 'sekolah' ? 'selected' : '' }}>
                                                    sekolah
                                                </option>
                                                <option value="Kecamatan" {{ old('tingkatlomba', $data->tingkatlomba) == 'Kecamatan' ? 'selected' : '' }}>
                                                    Kecamatan
                                                </option>
                                                <option value="Kabupaten" {{ old('tingkatlomba', $data->tingkatlomba) == 'Kabupaten' ? 'selected' : '' }}>
                                                    Kabupaten
                                                </option>
                                                <option value="Provinsi" {{ old('tingkatlomba', $data->tingkatlomba) == 'Provinsi' ? 'selected' : '' }}>
                                                    Provinsi
                                                </option>
                                                <option value="Nasional" {{ old('tingkatlomba', $data->tingkatlomba) == 'Nasional' ? 'selected' : '' }}>
                                                    Nasional
                                                </option>
                                                <option value="Internasional" {{ old('tingkatlomba', $data->tingkatlomba) == 'Internasional' ? 'selected' : '' }}>
                                                    Internasional
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="date" id="tahun" name="tahun" value="{{ old('tahun', $data->tahun ?? '') }}" class="form-control" spellcheck="false">
                                    </div>  
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="penyelengara">Penyelenggara</label>
                                        <input type="text" id="penyelengara" name="penyelengara" value="{{ old('penyelenggara', $data->penyelenggara ?? '') }}" class="form-control  " spellcheck="false">
                                    </div>  
                                    </div>
                                </div>
                        <br>
                        <!-- Tambahkan input lainnya sesuai kebutuhan -->
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>

                    </div>
                </div>
            </div>
            </div>
          </div>
    </section>

  </main><!-- End #main -->
   


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; developer <strong></strong> slbnegeri1tanjungpinang
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
  <!-- jQuery (wajib untuk Select2) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Select2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
  </script>


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

</body>

</html>