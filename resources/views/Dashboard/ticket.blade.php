@extends('Dashboard.master')

@section('title', 'ICT Helpdesk - Ticket')

@section('content')

  <div class="pagetitle">
    <h1>List Tiket</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
        <li class="breadcrumb-item active">General</li>
        <li class="breadcrumb-item active">List Ticket</li>
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
                    <th scope="col">Tanggal</th>
                    <th scope="col">No. tiket</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Problem</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">12/12/2024</th>
                    <th scope="row">#2451135757</th>
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
                    <th scope="row">12/12/2024</th>
                    <th scope="row">#2451135758</th>
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
                    <th scope="row">12/12/2024</th>
                    <th scope="row">#2451135759</th>
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
