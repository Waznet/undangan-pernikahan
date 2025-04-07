@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Edit Tampilan /</span> Informasi Acara</h4>
  <a href="/admin/edit/informasi-acara/create" class="btn btn-primary mb-4">Tambah Acara</a>
    <div class="mb-4">
      <div class="card h-100">
        <div class="card-body">
          <table class="table table-borderless table-sm w-100">
            <tbody>
              <tr>
                <td><strong>Judul Acara 1</strong></td>
                <td>: Akad</td>
              </tr>
              <tr>
                <td><strong>Tanggal Acara 1</strong></td>
                <td>: 2025-05-10 16:00</td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td><strong>Judul Acara 2</strong></td>
                <td>: Resepsi</td>
              </tr>
              <tr>
                <td><strong>Tanggal Acara 2</strong></td>
                <td>: 2025-05-10 16:00</td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td><strong>Lokasi</strong></td>
                <td>: Ballroom Hotel Bintang 5</td>
              </tr>
              <tr>
                <td><strong>Kota</strong></td>
                <td>: Pekanbaru</td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td>
                <td>: Jl. Soekarno Hatta No.123, Panam</td>
              </tr>
              <tr>
                <td><strong>Google Maps</strong></td>
                <td>: <a href="https://maps.google.com/?q=-0.469420,101.355200" target="_blank">Link Lokasi</a></td>
              </tr>
            </tbody>
          </table>
    
          <div class="mt-3">
            <a href="/admin/edit/informasi-acara/edit" class="btn btn-primary"><i class="bx bx-edit-alt me-1"></i> Edit</a>
            <a href="#" class="btn btn-danger" onclick="hapusCard(this)"><i class="bx bx-trash me-1"></i> Delete</a>
          </div>
        </div>
      </div>
    </div>
  

    <script>
      function hapusCard(button) {
        const card = button.closest('.card');
        card.remove();
      }
    </script>
    
@endsection
