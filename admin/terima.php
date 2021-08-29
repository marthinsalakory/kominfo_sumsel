<?php
require '../koneksi.php';
$No_Faktur=$_GET ['status'];

$sql = mysqli_query($conn, "UPDATE reservasi SET status='Diterima' WHERE No_Faktur='$No_Faktur'");
if ($sql)
	echo "<script>alert('Reservasi Di Terima');
					 window.location=index.php?module=tabeltransaksi
			</script>";
{
	?>
	<script type="text/javascript">
		window.history.go(-1);
	</script>
	<?php
}
?>