@extends('dashboard.master')
@section('login')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y d-flex align-items-center justify-content-center min-vh-100">
    <div class="authentication-inner" style="max-width: 600px;"> <!-- Tambahkan max-width lebih besar -->
      <!-- Login -->
      <div class="card shadow-lg" style="font-size: 1.2rem;"> <!-- Ukuran font diperbesar -->
        <div class="card-body p-5"> <!-- Tambahkan padding lebih besar -->
          <h2 class="mb-4 text-center fw-bold">Login</h2> <!-- Ukuran heading diperbesar -->
          @if ($errors->has('login'))
            <div class="alert alert-danger">
              {{ $errors->first('login') }}
            </div>
          @endif
          <form class="mb-3" action="/login/dashboard" method="POST">
            @csrf
            <div class="mb-4">
              <label for="username" class="form-label">Username</label>
              <input
                type="text"
                class="form-control form-control-lg" 
                id="username"
                name="username"
                placeholder="Masukkan username"
                autofocus
              />
            </div>
            <div class="mb-4 form-toggle-password">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-lg input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
                {{-- <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span> --}}
              </div>
            </div>
            <div class="mb-3">
              <button name="submit" class="btn btn-primary btn-lg d-grid w-100" type="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
</div>
@endsection
