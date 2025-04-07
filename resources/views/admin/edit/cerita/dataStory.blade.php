@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-2">
    <span class="text-muted fw-light">Edit Tampilan /</span> Cerita
  </h4>
  {{-- <a href="/admin/edit/cerita/create" class="btn btn-primary mb-4">Tambah Cerita</a> --}}
  <div class="row">
    {{-- Card 1: Awal Bertemu --}}
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="/main/src/assets/images/galeri1.jpg" class="card-img-top" alt="Awal Bertemu" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title text-center">Awal Bertemu</h5>
          <p class="card-text">
            Kami pertama kali bertemu di kampus saat ospek tahun 2020. Dari hanya sekadar sapa, kami mulai saling mengenal lewat tugas kelompok dan obrolan ringan. Tanpa disadari, perasaan mulai tumbuh dan menjadikan pertemuan ini awal dari segalanya.
          </p>
          <div class="text-center">
            <a href="/admin/edit/cerita/edit1" class="btn btn-primary mt-auto"><i class="bx bx-edit-alt me-1"></i>Edit</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Card 2: Lamaran --}}
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="/main/src/assets/images/galeri4.jpg" class="card-img-top" alt="Lamaran" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title text-center">Lamaran</h5>
          <p class="card-text">
            Setelah menjalin hubungan selama 3 tahun, kami memutuskan untuk membawa hubungan ini ke arah yang lebih serius. Pada tanggal 1 Januari 2025, keluarga kami bertemu dalam suasana hangat dan penuh kebahagiaan untuk acara lamaran kami.
          </p>
          <div class="text-center">
            <a href="/admin/edit/cerita/edit2" class="btn btn-primary mt-auto"><i class="bx bx-edit-alt me-1"></i>Edit</a>
          </div>
        </div>
      </div>
    </div>

    {{-- Card 3: Pernikahan --}}
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="/main/src/assets/images/galeri2.jpg" class="card-img-top" alt="Pernikahan" style="height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title text-center">Pernikahan</h5>
          <p class="card-text">
            Momen paling membahagiakan dalam hidup kami akhirnya tiba. Pada 10 Mei 2025, kami resmi menjadi suami istri. Hari itu menjadi awal perjalanan baru penuh harapan dan cinta, bersama orang yang kami cintai sepenuh hati.
          </p>
          <div class="text-center">
            <a href="/admin/edit/cerita/edit3" class="btn btn-primary mt-auto"><i class="bx bx-edit-alt me-1"></i>Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
