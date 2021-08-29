<?php
    session_start();
?>
<?php
	if (isset($_POST['submit'])) {
    include 'koneksi.php';

    $ruangan=$_POST['ruangan'];
    
    $Nama=$_POST['nama'];
    $Telpon=$_POST['nohp'];
    $Email=$_POST['email'];
    $jumlah_anggota=$_POST['jumlah_anggota'];
    $asal_instansi=$_POST['asal_instansi'];
    $keperluan=$_POST['keperluan'];
    $tanggal_pesan=$_POST['tanggal_pesan'];
    $waktu_mulai=$_POST['checkin'];
    $waktu_selesai=$_POST['checkout'];
    $no_faktur = uniqid();


    $query = mysqli_query($conn,"SELECT * FROM reservasi WHERE ruangan='$ruangan' AND tanggal_pesan='$tanggal_pesan'AND waktu_mulai='$waktu_mulai'");
    $cek = mysqli_num_rows($query);
   if ($cek  > 0) {
     echo '<script language="javascript">
                  alert ("maaf ruangan sudah di gunakan");
              window.location="index.php?page=reservasi";
              </script>';
        echo "<script>
    alert('Reservasi gagal! Kesalahan Database!');
    window.location.href='index.php?page=reservasi';
    </script>";
       

  }

else{


    $sql = "INSERT INTO reservasi (No_Faktur,ruangan,tanggal_pesan,waktu_mulai,waktu_selesai,Nama,Telpon,Email,jumlah_anggota,asal_instansi,keperluan)
    VALUES ('$no_faktur','$ruangan','$tanggal_pesan','$waktu_mulai','$waktu_selesai','$Nama','$Telpon','$Email','$jumlah_anggota','$asal_instansi','$keperluan')";
     echo "<script>
    alert('Reservasi Sukses');
    window.location.href='index.php?page=reservasi';
    </script>";
}

  



    if(mysqli_query($conn,$sql)){
       
    }else {

    }
}
 