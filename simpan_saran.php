<?php
include "koneksi.php";
include "fungsi_gambar.php";
 
 
	 if(isset($_POST['submit'])){
		
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$pesan=$_POST['pesan'];
		
	 
	$sqlsimpan = mysqli_query($conn, "insert into saran (nama, email, phone,pesan) values ('$nama', '$email', '$phone','$pesan')");
	} else { 
	$sqlsimpan = mysqli_query($conn, "insert into saran (nama, email, phone,pesan) values ('$nama', '$email', '$phone','$pesan')");
      }
	
	if($sqlsimpan){
	   echo "<script>alert('Data Berhasil Disimpan');
					 window.location='index.php?page=contact';</script>";
	 }else{
	 
	   echo "<script>alert('Data Gagal Disimpan');
					window.location='index.php?page=contact';</script>";
	  }
	

?>