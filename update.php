<?php

include './config.php';

$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelp = $_POST['NoTelp'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = $_POST['JumlahMasaKerja'];

mysqli_query($koneksi, "update datakaryawan set nama='$Nama', NoTelp='$NoTelp', TahunMasuk='$TahunMasuk', JumlahMasaKerja='$JumlahMasaKerja' where id='$id'");

header("location:index.php");
?>