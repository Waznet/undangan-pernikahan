<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
      <span class="app-brand-text demo fw-bolder">Dashboard</span>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('admin')? 'active':'' }}">
      <a href="{{ url('/admin') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-plus"></i>
        <div data-i18n="Analytics">Tambah Undangan</div>
      </a>
    </li>

  <!-- Data Tamu -->
  <li class="menu-item {{ request()->is('admin/data-tamu')? 'active':'' }}">
      <a href="{{ url('/admin/data-tamu') }}" class="menu-link">
      <i class="menu-icon tf-icons bx bx-id-card"></i>
      <div data-i18n="Data Tamu">Data Tamu</div>
    </a>
  </li>
  {{-- Data Tamu --}}
  
    {{-- Edit Tampilan --}}
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-customize"></i>
        <div data-i18n="Account Settings">Edit Tampilan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->is('admin/edit/informasi-mempelai*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/informasi-mempelai/data')}}" class="menu-link">
            <div data-i18n="InformasiMempelai">Informasi Mempelai</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/edit/informasi-acara*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/informasi-acara/data') }}" class="menu-link">
            <div data-i18n="Informasi Acara">Informasi Acara</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/edit/galeri*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/galeri/create') }}" class="menu-link">
            <div data-i18n="Galeri">Galeri</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/edit/cover*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/cover/create') }}" class="menu-link">
            <div data-i18n="Cover">Cover</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/edit/hadiah*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/hadiah/data') }}" class="menu-link">
            <div data-i18n="Hadiah">Hadiah</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/edit/cerita*')? 'active':'' }}">
          <a href="{{ url('/admin/edit/cerita/data') }}" class="menu-link">
            <div data-i18n="Cerita">Cerita</div>
          </a>
        </li>
      </ul>
    </li>
    {{-- Edit Tampilan --}}
  </ul>
</aside>
<!-- / Menu -->