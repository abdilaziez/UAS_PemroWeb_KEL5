<?php
$conn = mysqli_connect("localhost","root","","bisasehat");

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


function penyakit($data)
{
  global $conn;

  $jenis = $data["jenis"];
  $keterangan = $data["keterangan"];

  $gambar = uploadGambar();
  if (!$gambar) {
    return false;
  }

  mysqli_query($conn,"INSERT INTO solusipenyakit VALUES('','$jenis','$keterangan','$gambar')");

  return mysqli_affected_rows($conn);
}



function pesan($data)
{
  global $conn;

  $nama = $data["nama"];
  $email = $data["email"];
  $nomerHp = $data["nomerHp"];
  $pesan = $data["pesan"];


  mysqli_query($conn,"INSERT INTO pesan VALUES('','$nama','$email','$nomerHp','$pesan')");

  return mysqli_affected_rows($conn);
}



function kesehatan($data)
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

  mysqli_query($conn,"INSERT INTO artikelkesehatan VALUES('','$judul','$tanggal','$gambar','$deskripsi','$link')");

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
  mysqli_query($conn,"DELETE FROM solusipenyakit WHERE id_jenis = $id_jenis");
  return mysqli_affected_rows($conn);
}





function hapusBerita($id_berita){
  global $conn;
  mysqli_query($conn,"DELETE FROM artikelkesehatan WHERE id_berita = $id_berita");
  return mysqli_affected_rows($conn);
}


?>
