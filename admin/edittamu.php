<?php 
include 'koneksi.php';
$id=$_GET['No_Id'];
$sql= mysqli_query($con,"select * from tamu where id_tamu='$id_tamu'");
$data=mysqli_fetch_array($sql);
?>

<html lang="en">

<head>
    <title>Form Entri Tamu</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>ID Tamu</td>
                <td>:</td>
                <td> <input type="text" name="id_tamu" id="" value="<?php echo $data['No_Id']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" id="" value="<?php echo $data['Nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Nik</td>
                <td>:</td>
                <td> <textarea name="nik" id="" cols="20" rows="5"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Asal Instansi</td>
                <td>:</td>
                <td><input type="text" name="Asal_instansi" id="" value="<?php echo $data['Asal']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Kunjungan</td>
                <td>:</td>
                <td> <input type="text" name="Tgl_Kunjungan" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Keperluan</td>
                <td>:</td>
                <td> <input type="text" name="Keperluan" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
            <tr style="color: black;">
                <td>Tujuan</td>
                <td>:</td>
                <td> <input type="text" name="tujuan" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
			</tr>
            <tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET"> 
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $id_tamu = $_POST['id_tamu'];
        $Nama = $_POST['Nama'];
        $Nik= $_POST['Nik'];
        $Asal_instansi= $_POST['Asal_instansi'];
        $Tgl_Kunjungan= $_POST['Tgl_Kunjungan'];
        $keperluan = $_POST['keperluan'];
        $tujuan = $_POST['tujuan'];

        $q = mysqli_query($con, "UPDATE tamu set id_tamu='$_POST[id_tamu]',Nama='$_POST[Nama]',Nik='$_POST[Nik]',Asal_instansi='$_POST[Asal_instansi]',Tgl_Kunjungan='$_POST[Tgl_Kunjungan]',keperluan='$_POST[keperluan]',tujuan='$_POST[tujuan]' where id_tamu='$_POST[id_tamu]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabeltamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabeltamu';</script>";
        }
    }

    ?>

</body>

</html>