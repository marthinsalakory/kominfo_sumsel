<div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade">
        <span class="caption mb-3">Dari Kami</span>
        <h1 class="mb-4">Events</h1>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
	<!-- -->
     <?php
      // $sql=mysqli_query($conn,"SELECT galeri.*,ruangan.* FROM galeri INNER JOIN ruangan ON ruangan.No_ruangan = galeri.No_ruangan");
      // while($data = mysqli_fetch_array($sql)){
      ?>
	  <!-- -->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/WhatsApp Image 2021-06-02 at 21.38.37.jpeg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Rabu, 2 Juni 2021 (Sumsel Command Center)</a></h2>
          <p>Plh. Sekda Sumsel Ikuti Webdinar UMKM bank Sumsel Babel-KBRI Canberra</p>
        </div>
      </div>
	  <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/WhatsApp Image 2021-06-02 at 21.40.13.jpeg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0">Rabu, 2 Juni 2021 (Sumsel Command Center)<a href="#"></a></h2>
          <p>Gubernur Sumatera Selatan Herman Deru Berikan Tanggapan Upaya Peningkatan Pariwisata di Sumsel</p>
        </div>
      </div>
	  <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/WhatsApp Image 2021-06-02 at 21.46.00.jpeg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Rabu, 2 Juni 2021 (Sumsel Command Center)</a></h2>
          <p>Staf Ahli BId. Kemasyarakatan dan SDM Menghadiri Webdinar dengan tema "Memanfaatkan Tren Aplikasi Media Sosial di Masa Pandemi Covid-19" diselenggarakan oleh Kemenkominfo melalui zoom meeting.</p>
        </div>
      </div>
	  <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/WhatsApp Image 2021-06-02 at 21.55.48.jpeg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Rabu, 2 Juni 2021 (Sumsel Command Center)</a></h2>
          <p>Rapat Percepatan Pembangunan Pelabuhan New Ambon dan Pelabuhan Tanjung Carat melalui Aplikasi Zoom.</p>
        </div>
      </div>
	  <!-- --> 
      <?php
      // }
      ?>
	  <!-- -->
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
            <img src="images/<?= $saran['gambar'] ?>" alt="Image" class="img-fluid rounded">
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
</div>
</div>
