<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ICT Helpdesk - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon_.ico') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="{{ route('Index') }}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('img/favicon_.ico') }}" alt="">
                  <span class="d-none d-lg-block">ICT Helpdesk</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body py-3">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered mt-lg-4 text-center">
                      <thead>
                        <tr>
                          <th scope="col">Nomor tiket</th>
                          <th scope="col">Nama Pengguna</th>
                          <th scope="col">Divisi</th>
                          <th scope="col">Problem</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">#2451135757</th>
                          <td>Dzaky Haidar</td>
                          <td>Creative Marketing</td>
                          <td>Hardware/Software</td>
                          <td><span class="badge bg-info text-dark">Diterima</span></td>
                          <td><button type="button" class="btn btn-primary rounded-pill btn-sm "><i class="bi bi-info-circle me-2"></i> Cek Detail</button></td>
                        </tr>
                        <tr>
                          <th scope="row">#2451135758</th>
                          <td>Yanto</td>
                          <td>HCGA</td>
                          <td>Printer Error</td>
                          <td><span class="badge bg-warning text-dark">Pengerjaan</span></td>
                          <td><a href="ict-detail-ticket.html" type="button" class="btn btn-primary rounded-pill btn-sm"><i class="bi bi-info-circle me-2"></i> Cek Detail</a></td>
                        </tr>
                        <tr>
                          <th scope="row">#2451135759</th>
                          <td>Dede Iskandar</td>
                          <td>Finance</td>
                          <td>Printer</td>
                          <td><span class="badge text-bg-success">Selesai</span></td>
                          <td><button type="button" class="btn btn-primary rounded-pill btn-sm"><i class="bi bi-info-circle me-2"></i> Cek Detail</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <button type="button" class="btn btn-light"><i class="ri ri-arrow-left-s-fill"> </i>Kembali</button>
                  <!-- End Table with hoverable rows -->
    
                </div>
              </div>

              <div class="credits d-flex justify-content-center">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js') }}/chart.umd.js') }}"></script>
  <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
