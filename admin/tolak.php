<?php
require '../koneksi.php';
$No_Faktur=$_GET ['status'];

$sql = mysqli_query($conn, "UPDATE reservasi SET status='Ditolak' WHERE No_Faktur='$No_Faktur'");
if ($sql)
	echo "<script>alert('Maaf Reservasi Belum Bisa Kami Terima ');
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