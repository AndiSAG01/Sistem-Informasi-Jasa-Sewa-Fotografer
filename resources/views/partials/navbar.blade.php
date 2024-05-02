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
          <li class="dropdown"><a href="#"><span>Price Guide</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('prewedding') }}" class="{{ request()->routeIs('prewedding')?'active' : '' }}">Prewedding</a></li>
                <li><a href="{{ route('wedding') }}" class="{{ request()->routeIs('wedding')? 'active' :' ' }}">Wedding</a></li>
                <li><a href="{{ route('engagement') }}" class="{{ request()->routeIs('engagement')? 'active' :' ' }}">Engagement</a></li>
              <li><a href="{{ route('aqiqah') }}" class="{{ request()->routeIs('aqiqah')? 'active' :' ' }}">Aqiqah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Price Graduation</span> <i class="bi bi-chevron-down dropdown-indicators"></i></a>
            <ul>
                <li><a href="{{ route('personal') }}" class="{{ request()->routeIs('personal')? 'active' :' ' }}">Personal Photo</a></li>
                <li><a href="{{ route('group') }}" class="{{ request()->routeIs('group')? 'active' :' ' }}">Group Photo</a></li>
                <li><a href="{{ route('familly') }}" class="{{ request()->routeIs('familly')? 'active' :' ' }}">Family Photo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Transaction</span> <i class="bi bi-chevron-down dropdown-indicators"></i></a>
            <ul>
              <!-- Sub-menu Guide -->
              <li class="dropdown">
                <a href="#">Guide</a>
                <ul>
                  <li><a href="{{ route('transaction_prewedding') }}">Prewedding</a></li> 
                  <li><a href="{{ route('transaction_wedding') }}">Wedding</a></li>    
                  <li><a href="">Engagement</a></li>  
                  <li><a href="">Aqiqah</a></li>      
                </ul>
              </li>
              <!-- Sub-menu Graduation -->
              <li class="dropdown">
                <a href="#">Graduation</a>
                <ul>
                  <li><a href="">Personal Photo</a></li>
                  <li><a href="">Group Photo</a></li>
                  <li><a href="">Family Photo</a></li>
                </ul>
              </li>
            </ul>
          </li>          
          <li><a href="contact.html">History Transaction</a></li>
          <form action="{{ route('logout') }}" method="post">
          <li>
              @csrf
              <button type="submit">Logout</button>
            </li>
          </form>
        </ul>
      </nav>

      <div class="header-social-links">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-whatsapp"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->