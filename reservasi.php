 <?php
  error_reporting(0);
  if(@$_SESSION['username']!=""){
?>
<?php
if (!isset($_GET['konf'])) {
  ?>
  <div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <span class="caption mb-3">Proses Reservasi</span>
          <h1 class="mb-4">Command Center</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Proses Reservasi</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="index.php?page=reservasi&konf=y" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="ruangan">Pilih Jenis Ruangan</label>
                <select required name="ruangan" id="ruangan" class="form-control" onChange="getkecamatan(this.value)">
                  <option value="">--Pilih Ruangan--</option>
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM ruangan");
                  foreach ($sql as $value) {
                    ?>
                    <option value="<?= $value['No_ruangan']; ?>"><?= $value['Jenis']; ?></option>
                  <?php
                }
                ?>
                </select>
              </div>
            </div>
            <div id="dvkecamatan">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="gambar">Gambar</label>
                  <!-- <input type="text" id="name" class="form-control "> -->

                  <img src="images/" alt="Gambar tidak di temukan" name="kecamatan" id="kecamatan">

                </div>
              </div>
              <div class="row">
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="nama">Nama</label>
                <input required type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" />
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Telepon</label>
                <input required type="text" id="phone" name="nohp" class="form-control " value="<?php echo $_SESSION['no_hp']; ?>"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input required type="email" id="email" name="email" class="form-control " value="<?php echo $_SESSION['email']; ?>"/>
              </div>
            </div>

             <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="tanggal_pesan">Tanggal </label>
                <input required type="date" id="tanggal_pesan" name="tanggal_pesan" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Waktu Mulai </label>
                <input required type="time" id="checkin_date" name="checkin" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Waktu Selesai</label>
                <input required type="time" id="checkout_date" name="checkout" class="form-control">
              </div>
            </div>
             <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="asal_instansi">Asal Instansi</label>
                <input required type="text" id="asal_instansi" name="asal_instansi" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Jumlah Anggota</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="jumlah_anggota" id="adults" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                     <option value="5">5</option>
                      <option value="6">6</option>
                       <option value="7">7</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Keperluan</label>
                <textarea name="keperluan" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Cek" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span style="font-size: 30px;" class="d-block"><strong>ALAMAT</strong>:</span> <span style="font-size: 35px;" class="text-black">

Jl. Kapten A. Rivai No.3, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121</span></p>
              
              <p><span style="font-size: 30px;" class="d-block"><strong>EMAIL</strong>:</span> <span style="font-size: 35px;" class="text-black"> kominfo.sumselprov.go.id</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
<?php
} elseif (isset($_GET['konf'])) {
  $ruangan=$_POST['ruangan'];
  
  $nama=$_POST['nama'];
  $telpon=$_POST['nohp'];
  $email=$_POST['email'];
  $tanggal_pesan=$_POST['tanggal_pesan'];
  $cek_in=$_POST['checkin'];
  $cek_out=$_POST['checkout'];
  $jumlah_anggota=$_POST['jumlah_anggota'];
  $asal_instansi=$_POST['asal_instansi'];
  $keperluan=$_POST['keperluan'];
  $waktu1=strtotime($_POST['checkin']);
  $waktu2=strtotime($_POST['checkout']);
  $secs = $waktu2 - $waktu1;
  $today = date('H:i:s');
  $lama_menginap = $secs / 86400;

  $query = mysqli_query("SELECT * FROM reservasi WHERE ruangan='$ruangan' AND tanggal_pesan='$tanggal_pesan' AND waktu_mulai='$cek_in'");
  $cek = mysqli_num_rows($query);
   if ($cek  > 0) {
     echo '<script language="javascript">
                  alert ("maaf ruangan sudah di gunakan");
              window.location="index.php?page=reservasi";
              </script>';

       

  }
   if($cek <= 0){ 
  


  }

  ?>
  <div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <span class="caption mb-3">Silahkan Cek Kembali Data Anda</span>
          <h1 class="mb-4">Proses Reservasi</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Konfirmasi Reservasi Ruangan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="proses_reservasi.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="ruangan">Jenis ruangan</label>
                <input type="ruangan" name="ruangan" id="ruangan" class="form-control" value="<?= $ruangan; ?>" readonly>
              </div>
            </div>
            <div id="dvkecamatan">
              <div class="row">
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $nama; ?>" readonly class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Telepon</label>
                <input type="text" id="phone" name="nohp" value="<?= $telpon; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $email; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Tanggal</label>
                <input type="date" id="tanggal_pesan" name="tanggal_pesan" value="<?= $tanggal_pesan; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Waktu Mulai</label>
                <input type="time" id="checkout_time" value="<?= $cek_in; ?>" readonly name="checkin" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Waktu Selesai</label>
                <input type="time" id="checkout_time" value="<?= $cek_out; ?>" readonly name="checkout" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="asal_instansi">Asal Instansi</label>
                <input type="text" id="asal_instansi" name="asal_instansi" value="<?= $asal_instansi; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Jumlah Anggota</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <input type="text" name="jumlah_anggota" id="" value="<?= $jumlah_anggota; ?>" readonly class="form-control ">
                </div>
              </div>
            </div>
            

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Keperluan</label>
                <textarea name="keperluan" id="message" class="form-control " readonly cols="30" rows="8"><?= $keperluan ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Pesan Sekarang!" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span style="font-size: 30px;" class="d-block"><strong>ALAMAT</strong>:</span> <span style="font-size: 35px;" class="text-black"> Jl. Kapten A. Rivai No.3, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121</span></p>
            
              <p><span style="font-size: 30px;" class="d-block"><strong>EMAIL</strong>:</span> <span style="font-size: 35px;" class="text-black"> kominfo.sumselprov.go.id</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
<?php
}
}else{
     echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
           window.location='index.php?page=login';</script>";
}
