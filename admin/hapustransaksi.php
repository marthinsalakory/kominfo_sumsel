<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$No_Faktur = $_GET['No_Faktur'];


// menghapus data dari database
mysqli_query($con,"delete from reservasi where No_Faktur='$No_Faktur'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?module=tabeltransaksi");

?>