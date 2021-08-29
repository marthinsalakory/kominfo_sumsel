<h2>Tabel Tamu</h2>
<div class="alert alert-info">TABEL DATA TAMU</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Id tamu</th>
<th>Nama</th>
<th>Asal instansi</th>
<th>Tanggal Kunjungan</th>
<th>Keperluan</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from tamu");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_tamu'] ?> </td>
<td align="center"><?php echo $row['Nama'] ?> </td>
<td align="center"><?php echo $row['Asal_instansi'] ?> </td>
<td align="center"><?php echo $row['Tgl_Kunjungan'] ?> </td>
<td align="center"><?php echo $row['keperluan'] ?> </td>



<td align="center">
<a href="index.php?module=hapustamu&id_tamu=<?php echo $row['id_tamu'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 