  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a href="/dasboard" class="nav-link ">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dasboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Pilih</h6>
                    </li>

                    @if($daftar)
                      <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true" style="pointer-events: none; opacity: 0.6;">
                        Anda Sudah Mendaftar (Pendaftaran hanya berlaku 1 Kali)
                      </a>
                    @else
                      <a class="dropdown-item" href="/create">Daftar</a>
                    @endif

                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data<span>| Informasi Pendaftaran</span></h5>

                     <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">FOTO</th>
                          <th scope="col">NAMA</th>
                          <th scope="col">JENJANG</th>
                          <th scope="col">STATUS</th>
                          <th scope="col">STATUS PROSES DATA</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($muridnama as $data)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>
                                    <img src="{{ asset('uploads/foto-murid/'.$data->foto) }}" alt="pas foto" style="max-height: 100px;">
                                  </td>
                                  <td>{{$data->nama}}</td>
                                  <td>{{$data->jenjangtingkat}}</td>
                                  <td>{{$data->status}}</td>
                                  @php
                                      $btnClass = '';
                                      switch($data->prosesstatus) {
                                          case 'Proses Validasi':
                                              $btnClass = 'btn btn-warning';  // kuning/oren
                                              break;
                                          case 'Data Tidak Lengkap':
                                              $btnClass = 'btn btn-danger';   // merah
                                              break;
                                          case 'Diterima':
                                              $btnClass = 'btn btn-success';  // hijau
                                              break;
                                          case 'Tidak Diterima':
                                              $btnClass = 'btn btn-danger';   // merah
                                              break;
                                          default:
                                              $btnClass = 'btn btn-secondary'; // abu-abu default
                                      }
                                  @endphp

                                  <td>
                                      <button class="{{ $btnClass }}" disabled style="cursor: default;">
                                          {{ $data->prosesstatus }}
                                      </button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

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
                              <a href="{{ route('showcomponen', $news->id) }}">{{ \Illuminate\Support\Str::limit($news->nama, 50) }}</a>
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