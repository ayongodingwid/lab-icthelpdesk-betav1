@extends('Dashboard.master')

@section('title', 'ICT Helpdesk - Ticket')

@section('content')

  <div class="pagetitle">
    <h1>Permintaan Aset</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
        <li class="breadcrumb-item active">ICT</li>
        <li class="breadcrumb-item active">permintaan aset</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-12">
          <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary me-md-2" type="button">Buat Permintaan</button>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <!-- Table with stripped rows -->
              <table id="aset-table" class="table table-striped mt-2">
                <thead>
                  <tr>
                    <th scope="col">No. Tiket</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PYK0323452</td>
                    <td>12/12/2024</td>
                    <td>Dzaky Haidar</td>
                    <td>Creative Marketing</td>
                    <td><span class="badge bg-info text-dark">Diterima</span></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-info-circle"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>PYK0323684</td>
                    <td>12/12/2024</td>
                    <td>Yanto</td>
                    <td>HCGA</td>
                    <td><span class="badge bg-warning text-dark">Pengerjaan</span></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-info-circle"></i>
                      </button>
                    </td>
                    </tr>
                  <tr>
                    <td>AKS0327465</td>
                    <td>12/12/2024</td>
                    <td>Dede Iskandar</td>
                    <td>Finance</td>
                    <td><span class="badge text-bg-success">Selesai</span></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-info-circle"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>

        </div>
    </div>
  </section>

@endsection
