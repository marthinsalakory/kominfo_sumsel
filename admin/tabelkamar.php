<h2>Tabel SARAN</h2>
<div class="alert alert-info">TABEL DATA SARAN</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Phone</th>
<th>Pesan</th>

<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from saran");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['nama'] ?> </td>
<td align="center"><?php echo $row['email'] ?> </td>
<td align="center"><?php echo $row['phone'] ?> </td>
<td align="center"><?php echo $row['pesan'] ?> </td>



<td align="center">

<a href="index.php?module=hapuskamar&nama=<?php echo $row['nama'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 