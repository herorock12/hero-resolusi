<?php
$NUPTK = @$_GET['NUPTK'];

$query = $koneksi->query("SELECT * FROM data_karyawan WHERE NUPTK = '$NUPTK'");

$tampil = $query->fetch_assoc();

?>


<div class="panel-heading">
 		<div class="panel-body">
 			<div class="row">
 				<div class="col-md-6">
 					<h1><center>Data Karyawan</h1></center><br><br>
 					<form action="" method="post" enctype="multipart/form-data">
 						<div class="form-group">
 							<label>NUPTK</label>
 							<input class="form-control" name="NUPTK" value="<?php echo $tampil['NUPTK']; ?>" readonly/>
 						</div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" readonly/>
            </div>
            <div class="form-group">
              <label>Print</label>
              <select class="form-control" name="print" >
                <option value="YA">SUDAH</option>
                <option value="TIDAK">BELUM</option>
              </select>
            </div>
            <div>
              <input type="submit" name="Save" value="Save" class="btn btn-primary">
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>



<?php
if (isset($_POST['Save'])) {

	$print = $koneksi->real_escape_string(@$_POST['print']);

	$update = $koneksi->query("UPDATE data_karyawan SET print ='$print' WHERE NUPTK = '$NUPTK'");
	if ($update) {
		?>
            <script type="text/javascript">

                alert ("Update Data Berhasil !");
                window.location.href="?page=anggota";

            </script>

		<?php
}
}
?>