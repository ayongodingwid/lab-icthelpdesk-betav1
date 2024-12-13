@extends('Dashboard.master')

@section('title', 'ICT Helpdesk - Selamat Datang')

@section('content')

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari</a></li>
                  <li><a class="dropdown-item" href="#">Bulan</a></li>
                  <li><a class="dropdown-item" href="#">Tahun</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tiket <span>| Hari</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-ticket"></i>
                  </div>
                  <div class="ps-3">
                    <h6>12</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- WO Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari</a></li>
                  <li><a class="dropdown-item" href="#">Bulan</a></li>
                  <li><a class="dropdown-item" href="#">Tahun</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Perintah Kerja <span>| Hari</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-workspace"></i>
                  </div>
                  <div class="ps-3">
                    <h6>10</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Berhasil Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari</a></li>
                  <li><a class="dropdown-item" href="#">Bulan</a></li>
                  <li><a class="dropdown-item" href="#">Tahun</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tugas Selesai <span>| Hari</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>90%</h6>
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->
          
          <!-- Tiket Masuk Terkini -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown">Lihat Semua</a>
              </div>

              <div class="card-body">
                <h5 class="card-title">Tiket Masuk Terkini</h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">No. Tiket</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Nama Peminta</th>
                      <th scope="col">Divis</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#">#2654</a></th>
                      <td>Promo</td>
                      <td><strong>Fernando Harsono</strong></td>
                      <td>Ops BAA</td>
                      <td><span class="badge bg-info">Diterima</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2457</a></th>
                      <td>Internet/Wifi</td>
                      <td><strong>Dede Iskandar</strong></td>
                      <td>F A T</td>
                      <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2147</a></th>
                      <td>Komputer Mati</td>
                      <td><strong>Dody Alamsyah</strong></td>
                      <td>F A T</td>
                      <td><span class="badge bg-warning">Pengerjaan</span></td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Printer</td>
                      <td><strong>Futra</strong></td>
                      <td>HRGA</td>
                      <td><span class="badge bg-danger">Ditolak</span></td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Tiket Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Hari</a></li>
              <li><a class="dropdown-item" href="#">Bulan</a></li>
              <li><a class="dropdown-item" href="#">Tahun</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Trafik Tiket <span>| Hair ini</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Hardware & Jaringan'
                      },
                      {
                        value: 735,
                        name: 'Promo'
                      },
                      {
                        value: 580,
                        name: 'Selisi Harga'
                      },
                      {
                        value: 484,
                        name: 'Sistem Backoffice'
                      },
                      {
                        value: 300,
                        name: 'Aset'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->

      </div><!-- End Right side columns -->

    </div>
  </section>

@endsection
