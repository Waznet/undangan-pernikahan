@extends('dashboard.master')

@section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Hadiah /</span> Create</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Create</a>
        </li>
        
      </ul>
      <!-- Account -->
      <div class="card mb-4">
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Judul</label>
                <input
                  class="form-control"
                  type="text"
                  id="firstName"
                  name="firstName"
                  {{-- value="John" --}}
                  autofocus
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Sub-Judul</label>
                <input class="form-control" type="text" name="lastName" id="lastName"/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Nama Pria</label>
                <input
                  class="form-control"
                  type="text"
                  id="email"
                  name="email"
                  {{-- value="john.doe@example.com" --}}
                  {{-- placeholder="john.doe@example.com" --}}
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Nama Wanita</label>
                <input
                  type="text"
                  class="form-control"
                  id="organization"
                  name="organization"
                  {{-- value="ThemeSelection" --}}
                />
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Nama Orangtua Pria</label>
                <div class="input-group input-group-merge">
                  <input
                    type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    class="form-control"
                    {{-- placeholder="202 555 0111" --}}
                  />
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Nama Orangtua Wanita</label>
                <input type="text" class="form-control" id="address" name="address"/>
              </div>
              
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
@endsection
