@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Hadiah /</span> Edit Hadiah</h4>

  <div class="card">
    <div class="card-body">
      <form action="/admin/edit/hadiah/data" method="POST">
        {{-- Judul --}}
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input 
            type="text"
            class="form-control"
            id="judul"
            placeholder="Judul Cerita"
            name="judul"
            value="Hadiah"
          />
        </div>
        {{-- Judul --}}
  
        <div class="row mb-3">
          {{-- Nama bank --}}
          <div class="col-md-6">
            <label for="nama_bank" class="form-label">Nama Bank (1)</label>
            <input
              type="text" 
              class="form-control"
              id="nama_bank"
              placeholder="Nama Bank"
              name="nama_bank"
              value="BNI"
            />
          </div>
          {{-- Nama bank --}}
          {{-- Nama bank2 --}}
          <div class="col-md-6">
            <label for="nama_bank2" class="form-label">Nama Bank (2)</label>
            <input
              type="text" 
              class="form-control"
              id="nama_bank"
              placeholder="Nama Bank"
              name="nama_bank2"
              value="BCA"
            />
          </div>
          {{-- Nama bank2 --}}
          
        </div>

        <div class="row mb-3">
          {{-- norek 1 --}}
          <div class="col md-6">
            <label for="nomor_rekening" class="form-label">No. Rekening (1)</label>
            <input
              type="text" 
              class="form-control"
              id="nomor_rekening"
              placeholder="Nomor Rekening"
              name="nomor_rekening"
              value="123456"
            />
          </div>
          {{-- Norek 1 --}}
          {{-- norek 2 --}}
          <div class="col md-6">
            <label for="nomor_rekening2" class="form-label">No. Rekening (2)</label>
            <input
              type="text" 
              class="form-control"
              id="nomor_rekening2"
              placeholder="Nomor Rekening"
              name="nomor_rekening2"
              value="654321"
            />
          </div>
          {{-- Norek 2 --}}
        </div>
        
        {{-- Deskripsi --}}
        <div>
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input
            class="form-control"
            id="deskripsi"
            placeholder="Deskripsi"
            name="deskripsi" 
            value="Terimakasi Orang Baik">
          </input>
            
        </div>
        {{-- Deskripsi --}}
        <div class="mt-3">
          <a href="/admin/edit/hadiah/data" class="btn btn-primary"><i class="bx bx-save me-1"></i> Simpan</a>
        </div>
      </form>
    </div>
  </div>

@endsection
