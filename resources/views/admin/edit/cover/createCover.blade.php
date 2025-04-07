@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Tampilan /</span> Tambah Cover
  </h4>

  <div class="card">
    <div class="card-body">
      <form id="uploadForm">
        {{-- Input Judul --}}
        <div class="mb-3">
          <label for="judul" class="form-label">Teks</label>
          <input 
            type="text"
            class="form-control"
            id="judul"
            name="judul"
            placeholder="Teks Cover"
          />
        </div>

        {{-- Input Gambar 1 --}}
        <div class="mb-3">
          <label for="galeri1" class="form-label">Cover Mobile</label>
          <input
            type="file"
            class="form-control"
            id="galeri1"
            name="galeri1"
            accept="image/*"
          />
        </div>

        {{-- Input Gambar 2 --}}
        <div class="mb-3">
          <label for="galeri2" class="form-label">Cover Desktop</label>
          <input
            type="file"
            class="form-control"
            id="galeri2"
            name="galeri2"
            accept="image/*"
          />
        </div>

        {{-- Tombol Simpan --}}
        <div class="mt-3">
          <button type="submit" class="btn btn-primary"><i class="bx bx-save me-1"></i>Simpan</button>
        </div>
      </form>  
    </div>
  </div>
    {{-- Preview Gambar --}}
  <div id="uploaded-image-section" class="mt-4 row" style="display: none;">
    <div class="col-md-6 mb-3">
      <div class="card text-center">
        <div class="card-header fw-bold">Mobile</div>
        <div class="card-body">
          <img id="image-preview-1" src="#" alt="Preview 1" class="img-thumbnail d-block mx-auto" style="max-width: 100%; max-height: 250px;">
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card text-center">
        <div class="card-header fw-bold">Desktop</div>
        <div class="card-body">
          <img id="image-preview-2" src="#" alt="Preview 2" class="img-thumbnail d-block mx-auto" style="max-width: 100%; max-height: 250px;">
        </div>
      </div>
    </div>
  </div>


  {{-- Script --}}
  <script>
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const file1 = document.getElementById('galeri1').files[0];
      const file2 = document.getElementById('galeri2').files[0];

      if (!file1 || !file2) {
        alert("Silakan pilih dua gambar terlebih dahulu.");
        return;
      }

      // Load Gambar Pertama
      const reader1 = new FileReader();
      reader1.onload = function(e) {
        document.getElementById('image-preview-1').src = e.target.result;
      };
      reader1.readAsDataURL(file1);

      // Load Gambar Kedua
      const reader2 = new FileReader();
      reader2.onload = function(e) {
        document.getElementById('image-preview-2').src = e.target.result;
        document.getElementById('uploaded-image-section').style.display = 'flex';
      };
      reader2.readAsDataURL(file2);

      // Reset form setelah submit
      document.getElementById('uploadForm').reset();
    });
  </script>
@endsection
