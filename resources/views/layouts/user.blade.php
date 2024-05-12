<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SetapakPhotoGrafer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/asset/img/favicon.png" rel="icon">
  <link href="/asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/asset/css/main.css" rel="stylesheet">
@vite('resources/js./app.js')
  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .rounded-square {
     border-radius: 10%;
     width: 800px;
     height: 400px;
     object-fit: cover; /* Menjaga gambar agar tetap terlihat proporsional */
 }
 .fullscreen-bg {
        background-image: url(asset/img/logo/bg1.jpg);
        background-size: cover;
        background-position: center;
        width: 100%;
        overflow: hidden;
        /* Untuk memastikan gambar latar belakang tetap terlihat */
    }
 </style>
</head>

<body>

 @include('partials.navbar')

  <main id="main" data-aos="fade" data-aos-delay="1500">
  

   @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        <a href="">AKAR</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/vendor/aos/aos.js"></script>
  <script src="/asset/vendor/php-email-form/validate.js"></script>
  @include('layouts.date')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/asset/js/main.js"></script>
  <script>
    function checkDateInput() {
        var dateInput = document.getElementById('date').value;
        if (dateInput !== '') {
            document.getElementById('date').disabled = true;
        }
    }
</script>

</body>

</html>