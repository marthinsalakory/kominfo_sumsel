<h2>LAPORAN PERTAHUN</h2>
<div class="alert alert-info">LAPORAN DATA PERTAHUN</div>
<?php
$thn_ini=date("Y");
?>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>-Pilih Tahun-</td><td><input type="year" name="thn_ini" value="<?php echo $thn_ini; ?>"></td>
<td><button type="submit" name="cari" style="background-color: red;">Cari</td>
</tr>
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
</tr>


<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $thn_ini=$_POST['thn_ini'];
  $sql= mysqli_query($con, "select * from reservasi where reservasi.tanggal_pesan='$thn_ini'");
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








</td>
</tr>

<?php 
$no++;
}
?>
</table> 
