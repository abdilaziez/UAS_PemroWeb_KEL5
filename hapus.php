<?php
require 'connect.php';

$id_berita = $_GET["id_berita"];
$id_jenis = $_GET["id_jenis"];


if(hapusJenis($id_jenis)>0){
  header("Location: admin.php");
}

else if(hapusBerita($id_berita)>0){
  header("Location: admin.php");
}
else if(hapusRs($id_rs)>0){
  header("Location: admin.php");
}
else if(hapusGejala($id_gejala)>0){
  header("Location: admin.php");
}
else if(hapusUpdate($id_update)>0){
  header("Location: admin.php");
}



?>
