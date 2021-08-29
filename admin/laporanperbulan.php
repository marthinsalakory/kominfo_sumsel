<h2>LAPORAN PER BULAN</h2>
<div class="alert alert-info">PILIH BULAN</div>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<select name="bulan">
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>
<select name="tahun">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
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
</tr>


<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$sql = "select * from reservasi where month(tanggal_pesan)='$bulan' and year(tanggal_pesan) = '$tahun'";
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
