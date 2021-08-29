

  <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $tgl_agenda = $_POST['tgl_agenda'];
        $Pukul = $_POST['Pukul'];
        $ruang= $_POST['ruang'];
        $asal_instansi= $_POST['asal_instansi'];
        $kegiatan = $_POST['kegiatan'];
       

        $sqlsimpan = mysqli_query($conn, "INSERT INTO agenda(tgl_agenda,Pukul,ruang,asal_instansi,kegiatan) VALUES('$tgl_agenda','$Pukul','$ruang','$asal_instansi','$kegiatan')");
    
        if ($sqlsimpan) {
            echo "<script>alert('Data Berhasil Di simpan, Silahkan lakukan reservasi');
      window.location.href='index.php?page=reservasi';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
      window.location.href='index.php?module=agenda';</script>";
        }
    }

    ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <span class="caption mb-3">Command Center</span>
          <h1 class="mb-4">Agenda</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Buku Agenda</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="index.php?page=agenda" method="post" class="bg-white p-md-5 p-4 mb-5 border">



</body>

</html><html lang="en">

<head>
    <title>Form Entri  Buku Agenda</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped"
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Tanggal Agenda</td>
                <td>:</td>
                <td> <input type="date" name="tgl_agenda" id=""> </td>
            </tr>
       <tr style="color: black;">
                <td>Pukul</td>
                <td>:</td>
                <td><input type="time" name="Pukul" id=""></td>
        </tr>
          
      <tr style="color: black;">
                <td>Ruang</td>
                <td>:</td>
                <td><input type="text" name="ruang" id=""></td>
        </tr>
      <tr style="color: black;">
                <td>Asal Instansi</td>
                <td>:</td>
                <td> <input type="text" name="asal_instansi" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>Kegiatan</td>
                <td>:</td>
                <td> <input type="text" name="kegiatan" id=""> </td>
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