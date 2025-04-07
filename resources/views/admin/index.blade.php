@extends('dashboard.master')

@section('content')
<div class="container-fluid min-vh-50 d-flex align-items-center justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="bg-white p-5 shadow rounded"> 
      <h3 class="mb-4 text-center">Tambah Undangan</h3>

      <form>
        @csrf

        <!-- Nama -->
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" required>
        </div>

        <!-- Nomor WhatsApp -->
        <div class="mb-4">
          <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
          <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="08xxxxxxxxxx" required>
        </div>

        <!-- Tombol Submit -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Simpan Undangan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
