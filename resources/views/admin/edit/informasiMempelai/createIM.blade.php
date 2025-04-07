@extends('dashboard.master')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tampilan / Informasi Mempelai /</span> Tambah Mempelai</h4>

  <div class="card">
    <div class="card-body">
      <form action="/admin/edit/informasi-mempelai/data" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Judul --}}
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="judul;" class="form-label">Judul</label>
            <input 
              type="text"
              class="form-control @error('judul') is-invalid @enderror"
              id="judul"
              placeholder="Judul"
              name="judul"
            />
            @error('judul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Judul --}}

          {{-- Tujuan --}}
          <div class="col-md-6">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input
              rows="5"
              class="form-control @error('tujuan') is-invalid @enderror"
              id="tujuan"
              name="tujuan"
            />
            @error('tujuan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        {{-- Tujuan --}}

        {{-- Namaa Pria --}}
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="nama_pria" class="form-label ">Nama Mempelai Pria</label>
            <input
              type="text"
              class="form-control @error('nama_pria') is-invalid @enderror"
              id="nama_pria"
              placeholder="Nama"
              name="nama_pria"
            />
            @error('nama_pria')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Nama Pria --}}

          {{-- Nama Wanita --}}
          <div class="col-md-6">
            <label for="nama_wanita" class="form-label ">Nama Mempelai Wanita</label>
            <input
              type="text"
              class="form-control @error('nama_wanita') is-invalid @enderror"
              id="nama_wanita"
              placeholder="Nama"
              name="nama_wanita"
            />
            @error('nama_wanita')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Nama Wanita --}}
        </div>

        {{-- Ortu Pria --}}
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="ortu_pria" class="form-label ">Orangtua Mempelai Pria</label>
            <textarea
              rows="5"
              class="form-control @error('ortu_pria') is-invalid @enderror"
              id="ortu_pria"
              placeholder="Orangtua Mempelai Pria"
              name="ortu_pria"></textarea>
            @error('ortu_pria')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Ortu Pria --}}

          {{-- Ortu Wanita --}}
          <div class="col-md-6">
            <label for="ortu_wanita" class="form-label ">Orangtua Mempelai Wanita</label>
            <textarea
              rows="5"
              class="form-control @error('ortu_wanita') is-invalid @enderror"
              id="ortu_wanita"
              placeholder="Orangtua Mempelai Wanita"
              name="ortu_wanita"></textarea>
            @error('ortu_wanita')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Foto Pria --}}
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="foto_pria" class="form-label ">Foto Mempelai Pria</label>
            <input
              type="file"
              class="form-control @error('foto_pria') is-invalid @enderror"
              id="foto_pria"
              name="foto_pria"
            />
            @error('foto_pria')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Foto Pria --}}

          {{-- Foto Wanita --}}
          <div class="col-md-6">
            <label for="foto_wanita" class="form-label">Foto Mempelai Wanita</label>
            <input
              type="file"
              class="form-control  @error('foto_wanita') is-invalid @enderror"
              id="foto_wanita"
              name="foto_wanita"
            />
            @error('foto_wanita')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          {{-- Foto Wanita --}}
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary"><i class="bx bx-save me-1"></i>
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

@endsection
