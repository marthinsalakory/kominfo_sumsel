<html lang="en">

<head>
    <title>Form Entri Agenda</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>Tanggal Agenda</td>
                <td>:</td>
                <td> <input type="text" name="tgl_agenda" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>Jam Mulai</td>
                <td>:</td>
                <td><input type="text" name="jam_mulai" id=""></td>
				</tr>
            <tr style="color: black;">
                <td>jam_selesai</td>
                <td>:</td>
                <td> <textarea name="nik" id="" cols="20" rows="5"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Ruang</td>
                <td>:</td>
                <td><input type="text" name="Ruang" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Asal Instansi</td>
                <td>:</td>
                <td> <input type="text" name="asal_instansi" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>kegiatan</td>
                <td>:</td>
                <td> <input type="text" name="kegiatan" id=""> </td>
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
        $tgl_agenda = $_POST['tgl_agenda'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai= $_POST['jam_selesai'];
        $ruang= $_POST['ruang'];
        $asal_instansi= $_POST['asal_instansi'];
        $kegiatan = $_POST['kegiatan'];
       

        $q = mysqli_query($con, "INSERT INTO agenda(tgl_agenda,jam_mulai,jam_selesai,Asal_instansi,Tgl_Kunjungan,ruang,) VALUES('$tgl_agenda','$jam_mulai','$jam_selesai','$ruang','$asal_instansi','$kegiatan')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=agenda';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=agenda';</script>";
        }
    }

    ?>

</body>

</html>