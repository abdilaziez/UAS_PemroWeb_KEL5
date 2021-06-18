<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
require 'connect.php';

$penyakit = query("SELECT * FROM solusipenyakit ");
$berita = query("SELECT * FROM artikelkesehatan ");
$pesan = query("SELECT * FROM pesan ");


?>


<!doctype html>
<html lang="en">
  <head>
    <title>BisaSehat &mdash; Admin</title>
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">BisaSehat<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/bgadmin2.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
              <div class="col-md-8 mt-lg-5 text-center">
                <h1>Halaman Admin</h1>
              </div>
        </div>
      </div>
    </div>

    <div class="intro-section">
        <div class="container-table100" style="background-color: white;">
          <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
              <table data-vertable="ver1">
                <h1 class="m-b-10 text-center text-black">Tabel Tips Penanganan Penyakit</h1>
                <thead>
                  <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">No</th>
                    <th class="column100 column2" data-column="column2">Nama Penyakit</th>
                    <th class="column100 column3" data-column="column3">Gambar</th>
                    <th class="column100 column4" data-column="column4">Cara Penanganan</th>
                    <th class="column100 column5" data-column="column5">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($penyakit as $var):?>
                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo $i; ?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $var['jenisPasien'];?></td>
                    <td class="column100 column3" data-column="column3"><img src="upload/<?php echo $var['gambar']; ?>" style="width : 150px; height: 150px;" alt=""> </td>
                    <td class="column100 column4" data-column="column4"><?php echo $var['keterangan']; ?></td>
                    <td class="column100 column5" data-column="column5"><a class="btn btn-danger" href="hapus.php?id_jenis=<?= $var["id_jenis"];?>" onclick="return confirm('Apakah Anda yakin untuk menghapus?'" role="button">Hapus</a></td>
                  </tr>
                <?php $i++;?>
                <?php endforeach; ?>
              </tbody>
              </table>
              <a class="btn btn-primary" href="solusiPenyakit.php" role="button">Tambah Data</a>
            </div>
          </div>
        </div>
      </div>

      

        

          
            <div class="intro-section">
                <div class="container-table100" style="background-color:white;>
                  <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                      <table data-vertable="ver1">
                        <h1 class="m-b-10 text-center text-black">Input Artikel Kesehatan</h1>
                        <thead>
                          <tr class="row100 head">
                            <th class="column100 column1" data-column="column1">No</th>
                            <th class="column100 column2" data-column="column2">Judul Artikel</th>
                            <th class="column100 column3" data-column="column3">Tanggal Posting</th>
                            <th class="column100 column3" data-column="column3">Gambar</th>
                            <th class="column100 column4" data-column="column4">Deskripsi</th>
                            <th class="column100 column4" data-column="column4">Link</th>
                            <th class="column100 column5" data-column="column5">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($berita as $var):?>
                          <tr class="row100">
                            <td class="column100 column1" data-column="column1"><?php echo $i; ?></td>
                            <td class="column100 column2" data-column="column2"><?php echo  $var['judulBerita'];?></td>
                            <td class="column100 column3" data-column="column3"><?php echo $var['tanggalPosting']; ?></td>
                            <td class="column100 column3" data-column="column3"><img src="upload/<?php echo $var['gambar']; ?>" style=" width: 100px; height: 100px;" alt=""> </td>
                            <td class="column100 column4" data-column="column4"><?php echo $var['deskripsi']; ?></td>
                            <td class="column100 column4" data-column="column4"><?php echo $var['link']; ?></td>
                            <td class="column100 column5" data-column="column5"><a class="btn btn-danger" href="hapus.php?id_berita=<?= $var["id_berita"];?>" onclick="return confirm('Apakah Anda yakin untuk menghapus?'" role="button">Hapus</a></td>
                          </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>
                      </tbody>
                      </table>
                      <a class="btn btn-primary" href="artikelKesehatan.php" role="button">Tambah Data</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="intro-section">
                  <div class="container-table100" style="background-color:white;>
                    <div class="wrap-table100">
                      <div class="table100 ver1 m-b-110">
                        <table data-vertable="ver1">
                          <h1 class="m-b-10 text-center text-black">Tabel Rekapan Data Pesan</h1>
                          <thead>
                            <tr class="row100 head">
                              <th class="column100 column1" data-column="column1">No</th>
                              <th class="column100 column2" data-column="column2">Nama Pengirim</th>
                              <th class="column100 column3" data-column="column3">Email</th>
                              <th class="column100 column4" data-column="column4">Nomer Hp</th>
                              <th class="column100 column5" data-column="column5">Isi Pesan</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($pesan as $var):?>
                            <tr class="row100">
                              <td class="column100 column1" data-column="column1"><?php echo $i; ?></td>
                              <td class="column100 column2" data-column="column2"><?php echo  $var['namaLengkap'];?></td>
                              <td class="column100 column3" data-column="column3"><?php echo $var['email']; ?></td>
                              <td class="column100 column4" data-column="column4"><?php echo $var['nomerHp']; ?></td>
                              <td class="column100 column5" data-column="column5"><?php echo $var['keterangan']; ?></td>
                            </tr>
                          <?php $i++;?>
                          <?php endforeach; ?>
                        </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>



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
