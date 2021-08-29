<?php
session_start();
?>
<?php

	 if(isset($_POST['submit'])){
	 	include "koneksi.php";
		
		$id_tamu=$_POST['id_tamu'];
		$Nama=$_POST['nama'];
		$Asal_instansi=$_POST['Asal_instansi'];
		
		$Tgl_Kunjungan=$_POST['Tgl_Kunjungan'];
		$keperluan=$_POST['keperluan'];
		
		
	 
	$sqlsimpan = mysqli_query($conn, "insert into tamu (id_tamu, Nama ,Asal_instansi, Tgl_Kunjungan,keperluan) values ('$id_tamu','$Nama','$Asal_instansi','$Tgl_Kunjungan','$keperluan')");
	echo "<script>alert('Data Berhasil Disimpan, Silahkan lakukan Reservasi Ruangan');
					 window.location='index.php?page=reservasi';
			</script>";
	} else { 

	$sqlsimpan = mysqli_query($conn, "insert into tamu (id_tamu, Nama, nik,Asal_instansi,Tgl_Kunjungan,keperluan) values ('$id_tamu', '$Nama', '$Asal_instansi','Tgl_Kunjungan','$keperluan')");
	echo "<script>alert('Data Gagal Disimpan');
					 window.location='index.php?page=reservasi';
			</script>";
      }
      ?>