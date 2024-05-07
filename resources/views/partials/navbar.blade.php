 <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <img src="asset/img/logo/logo.jpg" alt="" width="200px">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
      
          <!-- Dropdown untuk Price Guide -->
          <li class="dropdown">
            <a href="#"><span>Price Guide</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('prewedding') }}" class="{{ request()->routeIs('prewedding') ? 'active' : '' }}">Prewedding</a></li>
              <li><a href="{{ route('wedding') }}" class="{{ request()->routeIs('wedding') ? 'active' : '' }}">Wedding</a></li>
              <li><a href="{{ route('engagement') }}" class="{{ request()->routeIs('engagement') ? 'active' : '' }}">Engagement</a></li>
              <li><a href="{{ route('aqiqah') }}" class="{{ request()->routeIs('aqiqah') ? 'active' : '' }}">Aqiqah</a></li>
            </ul>
          </li>
      
          <!-- Dropdown untuk Price Graduation -->
          <li class="dropdown">
            <a href="#"><span>Price Graduation</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('personal') }}" class="{{ request()->routeIs('personal') ? 'active' : '' }}">Personal Photo</a></li>
              <li><a href="{{ route('group') }}" class="{{ request()->routeIs('group') ? 'active' : '' }}">Group Photo</a></li>
              <li><a href="{{ route('familly') }}" class="{{ request()->routeIs('familly') ? 'active' : '' }}">Family Photo</a></li>
            </ul>
          </li>
      
          <!-- Dropdown untuk Transactions -->
          <li class="dropdown">
            <a href="#"><span>Transaction</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <!-- Sub-menu Guide -->
              <li class="dropdown">
                <a href="#">Guide</a>
                <ul>
                  <li><a href="{{ route('transaction_prewedding') }}">Prewedding</a></li>
                  <li><a href="{{ route('transaction_wedding') }}">Wedding</a></li>
                  <li><a href="{{ route('transaction_engagement') }}">Engagement</a></li>
                  <li><a href="{{ route('transaction_aqiqah') }}">Aqiqah</a></li>
                </ul>
              </li>
              <!-- Sub-menu Graduation -->
              <li class="dropdown">
                <a href="#">Graduation</a>
                <ul>
                  <li><a href="{{ route('transaction_personal') }}">Personal Photo</a></li>
                  <li><a href="{{ route('transaction_group') }}">Group Photo</a></li>
                  <li><a href="{{ route('transaction_familly') }}">Family Photo</a></li>
                </ul>
              </li>
            </ul>
          </li>
      
          <!-- Tombol Logout -->
          <li style="margin:20px">
            <form action="{{ route('logout') }}" method="post" style="display: inline-block; margin: 0; padding: 0;">
              @csrf
              <button type="submit" class="bg-dark btn btn-dark btn-sm">Logout</button>
            </form>
          </li>
        </ul>
      </nav>
      

      <div class="header-social-links">
        <a href="https://www.instagram.com/setapak.photography?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/6282286993274" class="linkedin"><i class="bi bi-whatsapp"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->