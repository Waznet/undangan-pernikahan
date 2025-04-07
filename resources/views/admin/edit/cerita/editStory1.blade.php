@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Cerita /</span> Edit Cerita 1</h4>

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
              value="Awal Bertemu"
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
            name="konten">Kami pertama kali bertemu di kampus saat ospek tahun 2020. Dari hanya sekadar sapa, kami mulai saling mengenal lewat tugas kelompok dan obrolan ringan. Tanpa disadari, perasaan mulai tumbuh dan menjadikan pertemuan ini awal dari segalanya.
          </textarea>
        </div>
        {{-- Konten --}}
        <div class="mt-3">
          <label for="foto" class="form-label">Foto</label>
          <input
            type="file"
            class="form-control"
            id="foto"
            name="foto"
          />
        </div>
        <div class="mt-3">
          <a href="/admin/edit/cerita/data" class="btn btn-primary"><i class="bx bx-save me-1"></i> Simpan</a>
        </div>
      </form>
    </div>
  </div>

@endsection
