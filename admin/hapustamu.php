<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_tamu = $_GET['id_tamu'];


// menghapus data dari database
mysqli_query($con,"delete from tamu where id_tamu='$id_tamu'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?module=tabeltamu");

?>