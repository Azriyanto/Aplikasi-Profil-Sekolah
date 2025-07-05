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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
            <a href="/datapengumuman">
              <i class="bi bi-circle"></i><span>Pengumuman</span>
            </a>
          </li>
          <li>
            <a href="/dataprestasi">
              <i class="bi bi-circle"></i><span>Prestasi</span>
            </a>
          </li>
          <li>
            <a href="/dataketerampilan">
              <i class="bi bi-circle"></i><span>Keterampilan</span>
            </a>
          </li>
          <li>
            <a href="/galerikegiatan">
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
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dataguru">
              <i class="bi bi-circle"></i><span>Data guru</span>
            </a>
          </li>
            
          <li>
            <a href="/datasiswa">
              <i class="bi bi-circle"></i><span>Data Murid</span>
            </a>
          </li>
          <li>
            <a href="/spmbmurid">
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
        <a class="nav-link" href="/databener">
          <i class="bi bi-menu-button-wide"></i>
          <span>Bener</span>
        </a>
      </li><!-- End Profile Page Nav -->

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
      <h1>Edit Data Bener</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dasboard">Dasboard</a></li>
          <li class="breadcrumb-item active">Edit Data Bener</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-8">
          <div class="row">

            <section class="section">
            <div class="row">
                <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                    <h6>pilihan</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="/creatbener">Tambah Data</a></li>
                                    <li><a class="dropdown-item" href="/artikeledit">Edit Data</a></li>
                                    <li><a class="dropdown-item" href="/componentsdatahapus">Hapus Data</a></li>
                                </ul>
                            </div>
                        <h5 class="card-title">Daftar<span>| Components</span></h5>
                            @if (session('success'))
                              <script>
                                Swal.fire({
                                  icon: 'success',
                                  title: 'Sukses!',
                                  text: '{{ session("success") }}',
                                  timer: 2000,
                                  showConfirmButton: false
                                });
                              </script>
                            @endif
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>FOTO</th>
                                  <th>NAMA</th>
                                  <th>STATUS</th>
                                  <th>AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($databener as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                      <img src="{{ asset('uploads/foto-Bener/'.$data->foto) }}" alt="pas foto" style="max-height: 50px;">
                                    </td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $data->id }}">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel{{ $data->id }}">Edit Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('databener.update',$data->id)}}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="mb-3">
                                                                <label for="nama" class="form-label"><span class="text-danger">*</span>Nama</label>
                                                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="foto" class="form-label"><span class="text-danger">* upload fill tidak boleh lebih dari 2mb</span> Foto</label><br>
                                                                <input type="file" class="form-control" name="foto">
                                                                @if ($data->foto)
                                                                    <small class="d-block mt-2">Foto lama:</small>
                                                                    <img src="{{ asset('uploads/foto-Bener/'.$data->foto) }}" alt="Foto lama" style="max-height: 100px;" class="mt-1">
                                                                @endif
                                                                <!-- Simpan nama foto lama -->
                                                                <input type="hidden" name="foto_lama" value="{{ $data->foto }}">
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                              <div class="form-group">
                                                                  <label for="status"><span class="text-danger">*</span>Status</label>
                                                                  <fieldset class="form-group">
                                                                      <select class="form-select" id="status"
                                                                          name="status">
                                                                          <option value="">--Pilih--</option>
                                                                          <option value="menu SPMB" {{ old('status', $data->status) == 'menu SPMB' ? 'selected' : '' }}>menu SPMB</option>
                                                                          <option value="menu hom" {{ old('status', $data->status) == 'menu hom' ? 'selected' : '' }}>menu hom</option>
                                                                      </select>
                                                                  </fieldset>
                                                              </div>
                                                            </div>
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-sm btn-danger delete-confirm" data-id="{{ $data->id }}" data-nama="{{ $data->nama }}">
                                          Hapus
                                        </button>

                                        <form id="delete-form-{{ $data->id }}" action="{{ route('databener.destroy', $data->id) }}" method="POST" style="display: none;">
                                          @csrf
                                          @method('DELETE')
                                        </form>
                                        
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                              const deleteButtons = document.querySelectorAll('.delete-confirm');

                                              deleteButtons.forEach(button => {
                                                button.addEventListener('click', function () {
                                                  const muridId = this.getAttribute('data-id');
                                                  const muridNama = this.getAttribute('data-nama');

                                                  Swal.fire({
                                                    title: 'Yakin ingin menghapus?',
                                                    text: "Data murid '" + muridNama + "' akan dihapus secara permanen.",
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#d33',
                                                    cancelButtonColor: '#3085d6',
                                                    confirmButtonText: 'Ya, hapus!',
                                                    cancelButtonText: 'Batal'
                                                  }).then((result) => {
                                                    if (result.isConfirmed) {
                                                      document.getElementById('delete-form-' + muridId).submit();
                                                    }
                                                  });
                                                });
                                              });
                                            });
                                        </script>

                                        @if (session('success'))
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Sukses!',
                                                    text: '{{ session('success') }}',
                                                    confirmButtonColor: '#3085d6',
                                                    confirmButtonText: 'OK'
                                                });
                                            });
                                        </script>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

         <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                  @foreach($newsupdates as $news)
                      <div class="post-item clearfix">
                          <img src="{{ asset('uploads/foto-componen/' . $news->foto) }}" alt="" style="width: 60px; height: 60px; object-fit: cover;">
                          <h4>
                              <a href="#">{{ \Illuminate\Support\Str::limit($news->nama, 50) }}</a>
                          </h4>
                          <p>{{ \Illuminate\Support\Str::limit(strip_tags($news->konten), 80) }}</p>
                      </div>
                  @endforeach
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
   


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; developer <strong><span>cv.digitaceh global</span></strong>. to slbnegeri1tanjungpinang
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

  <!--switch alert--->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--end switch alert--->

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- Panggil TinyMCE -->
    <script src="tinymce/tinymce.min.js"></script>

    <script>
        tinymce.init({
        selector: '#kontent',
        height: 500,
        plugins: [
            'image', 'code', 'link', 'lists', 'autolink', 'preview'
        ],
        toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image | code',
        automatic_uploads: true,
        images_upload_url: 'upload.php', // <- arahkan ke skrip upload
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            if (meta.filetype === 'image') {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function () {
                const file = this.files[0];
                const reader = new FileReader();
                reader.onload = function () {
                const id = 'blobid' + (new Date()).getTime();
                const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                const base64 = reader.result.split(',')[1];
                const blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };
            input.click();
            }
        }
        });
    </script>



</body>

</html>