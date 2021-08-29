<?php 
    include_once "config/koneksi.php"; 
    $kab =isset($_GET['kab'])?$_GET['kab']:""; 
    if($kab!="") 
    { 
        $sql="SELECT galeri.*,ruangan.* FROM galeri INNER JOIN ruangan ON galeri.id_galeri=ruangan.id_galeri WHERE galeri.id_galeri='$kab'"; 
        $hasil=mysqli_query($conn,$sql); 
?>
            <?php 
                while($row=mysqli_fetch_array($hasil)) 
                    { 
            ?>
        <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="gambar">Gambar</label>
                <!-- <input type="text" id="name" class="form-control "> -->

                <img src="images/<?php echo $row['gambar'];?>" width="525" height="200"  alt="Gambar tidak di temukan" name="kecamatan" id="kecamatan">

              </div>
            </div>
            <div class="row">
             
            </div>
            <?php 
                    } 
            ?>
  
<?php 
    } 
?>