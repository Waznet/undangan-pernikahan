@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Cerita /</span> Tambah Cerita</h4>

  <div class="card">
    <div class="card-body">
      <form action="/admin/edit/cerita/data" method="POST">
        {{-- Judul --}}
        <div class="mb-3">
          <div>
            <label for="judul" class="form-label">Judul</label>
            <input 
              type="text"
              class="form-control"
              id="judul"
              placeholder="Judul Cerita"
              name="judul"
            />
          </div>
          {{-- Judul --}}
        </div>
        {{-- Sub-judul --}}
        {{-- KOnten --}}
        <div>
          <label for="konten" class="form-label">Konten</label>
          <textarea 
            class="form-control"
            id="konten"
            placeholder="Konten Cerita"
            name="konten"></textarea>
        </div>
        {{-- Konten --}}
        <div>
          <label for="foto" class="form-label">Foto</label>
          <input
            type="file"
            class="form-control"
            id="foto"
            name="foto"
          />
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>

@endsection
