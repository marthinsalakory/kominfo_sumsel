<?php 
include 'koneksi.php';
$id=$_GET['No_Id'];
$sql= mysqli_query($con,"select * from agenda where No_Id='$id'");
$data=mysqli_fetch_array($sql);
?>

<html lang="en">

<head>
    <title>Form Entri agenda</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Tanggal Agenda</td>
                <td>:</td>
                <td> <input type="text" name="tgl_agenda" id="" value="<?php echo $data['No_Id']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Jam Mulai</td>
                <td>:</td>
                <td><input type="text" name="jam_mulai" id="" value="<?php echo $data['Nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Jam Selesai</td>
                <td>:</td>
                <td> <textarea name="jam_selesai" id="" cols="20" rows="5"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Ruang</td>
                <td>:</td>
                <td><input type="text" name="ruang" id="" value="<?php echo $data['Asal']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Asal Instansi</td>
                <td>:</td>
                <td> <input type="text" name="asal_instansi" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Kegiatan</td>
                <td>:</td>
                <td> <input type="text" name="kegiatan" id="" value="<?php echo $data['NoTlp']?>"> </td>
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
        $tgl_agenda = $_POST['tgl_agenda'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai= $_POST['jam_selesai'];
        $ruang= $_POST['ruang'];
        $asal_instansi= $_POST['asal_instansi'];
        $kegiatan = $_POST['kegiatan'];
        

        $q = mysqli_query($con, "UPDATE agenda set tgl_agenda='$_POST[tgl_agenda]',jam_mulai='$_POST[jam_mulai]',jam_selesai='$_POST[jam_selesai]',ruang='$_POST[ruang]',asal_instansi='$_POST[asal_instansi]',kegiatan='$_POST[kegiatan]' where tgl_agenda='$_POST[tgl_agenda]'");
		
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