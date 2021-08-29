<div class="slide-one-item home-slider owl-carousel">
  <?php
  $sql=mysqli_query($conn,"SELECT * FROM slider");
  foreach ($sql as $key => $value) {
  ?>
  <div class="site-blocks-cover overlay" style="background-image: url(images/<?= $value['gambar']; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1 class="mb-2"><?= $value['deskripsi1'] ?></h1>
          <h2 class="caption"><?= $value['deskripsi2']; ?></h2>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
  <?php
  error_reporting(0);
  $sql=mysqli_query($conn,"SELECT * FROM tabeltransaksi where status='Diterima'");
  foreach ($sql as $key => $value) ;
  ?>


</div>
<div class="site-section block-15">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
      
        <h2>Jam Operasi</h2>
        <table width="553" border="5" bordercolor="#000099" bgcolor="#FFFFFF">
          <tr>
            <td width="221"><div align="center">Senin-Jumat</div></td>
            <td width="203"><div align="center">Sabtu- Minggu-Tanggal Merah </div></td>
          </tr>
          <tr>
            <td><div align="center">07:30 Wib - 16:00 Wib </div></td>
            <td><div align="center">Standby On Call</div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p>&nbsp;</p>
      </div>
    </div>
    
  </div>
</div>


      
      
    </div>
  </div>
</div>



      
</div>
<div class="site-section block-14 bg-light">
  <div class="container">
    
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2>Komentar Pengunjung</h2>
      </div>
    </div>
    <div class="nonloop-block-14 owl-carousel">
	<?php 
	include "koneksi.php";
	$sql=mysqli_query($conn, "select * from saran");
	foreach($sql as $saran){

	?>
      
      <div class="p-4">
        <div class="d-flex block-testimony">
          <div class="person mr-3">
            <img src="images/<?= $saran['gambar'] ?>" alt="Images" class="img-fluid rounded">
          </div>
          <div>
            <h2 class="h5"><?= $saran['nama'] ?></h2>
          <blockquote><?= $saran['pesan']  ?></blockquote>
        </div>
      </div>
    </div>
	<?php 
	
	}
	
	?>
    
</div>
</div>
</div>
<!-- <div class="py-5 quick-contact-info">
<div class="container">
<div class="row">
<div class="col-md-4 text-center">
<div>
  <span class="icon-room text-white h2 d-block"></span>
  <h2>Location</h2>
  <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
</div>
</div>
<div class="col-md-4 text-center">
<div>
  <span class="icon-clock-o text-white h2 d-block"></span>
  <h2>Service Times</h2>
  <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
    Fridays at Sunset - 7:30PM <br>
  Saturdays at 8:00AM - Sunset</p>
</div>
</div>
<div class="col-md-4 text-center">
<div>
  <span class="icon-comments text-white h2 d-block"></span>
  <h2>Get In Touch</h2>
  <p class="mb-0">Email: info@yoursite.com <br>
  Phone: (123) 3240-345-9348 </p>
</div>
</div>
</div>
</div>
</div> -->