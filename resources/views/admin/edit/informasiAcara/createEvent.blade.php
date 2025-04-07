@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Informasi Acara /</span> Tambah Acara</h4>

  <div class="card">
    <div class="card-body">
      <form>
        {{-- Acara --}}
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="acara" class="form-label">Judul Acara 1</label>
            <input 
              type="text"
              class="form-control"
              id="acara"
              placeholder="Acara"
              name="acara"
            />
          </div>
          <div class="col-md-6">
            <label for="acara" class="form-label">Judul Acara 2</label>
            <input 
              type="text"
              class="form-control"
              id="acara"
              placeholder="Acara"
              name="acara"
            />
          </div>
          {{-- Acara --}}
          {{-- Tanggal --}}
          <div class="col-md-6 mt-3">
            <label for="tanggal" class="form-label">Tanggal 1</label>
            <input
              type="datetime-local"
              class="form-control"
              id="tanggal"
              name="tanggal"
            />
          </div>
          <div class="col-md-6 mt-3">
            <label for="tanggal" class="form-label">Tanggal 2</label>
            <input
              type="datetime-local"
              class="form-control"
              id="tanggal"
              name="tanggal"
            />
          </div>
        </div>
        {{-- Tanggal --}}
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
            />
          </div>
          {{-- Lokasi --}}
          {{-- Kota --}}
          <div class="col-md-4">
            <label for="kota" class="form-label">Kota</label>
            <input
              type="text"
              class="form-control"
              id="kota"
              placeholder="Kota"
              name="kota"
            />
          </div>
          {{-- Kota --}}
          {{-- Alamat --}}
          <div class="col-md-4">
            <label for="alamat" class="form-label">Alamat</label>
            <input
              type="text"
              class="form-control"
              id="alamat"
              placeholder="Alamat Lengkap"
              name="alamat"
            />
          </div>
          {{-- Kota --}}
        </div>
        {{-- Link Gmap --}}
        <div>
          <label for="link_map" class="form-label">Link Google Map</label>
          <input
            type="link"
            class="form-control"
            id="link_map"
            placeholder="Link"
            name="link_map"
          />
        </div>
        <div class="mt-3">
          <a href="/admin/edit/informasi-acara/data" class="btn btn-primary">
            <i class="bx bx-save me-1"></i>
            Simpan
          </a>
        </div>
      </form>
    </div>
  </div>

@endsection
