<?php

include './config.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelp = $_POST['NoTelp'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = $_POST['JumlahMasaKerja'];

//mysqli_query($koneksi, "update set datakaryawan (Nama,NoTelp,TahunMasuk,JumlahMasaKerja,NoKTP,id)values('$Nama', '$NoTelp', '$TahunMasuk', '$JumlahMasaKerja', '$NoKTP', '')");
mysqli_query($koneksi, "update datakaryawan set Nama='$Nama', NoTelp='$NoTelp', TahunMasuk='$TahunMasuk', JumlahMasaKerja='$JumlahMasaKerja', NoKTP='$NoKTP' where id='$id'");

header("location:index.php");
?>