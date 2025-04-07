@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Informasi Acara /</span> Edit Acara</h4>

  <div class="card">
    <div class="card-body">
      <form action="/admin/edit/informasi-acara/data" method="POST">
        {{-- Acara --}}
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="acara1" class="form-label">Judul Acara 1</label>
            <input 
              type="text"
              class="form-control"
              id="acara1"
              placeholder="Acara"
              name="acara1"
              value="Akad"
            />
          </div>
          <div class="col-md-6">
            <label for="acara2" class="form-label">Judul Acara 2</label>
            <input 
              type="text"
              class="form-control"
              id="acara2"
              placeholder="Acara"
              name="acara2"
              value="Resepsi"
            />
          </div>
          {{-- Tanggal --}}
          <div class="col-md-6 mt-3">
            <label for="tanggal1" class="form-label">Tanggal 1</label>
            <input
              type="datetime-local"
              class="form-control"
              id="tanggal1"
              name="tanggal1"
              value="2025-05-10T16:00"
            />
          </div>
          <div class="col-md-6 mt-3">
            <label for="tanggal2" class="form-label">Tanggal 2</label>
            <input
              type="datetime-local"
              class="form-control"
              id="tanggal2"
              name="tanggal2"
              value="2025-05-10T16:00"
            />
          </div>
        </div>
        {{-- Lokasi --}}
        <div class="row mb-3">
          <div class="col-md-4">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input 
              type="text"
              class="form-control"
              id="lokasi"
              placeholder="Lokasi Acara"
              name="lokasi"
              value="Ballroom Hotel Bintang 5"
            />
          </div>
          <div class="col-md-4">
            <label for="kota" class="form-label">Kota</label>
            <input
              type="text"
              class="form-control"
              id="kota"
              placeholder="Kota"
              name="kota"
              value="Pekanbaru"
            />
          </div>
          <div class="col-md-4">
            <label for="alamat" class="form-label">Alamat</label>
            <input
              type="text"
              class="form-control"
              id="alamat"
              placeholder="Alamat Lengkap"
              name="alamat"
              value="Jl. Soekarno Hatta No.123, Panam"
            />
          </div>
        </div>
        <div>
          <label for="link_map" class="form-label">Link Google Map</label>
          <input
            type="url"
            class="form-control"
            id="link_map"
            placeholder="Link"
            name="link_map"
            value="https://maps.google.com/?q=-0.469420,101.355200"
          />
        </div>
        <div class="mt-3">
          <a href="/admin/edit/informasi-acara/data" class="btn btn-sm btn-outline-primary"><i class="bx bx-save me-1"></i> Simpan</a>
        </div>
      </form>
    </div>
  </div>

@endsection
