<h2>Tabel AGENDA</h2>
<div class="alert alert-info">TABEL DATA AGENDA</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>Id</th>
<th>Tanggal Agenda</th>
<th>Pukul</th>
<th>Ruang</th>
<th>Asal Instansi</th>
<th>Kegiatan</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$q = mysqli_query($con,"select * from agenda");
$no=1;
while($row=mysqli_fetch_array($q)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['tgl_agenda'] ?> </td>
<td align="center"><?php echo $row['Pukul'] ?> </td>
<td align="center"><?php echo $row['ruang'] ?> </td>
<td align="center"><?php echo $row['asal_instansi'] ?> </td>
<td align="center"><?php echo $row['kegiatan'] ?> </td>



<td align="center">
<a href="hapus_agenda.php?id=<?php echo $row['id']; ?>">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 