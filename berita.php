<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
require 'connect.php';
if(isset($_POST["kirim"])){
  if (berita($_POST)>0) {
    header("Location: admin.php");
  }else {
    echo mysqli_error($conn);
  }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <title>FightCovid &mdash; Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="admin/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="admin/css/util.css">
    <link rel="stylesheet" type="text/css" href="admin/css/main.css">
    <link rel="stylesheet" type="text/css" href="admin/css/style.css">

    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="formIsian/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="formIsian/css/util.css">
    	<link rel="stylesheet" type="text/css" href="formIsian/css/main.css">
    <!--===============================================================================================-->

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">FightCovid<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="admin.php" class="nav-link">Kembali</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/slide_2.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
              <div class="col-md-8 mt-lg-5 text-center">
                <h1>Halaman Tambah Berita</h1>
              </div>
        </div>
      </div>
    </div>

    <div class="container-contact100">
      <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

      <div class="wrap-contact100">
        <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
          <span class="contact100-form-title-1">
            Tambah Data Berita
          </span>

          <span class="contact100-form-title-2">
            Masukkan berita terbaru
          </span>
        </div>

        <form class="contact100-form validate-form" action="" method="POST" enctype="multipart/form-data" >
          <div class="wrap-input100">
            <span class="label-input100">Judul</span>
            <input class="input100" type="text" name="judul" placeholder="Masukkan Judul Berita">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 " >
            <span class="label-input100">Tanggal</span>
            <input class="input100" type="date" name="tanggal" >
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 ">
            <span class="label-input100">Gambar</span>
            <input class="input100" type="file" name="gambar">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100">Deskripsi</span>
            <textarea class="input100" type="text" name="deskripsi" placeholder="Masukkan deskripsi berita"></textarea>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100">
            <span class="label-input100">Link</span>
            <input class="input100" type="url" name="link" placeholder="Masukkan Link Berita">
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" name="kirim">
              <span>
                Tambah Data Terbaru
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>



    <div id="dropDownSelect1"></div>


    <footer>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-1">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website by BisaSehat.
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

            </div>
          </div>

        </div>
      </div>
    </footer>


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>

  <!--===============================================================================================-->
  	<script src="formIsian/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/vendor/bootstrap/js/popper.js"></script>
  	<script src="formIsian/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/vendor/daterangepicker/moment.min.js"></script>
  	<script src="formIsian/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
  	<script src="formIsian/js/map-custom.js"></script>
  <!--===============================================================================================-->
  	<script src="formIsian/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
  	  gtag('js', new Date());

  	  gtag('config', 'UA-23581568-13');
  	</script>

  </body>
</html>
