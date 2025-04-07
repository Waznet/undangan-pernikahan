@extends('dashboard.master')

@section('content')
{{-- <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light"> </span> Data Tamu</h4> --}}
<div class="bg-white p-4 shadow rounded">
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Nomor WhatsApp</th>
          <th>Kehadiran</th>
          {{-- <th>Aksi</th> --}}
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>Rizkillah Ramanda Sinyo</td>
          <td>081234567890</td>
          <td><span class="badge bg-label-success me-1">Hadir</span></td>
          <td>
            <div>
              <div>
                <a class="btn btn-danger" href="#"><i class="bx bx-trash me-1"></i> Hapus</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>Sohibbal</td>
          <td>081322334455</td>
          <td><span class="badge bg-label-danger me-1">Tidak Hadir</span></td>
          <td>
            <div>
              <a class="btn btn-danger" href="#"><i class="bx bx-trash me-1"></i> Hapus</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>Ridwan</td>
          <td>081987654321</td>
          <td><span class="badge bg-label-success me-1">Hadir</span></td>
          <td>
            <div>
              <a class="btn btn-danger" href="#"><i class="bx bx-trash me-1"></i> Hapus</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>Budiyono Siregar</td>
          <td>081199887766</td>
          <td><span class="badge bg-label-danger me-1">Tidak Hadir</span></td>
          <td>
            <div>
              <a class="btn btn-danger" href="#"><i class="bx bx-trash me-1"></i> Hapus</a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
