<div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">Command Center</span>
				<h1 class="mb-4">Profil</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				
				<div class="img-border">
					<img src="images/IMG-20210319-WA0006.JPG" alt="" class="img-fluid">
				</div>
				<img src="images/IMG-20210319-WA0012.jpg" alt="Image" class="img-fluid image-absolute">
				
			</div>
			<div class="col-md-5 ml-auto">
				<div class="section-heading text-left">
              <h2 class="mb-5">Deskripsi</h2>
            </div>
				<td><p class="mb-4">Ruangan Command Center sendiri mempunyai 2 ruangan yang bisa digunakan untuk rapat virtual</p>
			  </td>
					<td><p class="mb-4">1. Ruang Utama Command Center                                        
					  <p class="mb-4"></td>
				

			    <td>2. Ruang Kedua Command Center (Posisi di Belakang) </td>
			</p>
		</p>
			</div>
		</div>
	</div>
</div>
<?php
if(!isset($_GET['id']))
{
?>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Staff Ruangan</h2>
			</div>
		</div>
		
		<div class="row">
		<?php 
		include "koneksi.php";
		$staff = mysqli_query ($conn,"select * from staff order by id_staff LIMIT 10");
		while($sql = mysqli_fetch_array($staff)){
		 
		?>
			<div class="col-md-4 col-lg-4 mb-6">
				<div class="hotel-room text-center">
					<a href="#" class="d-block mb-4 thumbnail"> <a href="?page=detail&id=<?php echo $sql['id_staff'] ?>"> <img src="images/<?php echo $sql['gambar'] ?>" alt="Image" class="img-fluid"></a>
					<div class="p-4">
						<h3 class="heading mb-3"><a href="?page=detail&id=<?php echo $sql['id_staff'] ?>"> <?php echo $sql['nama'] ?></a></h3>
						<p><?php echo substr( $sql['deskripsi'],0,37); ?> <a href="?page=detail&id=<?php echo $sql['id_staff'] ?>">... selengkapnya </a> </p>
					</div>
				</div>
			</div>
			<?php 
		    } 
		    ?>
		</div>
		
	</div>
</div>
<?php
}else{
?>
<div class="site-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-5 mb-md-0">
				
				<div class="img-border">
					<img src="images/Capture2.JPG" alt="" class="img-fluid">
				</div>
				<img src="images/mercure2.jpg" alt="Image" class="img-fluid image-absolute">
				
			</div>
			<div class="col-md-5 ml-auto">
				<div class="section-heading text-left">
              <h2 class="mb-5">Test</h2>

            </div>
				<p class="mb-4">test</p>
			</div>
		</div>
	</div>
</div>
<?php
}