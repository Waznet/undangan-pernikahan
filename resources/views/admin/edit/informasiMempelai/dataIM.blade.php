@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-2">
    <span class="text-muted fw-light">Edit Tampilan /</span> Informasi Mempelai
  </h4>
  <a href="/admin/edit/informasi-mempelai/create" class="btn btn-primary mb-4">Tambah Mempelai</a>

  <div class="row justify-content-center">
    
    @foreach ($main_infos as $main_info)
      <div class="col-md-8 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">

            <!-- Foto -->
            <div class="d-flex justify-content-center gap-4 mb-4 flex-wrap">
              <div class="text-center">
                <img src="{{ asset('storage/' . $main_info->foto_pria) }}" alt="{{ $main_info->nama_pria }}" class="rounded-circle shadow" style="width: 140px; height: 140px; object-fit: cover;">
                <p class="mt-2 fw-semibold">{{ $main_info->nama_pria }}</p>
              </div>
              <div class="text-center">
                <img src="{{ asset('storage/' . $main_info->foto_wanita) }}" alt="{{ $main_info->nama_wanita }}" class="rounded-circle shadow" style="width: 140px; height: 140px; object-fit: cover;">
                <p class="mt-2 fw-semibold">{{ $main_info->nama_wanita }}</p>
              </div>
            </div>

            <!-- Informasi Text -->
            <div class="text-start px-4">
              <p class="fw-bold mb-1">Judul</p>
              <p class="mb-3">{{ $main_info->judul }}</p>

              <p class="fw-bold mb-1">Tujuan</p>
              <p class="mb-3">{{ $main_info->tujuan }}</p>

              <p class="fw-bold mb-1">Nama Pria</p>
              <p class="mb-3">{{ $main_info->nama_pria }}</p>

              <p class="fw-bold mb-1">Orang Tua Pria</p>
              <p class="mb-3">{{ $main_info->ortu_pria }}</p>

              <p class="fw-bold mb-1">Nama Wanita</p>
              <p class="mb-3">{{ $main_info->nama_wanita }}</p>

              <p class="fw-bold mb-1">Orang Tua Wanita</p>
              <p class="mb-3">{{ $main_info->ortu_wanita }}</p>
            </div>

            <!-- Tombol -->
            <div class="mt-4 d-flex justify-content-center gap-2">
              <a href="#" class="btn btn-primary">
                <i class="bx bx-edit-alt me-1"></i> Edit
              </a>
              <a href="#" class="btn btn-danger">
                <i class="bx bx-trash me-1"></i> Delete
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
