<div class="site-blocks-cover overlay" style="background-image: url(images/IMG-20210319-WA0006.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">Silahkan Isi Saran Dan kritikan Anda Pada form Dibawah ini!!!</span>
				<h1 class="mb-4">Kontak</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 col-lg-8 mb-5">
				
				
				
				<form enctype="multipart/form-data" action="simpan_saran.php" method="post" class="p-5 bg-white">
					
					</div>
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="fullname">Nama Lengkap</label>
							<input required type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['nama']; ?>" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="email">Email</label>
							<input required type="email" id="email" name="email" class="form-control " value="<?php echo $_SESSION['email']; ?>"/>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="phone">No. HP</label>
							<input required type="text" id="phone" name="nohp" class="form-control " value="<?php echo $_SESSION['no_hp']; ?>"/>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="message">Pesan</label>
							<textarea id="message" name="pesan" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">							
						</div>
					</div>
					
				</form>
			</div>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<h3 class="h5 text-black mb-3">Contact Info</h3>
					<p class="mb-0 font-weight-bold">Address</p>
					<p class="mb-4">Jl. Kapten A. Rivai No.3, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121</p>
					<p class="mb-0 font-weight-bold">Email Address</p>
					<p class="mb-0"><a href="#">kominfo.sumselprov.go.id</a></p>
				</div>
				
				
			</div>
		</div>
	</div>
</div>