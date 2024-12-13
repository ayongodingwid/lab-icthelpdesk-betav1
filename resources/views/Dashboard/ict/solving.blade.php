@extends('Dashboard.master')

@section('title', 'ICT Helpdesk - Komputer & Jaringan')

@section('content')

  <div class="pagetitle">
    <h1>Komputer & Jaringan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
        <li class="breadcrumb-item active">ICT</li>
        <li class="breadcrumb-item active">Komputer & Jaringan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form class="mt-5">
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
                        <select class="form-select" id="division">
                          <option selected placeholder="permasalahan"></option>
                          <option value="1">Komputer & Jaringan</option>
                          <option value="2">Perubahan Layout</option>
                          <option value="3">Sistem Backoffice</option>
                          <option value="3">Email Kantor</option>
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
                  <label for="formFile" class="form-label">Lampiran Foto</label>
                  <input class="form-control" type="file" id="formFile">
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
        </div>
      </div>
  </section>

@endsection
