@extends('Dashboard.master')

@section('title', 'ICT Helpdesk - Work Order')

@section('content')

  <div class="pagetitle">
    <h1>List Perintah Kerja</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
        <li class="breadcrumb-item active">General</li>
        <li class="breadcrumb-item active">Perintah Kerja</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No. Work Order</th>
                    <th scope="col">Masuk</th>
                    <th scope="col">Selesai</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Problem</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#2451135757</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Dzaky Haidar</td>
                    <td>Creative Marketing</td>
                    <td>Hardware/Software</td>
                    <td><span class="badge bg-info text-dark">Diterima</span></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-info-circle"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>#2451135758</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Yanto</td>
                    <td>HCGA</td>
                    <td>Printer Error</td>
                    <td><span class="badge bg-warning text-dark">Pengerjaan</span></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-info-circle"></i>
                      </button>
                    </td>
                    </tr>
                  <tr>
                    <td>#2451135759</td>
                    <td>10/12/2024</td>
                    <td>11/12/2024</td>
                    <td>Dede Iskandar</td>
                    <td>Finance</td>
                    <td>Printer</td>
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
