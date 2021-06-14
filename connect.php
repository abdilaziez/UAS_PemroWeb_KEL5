<?php
$conn = mysqli_connect("localhost","root","","fightcovid");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
  return $rows;
}

function registrasi($data)
{
  global $conn;

  $username = stripslashes($data["username"]);
  $password = mysqli_real_escape_string($conn,$data["pass"]);
  $result = mysqli_query($conn, "SELECT username FROM admin WHERE ntag = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah dipakai')
          </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn,"INSERT INTO admin VALUES('','$username','$password')");

  return mysqli_affected_rows($conn);
}


function jenisPasien($data)
{
  global $conn;

  $jenis = $data["jenis"];
  $keterangan = $data["keterangan"];

  $gambar = uploadGambar();
  if (!$gambar) {
    return false;
  }

  mysqli_query($conn,"INSERT INTO jenisPasien VALUES('','$jenis','$keterangan','$gambar')");

  return mysqli_affected_rows($conn);
}

function gejala($data)
{
  global $conn;

  $gejala = $data["gejala"];
  $deskripsi = $data["deskripsi"];

  $gambar = uploadGambar();
  if (!$gambar) {
    return false;
  }

  mysqli_query($conn,"INSERT INTO gejala VALUES('','$gejala','$deskripsi','$gambar')");

  return mysqli_affected_rows($conn);
}

function pesan($data)
{
  global $conn;

  $nama = $data["nama"];
  $email = $data["email"];
  $subjek = $data["subjek"];
  $pesan = $data["pesan"];


  mysqli_query($conn,"INSERT INTO pesan VALUES('','$nama','$email','$subjek','$pesan')");

  return mysqli_affected_rows($conn);
}

function rs($data)
{
  global $conn;

  $namaRs = $data["namaRs"];
  $daerah = $data["daerah"];

  mysqli_query($conn,"INSERT INTO rs VALUES('','$namaRs','$daerah')");

  return mysqli_affected_rows($conn);
}

function berita($data)
{
  global $conn;

  $judul = $data["judul"];
  $tanggal = $data["tanggal"];
  $link = $data["link"];
  $deskripsi = $data["deskripsi"];
  $gambar = uploadGambar();
  if (!$gambar) {
    return false;
  }

  mysqli_query($conn,"INSERT INTO berita VALUES('','$judul','$tanggal','$gambar','$deskripsi','$link')");

  return mysqli_affected_rows($conn);
}


function tambahData($data)
{
  global $conn;

  $positif = $data["positif"];
  $pdp = $data["pdp"];
  $odp = $data["odp"];

  mysqli_query($conn,"INSERT INTO updatecovid VALUES('',$positif,$pdp,$odp)");

  return mysqli_affected_rows($conn);
}

function uploadGambar()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

    $ekstensiGambarValid = ['jpg','png','jpeg'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar =strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
      echo "<script>
              alert('yang anda upload bukan gambar, Silahkan Masukkan ulang!')
            </script>";
      return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'upload/'. $namaFileBaru);
    return $namaFileBaru;

}

function hapusJenis($id_jenis){
  global $conn;
  mysqli_query($conn,"DELETE FROM jenisPasien WHERE id_jenis = $id_jenis");
  return mysqli_affected_rows($conn);
}

function hapusGejala($id_gejala){
  global $conn;
  mysqli_query($conn,"DELETE FROM gejala WHERE id_gejala = $id_gejala");
  return mysqli_affected_rows($conn);
}

function hapusRs($id_rs){
  global $conn;
  mysqli_query($conn,"DELETE FROM rs WHERE id_rs = $id_rs");
  return mysqli_affected_rows($conn);
}

function hapusBerita($id_berita){
  global $conn;
  mysqli_query($conn,"DELETE FROM berita WHERE id_berita = $id_berita");
  return mysqli_affected_rows($conn);
}

function hapusUpdate($id_update){
  global $conn;
  mysqli_query($conn,"DELETE FROM updatecovid WHERE id_update = $id_update");
  return mysqli_affected_rows($conn);
}
?>
