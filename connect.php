<?php 
  $server = "localhost";
  $user = "root"; // GANTI
  $pass = ""; // GANTI
  $db = "masuk"; // GANTI

  $connect =  mysqli_connect($server,$user,$pass,$db);

  if(mysqli_connect_errno()){
    echo "KONEKSI GAGAL!\n Kesalahan : ".mysqli_connect_error();
  }
?>