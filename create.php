<?php
include './config.php';

$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NoKTP = $_POST['NoKTP'];
$NoTelp = $_POST['NoTelp'];
$TahunMasuk = $_POST['TahunMasuk'];
$JumlahMasaKerja = date("Y")-$TahunMasuk;

mysqli_query($koneksi, "insert into datakaryawan (Nama,NoTelp,TahunMasuk,JumlahMasaKerja,NoKTP,id)values('$Nama', '$NoTelp', '$TahunMasuk', '$JumlahMasaKerja', '$NoKTP', '')");
header("location:./index.php");