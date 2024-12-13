<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ICT Helpdesk - Detail Tiket #******</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon_.ico') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
      <section class="section">

        <div class="row justify-content-around">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a class="logo d-flex align-items-center w-auto" href="{{ route('Index') }}">
                <img src="{{ asset('img/favicon_.ico') }}" alt="">
                <span class="d-none d-lg-block">ICT Helpdesk</span>
              </a>
            </div><!-- End Logo -->
          </div>
        </div>

        <div class="card">
          <div class="card-body p-lg-4">
            <h4 class="card-title text-center pb-0 fs-4 mb-4">Buat Tiket : Komputer & Jaringan</h4>
            <form class="mt-lg-5">
              <div class="row mb-3">
                  <div class="col">
                      <label for="name" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="name">
                  </div>
                  <div class="col">
                      <label for="whatsapp" class="form-label">Nomor Whatsapp</label>
                      <input type="text" class="form-control" id="whatsapp">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col">
                      <label for="category" class="form-label">Kategori</label>
                      <select class="form-select" id="category">
                          <option selected>Pilih Kategori</option>
                          <option value="1">Komputer Error</option>
                          <option value="2">Intenet Mati</option>
                          <option value="3">Printer Error</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="division" class="form-label">Divisi</label>
                      <select class="form-select" id="division">
                          <option selected>Pilih Divisi</option>
                          <option value="1">Accounting</option>
                          <option value="2">Crative Marketing</option>
                          <option value="3">Operasional</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="location" class="form-label">Lokasi</label>
                      <input type="text" class="form-control" id="location">
                  </div>
              </div>
              <div class="mb-3">
                  <label for="subject" class="form-label">Subjek</label>
                  <input type="text" class="form-control" id="subject">
              </div>
              <div class="mb-3">
                  <label for="details" class="form-label">Detail permintaan</label>
                  <textarea class="form-control" id="details" rows="4"></textarea>
              </div>
              <div class="col-12">
                <button class="btn more-btn" type="submit">Buat Permintaan</button>
              </div>
            </form>
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
  <script src="{{ asset('js/maindb.js') }}"></script>

</body>

</html>
