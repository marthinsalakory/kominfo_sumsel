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
                <td> <input type="text" name="id_tamu" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" id=""></td>
				</tr>
            <tr style="color: black;">
                <td>Nik</td>
                <td>:</td>
                <td> <textarea name="nik" id="" cols="20" rows="5"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Asal Instansi</td>
                <td>:</td>
                <td><input type="text" name="Asal_instansi" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Kunjungan</td>
                <td>:</td>
                <td> <input type="text" name="Tgl_Kunjungan" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>Keperluan</td>
                <td>:</td>
                <td> <input type="text" name="keperluan" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>Tujuan</td>
                <td>:</td>
                <td> <input type="text" name="tujuan" id=""> </td>
            </tr>
			
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
        $id_tamu = $_POST['No_Id'];
        $Nama = $_POST['Nama'];
        $nik= $_POST['nik'];
        $Asal_instansi= $_POST['Asal_instansi'];
        $waktu=$_POST['waktu'];
        $Tgl_Kunjungan= $_POST['Tgl_Kunjungan'];
        $keperluan = $_POST['keperluan'];
        $tujuan = $_POST['tujuan'];

        $q = mysqli_query($con, "INSERT INTO tamu(id_tamu,Nama,nik,Asal_instansi,Tgl_Kunjungan,waktu,keperluan,tujuan) VALUES('$id_tamu','$Nama','$nik','$Asal_instansi','$Tgl_Kunjungan','$waktu','$keperluan','$tujuan')");
		
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