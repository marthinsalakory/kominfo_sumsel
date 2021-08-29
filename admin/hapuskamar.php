<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$nama = $_GET['nama'];


// menghapus data dari database
mysqli_query($con,"delete from saran where nama='$nama'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?module=tabelkamar");

?>