@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Edit Tampilan /</span> Informasi Mempelai</h4>
  <a href="/admin/edit/informasi-mempelai/create" class="btn btn-primary mb-4">Tambah Mempelai</a>
  <div class="row">
    @foreach ($main_infos as $main_info)
      <div class="col-md-6 col-lg-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <p><strong>Judul:</strong> {{ $main_info->judul }}</p>
                <p><strong>Tujuan:</strong> {{ $main_info->tujuan }}</p>
                <p><strong>Nama Pria:</strong> {{ $main_info->nama_pria }}</p>
                <p><strong>Orang Tua Pria:</strong> {{ $main_info->ortu_pria }}</p>
                <p><strong>Nama Wanita:</strong> {{ $main_info->nama_wanita }}</p>
                <p><strong>Orang Tua Wanita:</strong> {{ $main_info->ortu_wanita }}</p>
              </div>
              <div class="col-md-6 text-center">
                <img src="{{ asset('storage/' . $main_info->foto_pria) }}" alt="{{ $main_info->nama_pria }}" class="img-fluid rounded mb-2" style="height:150px; object-fit:cover;">
                <img src="{{ asset('storage/' . $main_info->foto_wanita) }}" alt="{{ $main_info->nama_wanita }}" class="img-fluid rounded mb-2" style="height:150px; object-fit:cover;">
              </div>
            </div>

            <div class="mt-3 text-center">
              <a href="#" class="btn btn-primary"><i class="bx bx-edit-alt me-1"></i> Edit</a>
              <a href="#" class="btn btn-danger"><i class="bx bx-trash me-1"></i> Delete</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
