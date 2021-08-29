<?php
include "koneksi.php";


 
 
	 if(isset($_POST['submit'])){
		
		$tgl_agenda=$_POST['tgl_agenda'];
		$Pukul=$_POST['Pukul'];
		$ruang=$_POST['ruang'];
		$asal_instansi=$_POST['asal_instansi'];
		$kegiatan=$_POST['kegiatan'];
		
	 
	$sqlsimpan = mysqli_query($conn, "insert into agenda (tgl_agenda, Pukul, jam_selesai,ruang,asal_instansi,kegiatan) values ('$id_tamu','$Pukul', '$jam_selesai','$ruang','$asal_instansi','$kegiatan')");
	echo "<script>alert('Data Berhasil Disimpan, Silahkan Lanjut Reservasi');
					  window.location='index.php?page=reservasi';
			</script>";
	} else { 

	$sqlsimpan = mysqli_query($conn, "insert into agenda (tgl_agenda, Pukul,ruang,asal_instansi,kegiatan) values ('$tgl_agenda', '$Pukul','$ruang','$asal_instansi','$kegiatan')");
	echo "<script>alert('Data Gagal Disimpan');
					 window.location='index.php?page=reservasi';
			</script>";
      }
      ?>