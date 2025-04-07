@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Edit Tampilan /</span> Hadiah</h4>
  <a href="/admin/edit/hadiah/create" class="btn btn-primary mb-4">Tambah Hadiah</a>
    <div class="mb-4">
      <div class="card h-100">
        <div class="card-body">
          <table class="table table-borderless table-sm w-100">
            <tbody>
              <tr>
                <td><strong>Judul</strong></td>
                <td>: Hadiah</td>
              </tr>
              <tr>
                <td><strong>Deskripsi</strong></td>
                <td>: Terimakasih Orang Baik</td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td><strong>Nama Bank 1</strong></td>
                <td>: BNI</td>
              </tr>
              <tr>
                <td><strong>Nomor Rekening</strong></td>
                <td>: 123456</td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td><strong>Nama Bank 2</strong></td>
                <td>: BCA</td>
              </tr>
              <tr>
                <td><strong>Nomor Rekening</strong></td>
                <td>: 654321</td>
              </tr>
            </tbody>
          </table>
    
          <div class="mt-3">
            <a href="/admin/edit/hadiah/edit" class="btn btn-primary">
              <i class="bx bx-edit-alt me-1"></i>Edit</button>
            </a>
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
