<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ route('dashboard') }}" class="logo">
          {{-- <img
            src="assets/img/kaiadmin/logo_light.svg"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          /> --}}
          <h5 class="text-light">BCC, Khulna</h5>
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="../demo1/index.html">
                    <span class="sub-item">Dashboard 1</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Section</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#category" class="">
              <i class="fas fa-layer-group"></i>
              <p>Category</p>
              <span class="caret"></span>
            </a>
            <div class="collapse {{ Route::is('category.*') ? 'show' : '' }}" id="category">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{url('/category')}}">
                    <span class="sub-item">Category</span>
                    <h2>{{ request()->is('/category') ? 'show': '' }}</h2>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          {{-- Services Section --}}
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#service">
              <i class="fas fa-layer-group"></i>
              <p>Services Section</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="service">
              <ul class="nav nav-collapse">
                <li>
                  <a href="">
                    <span class="sub-item">View Section</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="sub-item">View Sub Section</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>