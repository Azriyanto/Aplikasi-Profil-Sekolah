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
              <i class="bi bi-circle"></i><span>Data Guru</span>
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
        <a class="nav-link collapsed" href="/databener">
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
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-8">
          <div class="row">
 
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

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

                <div class="card-body">
                  <h5 class="card-title">SPMB <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    
                    <div class="ps-3">
                      <h6>{{$jumlahMuridBaru}}</h6>
                      <span class="text-danger small pt-1 fw-bold">({{ number_format($persenMuridBaru) }}%)</span>
                      <span class="text-muted small pt-2 ps-1">SPMB</span>
                    </div>

                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

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

                <div class="card-body">
                  <h5 class="card-title">Guru</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                      <i class="bi bi-people"></i>
                    </div>

                    <div class="ps-3">
                      <h6>{{$jumlahguru}}</h6>
                      <span class="text-success small pt-1 fw-bold">({{ number_format($persenguru) }}%)</span>
                      <span class="text-muted small pt-2 ps-1">Guru</span>
                    </div>

                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

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

                <div class="card-body">
                  <h5 class="card-title">Alumni</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$jumlahMuridalumni}}</h6>
                      <span class="text-danger small pt-1 fw-bold">({{ number_format($persenMuridalumni) }}%)</span> <span class="text-muted small pt-2 ps-1">Alumni</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title">Reports <span>Data</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  {{-- <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'SPMB',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Guru',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Alumni',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script> --}}
                  <script>
                      document.addEventListener("DOMContentLoaded", () => {
                          const options = {
                              series: [{
                                  name: 'SPMB',
                                  data: @json($spmbData),
                              }, {
                                  name: 'Guru',
                                  data: @json($guruData)
                              }, {
                                  name: 'Alumni',
                                  data: @json($alumniData)
                              }],
                              chart: {
                                  height: 350,
                                  type: 'area',
                                  toolbar: {
                                      show: false
                                  },
                              },
                              markers: {
                                  size: 4
                              },
                              colors: ['#4154f1', '#2eca6a', '#ff771d'],
                              fill: {
                                  type: "gradient",
                                  gradient: {
                                      shadeIntensity: 1,
                                      opacityFrom: 0.3,
                                      opacityTo: 0.4,
                                      stops: [0, 90, 100]
                                  }
                              },
                              dataLabels: {
                                  enabled: false
                              },
                              stroke: {
                                  curve: 'smooth',
                                  width: 2
                              },
                              xaxis: {
                                  type: 'category',
                                  categories: @json($years),
                              },
                              tooltip: {
                                  x: {
                                      format: 'yyyy-MM-dd'
                                  },
                              }
                          };

                          new ApexCharts(document.querySelector("#reportsChart"), options).render();
                      });
                  </script>
                  <!-- End Line Chart-->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

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

                <div class="card-body">
                  <h5 class="card-title">Data<span>|Guru</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($datasemuaguru as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                  <img src="{{ asset('uploads/foto-guru/'.$data->foto) }}" alt="pas foto" style="max-height: 100px;">
                                </td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jabatan}}</td>
                                <td>{{$data->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="?filter=today">Today</a></li>
                    <li><a class="dropdown-item" href="?filter=month">This Month</a></li>
                    <li><a class="dropdown-item" href="?filter=year">This Year</a></li>

                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Artikel <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">FOTO</th>
                        <th scope="col">NAMA</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($topArtikel as $item)
                        <tr>
                            <th scope="row">
                                <a href="{{ route('showcomponen', $item->id) }}">
                                    <img src="{{ asset('uploads/foto-componen/' . $item->foto) }}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                </a>
                            </th>
                            <td>
                                <a href="{{ route('showcomponen', $item->id) }}" class="text-primary fw-bold">
                                    {{ Str::limit($item->nama, 30) }}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

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
   
