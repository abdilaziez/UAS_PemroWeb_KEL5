<?php
require 'connect.php';

if(isset($_POST["kirim"])){
  if (pesan($_POST)>0) {
    header("Location: CheckPenyakit.php");
  }else {
    echo mysqli_error($conn);
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>BisaSehat &mdash; Check Kesehatan</title>
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

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


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
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0">BisaSehat<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Kembali</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/Kesehatan4.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">


              <div class="col-md-8 mt-lg-5 text-center">
                <h1>Kirimkan Keluhan Anda</h1>
                <p class="post-meta">Form untuk mengisi keluhan yang anda alami</p>

              </div>

        </div>
      </div>
    </div>

    <!-- <section class="site-section" id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/bansos.jpeg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">


            <div class="row">



              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                  <div>
                    <h3>Prasyarat</h3>
                    <p>Apa saja yang prasyarat untuk menerima bantuan sosial ?</p>
                    <p class="mb-0"><a href="#bansos">Pelajari Selengkapnya</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                  <div>
                    <h3>Media Platform & Contact Us</h3>
                    <p>Bagaiaman cara menghubungi kami ?</p>
                    <p class="mb-0"><a href="#contact">Pelajari Selengkapnya</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="bansos" class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/bansos2.jpeg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Prasyarat Bantuan Sosial</h3>
              <p>Berikut prasyarat yang harus dipenuhi sebelum menerima bantuan sosial</p>
            </div>

            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Berdomisili Kabupaten Jember</li>
                <li>Bukan merupakan keluarga dengan bantuan PKH, BPNT, BLT</li>
                <li>Bukan keluarga yang sudah mendapat bantuan dari kecamatan dan desa</li>
              </ul>

            </div>

      </div>
    </section> -->

    <section class="site-section bg-light" id="contact" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Keluhan Bersama</h2>
          </div>
        </div>
        

        
        <div class="row">
          <div class="col-md-12 mb-5">



            <form action="" method="POST" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Ajukan Keluhan</h2>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Lengkap</label>
                  <input type="text" id="name"name="nama" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Nomer Handphone</label>
                  <input type="nomerHp" id="nomerHp" name="nomerHp" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Keluhan</label>
                  <textarea name="pesan" id="message" cols="30" rows="7" class="form-control" name="pesan" placeholder="Masukkan Pertanyaan atau pesan yang ingin disampaikan"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" name="kirim" class="btn btn-primary btn-md text-white">
                </div>
              </div>


            </form>
          </div>

        </div>
      </div>
    </section>


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

  </body>
</html>
