@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Tampilan /</span> Tambah Foto
  </h4>

  <div class="card">
    <div class="card-body">
      <form id="uploadForm">
          <div>
            <label for="judul" class="form-label">Judul</label>
            <input 
              type="text"
              class="form-control"
              id="judul"
              placeholder="Judul Galeri"
              name="judul"
            />
          </div>

          <div class="mt-3">
            <label for="galeri" class="form-label">Foto</label>
            <input
              type="file"
              class="form-control"
              id="galeri"
              name="galeri"
              accept="image/*"
            />
          </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary"><i class="bx bx-save me-1"></i>Simpan</button>
        </div>
      </form>
      <div class="row">
        <!-- Gambar 1 -->
        <div class="col-md-3 text-center mb-4 mt-3 image-card">
          <img src="/main/src/assets/images/galeri1.jpg" alt="Preview" class="img-thumbnail mb-2" style="max-width: 100%;">
          <div>
            <button class="btn btn-danger btn-sm btn-hapus">
              <i class="bx bx-trash me-1"></i> Hapus
            </button>
          </div>
        </div>
      
        <!-- Gambar 2 -->
        <div class="col-md-3 text-center mb-4 mt-3 image-card">
          <img src="/main/src/assets/images/galeri2.jpg" alt="Preview" class="img-thumbnail mb-2" style="max-width: 100%;">
          <div>
            <button class="btn btn-danger btn-sm btn-hapus">
              <i class="bx bx-trash me-1"></i> Hapus
            </button>
          </div>
        </div>
      
        <!-- Gambar 3 -->
        <div class="col-md-3 text-center mb-4 mt-3 image-card">
          <img src="/main/src/assets/images/galeri3.jpg" alt="Preview" class="img-thumbnail mb-2" style="max-width: 100%;">
          <div>
            <button class="btn btn-danger btn-sm btn-hapus">
              <i class="bx bx-trash me-1"></i> Hapus
            </button>
          </div>
        </div>
        {{-- Gambar 4 --}}
        <div class="col-md-3 text-center mb-4 mt-3 image-card">
          <img src="/main/src/assets/images/galeri4.jpg" alt="Preview" class="img-thumbnail mb-2" style="max-width: 100%;">
          <div>
            <button class="btn btn-danger btn-sm btn-hapus">
              <i class="bx bx-trash me-1"></i> Hapus
            </button>
          </div>
        </div>
      </div>
      
      {{-- Area Gambar Hasil Upload --}}
      {{-- <div id="uploaded-image-section" class="mt-4" style="display: none;">
        <p id="judul-preview" class="fw-bold mt-3 text-center" style="font-size: 18px;"></p>
        <img id="image-preview" src="#" alt="Preview" class="img-thumbnail" style="max-width: 300px;">
          <button id="hapus-preview" class="btn btn-danger btn-sm">
            <i class="bx bx-trash me-1"></i> Hapus
          </button>
      </div> --}}
    </div>
  </div>

  

  {{-- Script --}}
  {{-- <script>
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
      e.preventDefault(); // Cegah reload halaman

      //const judul = document.getElementById('judul').value;
      const fileInput = document.getElementById('galeri');
      const file = fileInput.files[0];

      if (!file) {
        alert("Silakan pilih gambar terlebih dahulu.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function(e) {
        //document.getElementById('judul-preview').innerText = judul;
        const preview = document.getElementById('image-preview');
        preview.src = e.target.result;
        document.getElementById('uploaded-image-section').style.display = 'block';

        // Reset form supaya bisa upload ulang
        document.getElementById('uploadForm').reset();
      };
      reader.readAsDataURL(file);
    });
  </script> --}}
  <script>
    // Event listener untuk semua tombol hapus
    document.querySelectorAll('.btn-hapus').forEach(function(button) {
      button.addEventListener('click', function() {
        const card = this.closest('.image-card'); // Ambil container gambar
        card.remove(); // Hapus dari DOM
      });
    });
  </script>
@endsection
