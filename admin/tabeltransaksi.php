<h2>Tabel RESERVASI</h2>
<div class="alert alert-info">TABEL DATA RESERVASI</div>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>-Cari Waktu-</td><td><input type="time" name="hari_ini"></td>
<td><button type="submit" name="cari" style="background-color: red;">Cari</td>
</tr>
<a href="cetak.php"class="btn btn-danger">CETAK DATA</a>
</form>

<tr> 
<th>No</th>
<th>No Faktur</th>
<th>Ruangan</th>
<th>Tanggal</th>
<th>Waktu Mulai</th>
<th>Waktu Selesai</th>
<th>Nama</th>
<th>Telepon</th>
<th>Email</th>
<th>Asal Instansi</th>
<th>Jumlah Anggota</th>
<th>Keperluan</th>
<th>status</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $hari_ini=$_POST['hari_ini'];
  $sql= mysqli_query($con, "select * from reservasi where reservasi.waktu_mulai='$hari_ini'");
  }else{
$sql = mysqli_query($con,"select * from reservasi");
}
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['No_Faktur'] ?> </td>
<td align="center"><?php echo $row['ruangan'] ?> </td>
<td align="center"><?php echo $row['tanggal_pesan'] ?> </td>
<td align="center"><?php echo $row['waktu_mulai'] ?> </td>
<td align="center"><?php echo $row['waktu_selesai'] ?> </td>
<td align="center"><?php echo $row['Nama'] ?> </td>
<td align="center"><?php echo $row['Telpon'] ?> </td>
<td align="center"><?php echo $row['Email'] ?> </td>
<td align="center"><?php echo $row['asal_instansi'] ?> </td>
<td align="center"><?php echo $row['jumlah_anggota'] ?> </td>
<td align="center"><?php echo $row['keperluan'] ?> </td>
<td align="center"><?php echo $row['status'] ?> </td>





<td align="center">
<li class="<?php $aktif = ($_GET['page']=='terima') ? 'active' : ''; echo $aktif; ?>"><a href="terima.php?status=<?php echo $row['No_Faktur'];?>"class="btn btn-danger">Terima</a></li>
<li class="<?php $aktif = ($_GET['page']=='tolak') ? 'active' : ''; echo $aktif; ?>"><a href="tolak.php?status=<?php echo $row['No_Faktur'];?>"class="btn btn-danger">Tolak</a></li>
<a href="index.php?module=hapustransaksi&No_Faktur=<?php echo $row['No_Faktur'];?>"class="btn btn-danger">Hapus</a>
<a href="https://mail.google.com/mail/u/0/#inbox?compose=new"class="btn btn-danger">Kirim Hasil via email</a>



</td>
</tr>

<?php 
$no++;
}
?>
</table> 
