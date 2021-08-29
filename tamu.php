<form enctype="multipart/form-data" action="simpan_tamu.php" method="post" class="p-5 bg-white">

  <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_tamu = $_POST['No_Id'];
        $Nama = $_POST['nama'];
        $nik= $_POST['nik'];
        $Asal_instansi= $_POST['Asal_instansi'];
        $Tgl_Kunjungan= $_POST['Tgl_Kunjungan'];
        $keperluan = $_POST['keperluan'];
        $tujuan = $_POST['tujuan'];

        $q = mysqli_query($con, "INSERT INTO tamu(id_tamu,Nama,nik,Asal_instansi,Tgl_Kunjungan,keperluan,tujuan) VALUES('$id_tamu','$Nama','$nik','$Asal_instansi','$Tgl_Kunjungan','$keperluan','$tujuan')");
    
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
      window.location.href='index.php?module=tamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
      window.location.href='index.php?module=tamu';</script>";
        }
    }

    ?>

 <div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade">
          <span class="caption mb-3">Command Center</span>
          <h1 class="mb-4">Buku Tamu</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Buku Tamu</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="index.php?page=tamu" method="post" class="bg-white p-md-5 p-4 mb-5 border">



</body>

</html><html lang="en">

<head>
    <title>Form Entri Tamu</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped"
        <form action="" method="POST">
            <tr style="color: black;">
                <td>ID Tamu</td>
                <td>:</td>
                <td> <input type="text" name="id_tamu" id=""> </td>
            </tr>
       <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input required type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" /></td>
        </tr>
          
        
      <tr style="color: black;">
               
                  
                <td>Asal Instansi</td>
                <td>:</td>
                  <td> <input type="text" name="Asal_instansi" id=""> </td>
             </td>
                </label>

        <td>&nbsp;</td>
        </tr>
        
      <tr style="color: black;">
                <td>Tanggal Kunjungan</td>
                <td>:</td>
                <td> <input type="date" name="Tgl_Kunjungan" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>Keperluan</td>
                <td>:</td>
                <td> <input type="text" name="keperluan" id=""> </td>
                
             </td>
            </tr>
            
      
                <td></td>
                <td></td>
                <td> 
        <input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET"> 
        
        </td>
            </tr>
        </form>
    </table>

  
          </div>
        </div>
      </div>
    </div>
  </div>