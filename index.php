<?php

require 'connect.php';
$datacovidPositif = query("SELECT SUM(positif) AS jumlahPositif FROM updatecovid;");
$datacovidPDP = query("SELECT SUM(pdp) AS jumlahPDP FROM updatecovid;");
$datacovidODP = query("SELECT SUM(odp) AS jumlahODP FROM updatecovid;");


$jenis = query("SELECT * FROM jenispasien ");
$gejala = query("SELECT * FROM gejala ");
$update = query("SELECT * FROM updatecovid ");
$rs = query("SELECT * FROM rs ");
$berita = query("SELECT * FROM berita ");


?>
<!doctype html>
<html lang="en">
  <head>
    <title>BisaSehat &mdash; Beranda</title>
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



  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">BisaSehat<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#beranda" class="nav-link">Beranda</a></li>
                <li><a href="#kenali" class="nav-link">Kenali Covid19</a></li>
                <li><a href="#updateCovid19" class="nav-link">Update Covid19</a></li>
                <li><a href="#rsRujukan" class="nav-link">Rumah Sakit Rujukan</a></li>
                <li><a href="#beritaTerkini" class="nav-link">Berita Terkini</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/kesehatan.jpg);" data-aos="fade" id="beranda">

      <div class="container">
        <div class="row align-items-center justify-content-center">


          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Selamat Datang di Situs BisaSehat</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Memberikan Info Menarik Seputar Dunia Kesehatan</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>


    <section class="site-section border-bottom" id="next">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Layanan Kami</h2>
          </div>
        </div>
        <div class="row">


          <div class="col-md-6 col-md-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="CallCenter.php"><span >Kunjungi</span></a></li>
                </ul>
                <img src="images/call.png" style="width:300px;height: 300px;" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Layanan Call Center</h3>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="radar.php"><span >Kunjungi</span></a></li>
                </ul>
                <img src="image/CheckKes.jpg" alt="Image" style="width:300px;height: 300px;" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Check Penyakit</h3>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>


    <section class="site-section" id="kenali">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Jenis Pasiennya</h2>
          </div>
        </div>

        <div class="row align-items-lg-center" >
          <?php $i = 1; ?>
          <?php foreach ($jenis as $var):?>
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="upload/<?php echo $var['gambar']; ?>" style="width : 300px; height: 300px;" alt="Image" class="img-fluid">
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3"><?php echo $i; ?>. <?php echo $var['jenisPasien']; ?></h2>
                <p><?php echo $var['keterangan']; ?></p>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>
        </div>
      </div>
    </section>




        <section class="site-section" id="kenali">
          <div class="container">

            <div class="row mb-5 justify-content-center">
              <div class="col-md-7 text-center">
                <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Jenis Gejalanya</h2>
              </div>
            </div>

            <div class="row align-items-lg-center" >
              <?php $i = 1; ?>
              <?php foreach ($gejala as $var):?>
              <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                <div class="owl-carousel slide-one-item-alt">
                  <img src="upload/<?php echo $var['gambar']; ?>" style="width : 200px; height: 200px;" alt="Image" class="img-fluid">
                </div>

              </div>
              <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                <div class="owl-carousel slide-one-item-alt-text">
                  <div>
                    <h2 class="section-title mb-3"><?php echo $i; ?>. <?php echo $var['gejala']; ?></h2>
                    <p><?php echo $var['keterangan']; ?></p>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>
            </div>
          </div>
        </section>


    <section class="site-section bg-light" id="updateCovid19">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h2 class="section-title mb-3">Update Covid 19</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-info">ODP</h3>
              <div class="price text-center mb-4 ">
                <span>Orang Dalam Pengawasan</span>
              </div>
              <?php foreach ($datacovidODP as $data):?>
              <h3 class="text-center text-info"><?php echo $data['jumlahODP']; ?></h3>
            <?php endforeach; ?>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h2 class="text-center text-danger">POSITIF</h2>
              <div class="price text-center mb-4 ">
                <span>Konfirmasi Positif</span>
              </div>
              <?php foreach ($datacovidPositif as $data):?>
              <h3 class="text-center text-danger"><?php echo $data['jumlahPositif']; ?></h3>
            <?php endforeach; ?>
          </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-warning">PDP</h3>
              <div class="price text-center mb-4 ">
                <span>Pasien Dalam Pengawasan</span>
              </div>
              <?php foreach ($datacovidPDP as $data):?>
              <h3 class="text-center text-info"><?php echo $data['jumlahPDP']; ?></h3>
            <?php endforeach; ?>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="rsRujukan">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Rumah Sakit Rujukan</h2>
          </div>
        </div>
        <div class="intro-section">
            <div class="container-table100">
              <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                  <table data-vertable="ver1">
                    <thead>
                      <tr class="row100 head">
                        <th class="column100 column1" data-column="column1">No</th>
                        <th class="column100 column2" data-column="column2">Nama Rumah Sakit</th>
                        <th class="column100 column3" data-column="column3">Daerah</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($rs as $var):?>
                      <tr class="row100">
                        <td class="column100 column1" data-column="column1"><?php echo $i; ?></td>
                        <td class="column100 column2" data-column="column2"><?php echo  $var['namaRumahSakit'];?></td>
                        <td class="column100 column3" data-column="column3"><?php echo $var['daerah']; ?></td>
                      </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section class="site-section" id="beritaTerkini">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Berita Terkini</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <?php foreach ($berita as $var):?>
            <div class="h-entry">
              <a href="single.html">
                <img src="upload/<?php echo $var['gambar']; ?>" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#"><?php echo $var['judulBerita']; ?></a></h2>
              <div class="meta mb-4"><?php echo $var['tanggalPosting']; ?></div>
              <p><?php echo $var['deskripsi']; ?></p>
              <p><a href="<?php echo $var['link']; ?>">Continue Reading...</a></p>
            </div>
          <?php endforeach; ?>
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website by FightCovid
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
