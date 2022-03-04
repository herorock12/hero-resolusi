<?php
$NUPTK = @$_GET['NUPTK'];

$query = $koneksi->query("SELECT * FROM data_karyawan WHERE NUPTK = '$NUPTK'");

$tampil = $query->fetch_assoc();

?>


<div class="panel-heading">
 		<div class="panel-body">
 			<div class="row">
 				<div class="col-md-6">
 					<h1><center>Ubah Data Karyawan</h1></center>
 					<form action="" method="post" enctype="multipart/form-data">
 						<div class="form-group">
 							<label>NUPTK</label>
 							<input class="form-control" name="NUPTK" value="<?php echo $tampil['NUPTK']; ?>" readonly/>
 						</div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>"/>
            </div>
             <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control" name="jabatan"  >
                <option value="KP.RA"   <?php if ($tampil['jabatan'] == 'KP.RA') {
	echo "selected";
}?>>KP.RA</option>
                <option value="GURU/BEND" <?php if ($tampil['jabatan'] == 'GURU/BEND') {
	echo "selected";
}?>>GURU/BEND</option>
                <option value="GURU" <?php if ($tampil['jabatan'] == 'GURU') {
	echo "selected";
}?>>GURU</option>
                <option value="GURU_2" <?php if ($tampil['jabatan'] == 'GURU_2') {
	echo "selected";
}?>>GURU_2</option>
                <option value="GURU_3" <?php if ($tampil['jabatan'] == 'GURU_3') {
	echo "selected";
}?>>GURU_3</option>
                <option value="GURU_4" <?php if ($tampil['jabatan'] == 'GURU_4') {
	echo "selected";
}?>>GURU_4</option>
                <option value="GURU_5" <?php if ($tampil['jabatan'] == 'GURU_5') {
	echo "selected";
}?>>GURU_5</option>
                <option value="GURU/TU" <?php if ($tampil['jabatan'] == 'GURU/TU') {
	echo "selected";
}?>>GURU/TU</option>
                <option value="KEBERSIHAN" <?php if ($tampil['jabatan'] == 'KEBERSIHAN') {
	echo "selected";
}?>>KEBERSIHAN</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tunjangan Jabatan</label>
              <select class="form-control" name="tunjangan_jabatan" required>
                <option value="550000" <?php if ($tampil['tunjangan_jabatan'] == 550000) {
	echo "selected";
}?>>KP.RA</option>
                <option value="450000" <?php if ($tampil['tunjangan_jabatan'] == 450000) {
	echo "selected";
}?>>GURU/BEND</option>
                <option value="200000" <?php if ($tampil['tunjangan_jabatan'] == 200000) {
	echo "selected";
}?>>GURU</option>
                <option value="300000" <?php if ($tampil['tunjangan_jabatan'] == 300000) {
	echo "selected";
}?>>GURU_2</option>
                <option value="270000" <?php if ($tampil['tunjangan_jabatan'] == 270000) {
	echo "selected";
}?>>GURU_3</option>
                <option value="270000" <?php if ($tampil['tunjangan_jabatan'] == 270000) {
	echo "selected";
}?>>GURU_4</option>
                <option value="260000" <?php if ($tampil['tunjangan_jabatan'] == 260000) {
	echo "selected";
}?>>GURU_5</option>
                <option value="250000" <?php if ($tampil['tunjangan_jabatan'] == 250000) {
	echo "selected";
}?>>GURU/TU</option>
                <option value="170000" <?php if ($tampil['tunjangan_jabatan'] == 170000) {
	echo "selected";
}?>>KEBERSIHAN</option>
              </select>
            </div>
            <div class="form-group">
              <label>Kehadiran</label>
              <select class="form-control" name="jumlah_kehadiran"  >
                <option value="1"   <?php if ($tampil['jumlah_kehadiran'] == 1) {
	echo "selected";
}?>>1</option>
                <option value="2"   <?php if ($tampil['jumlah_kehadiran'] == 2) {
	echo "selected";
}?>>2</option>
                <option value="3"   <?php if ($tampil['jumlah_kehadiran'] == 3) {
	echo "selected";
}?>>3</option>
                <option value="4"   <?php if ($tampil['jumlah_kehadiran'] == 4) {
	echo "selected";
}?>>4</option>
                <option value="5"   <?php if ($tampil['jumlah_kehadiran'] == 5) {
	echo "selected";
}?>>5</option>
               <option value="6"   <?php if ($tampil['jumlah_kehadiran'] == 6) {
	echo "selected";
}?>>6</option>
               <option value="7"   <?php if ($tampil['jumlah_kehadiran'] == 7) {
	echo "selected";
}?>>7</option>
               <option value="8"   <?php if ($tampil['jumlah_kehadiran'] == 8) {
	echo "selected";
}?>>8</option>
               <option value="9"   <?php if ($tampil['jumlah_kehadiran'] == 9) {
	echo "selected";
}?>>9</option>
                <option value="10"   <?php if ($tampil['jumlah_kehadiran'] == 10) {
	echo "selected";
}?>>10</option>
                <option value="11"   <?php if ($tampil['jumlah_kehadiran'] == 11) {
	echo "selected";
}?>>11</option>
                <option value="12"   <?php if ($tampil['jumlah_kehadiran'] == 12) {
	echo "selected";
}?>>12</option>
                <option value="13"   <?php if ($tampil['jumlah_kehadiran'] == 13) {
	echo "selected";
}?>>13</option>
                <option value="14"   <?php if ($tampil['jumlah_kehadiran'] == 14) {
	echo "selected";
}?>>14</option>
                <option value="15"   <?php if ($tampil['jumlah_kehadiran'] == 15) {
	echo "selected";
}?>>15</option>
                <option value="16"   <?php if ($tampil['jumlah_kehadiran'] == 16) {
	echo "selected";
}?>>16</option>
                <option value="17"   <?php if ($tampil['jumlah_kehadiran'] == 17) {
	echo "selected";
}?>>17</option>
                <option value="18"   <?php if ($tampil['jumlah_kehadiran'] == 18) {
	echo "selected";
}?>>18</option>
                <option value="19"   <?php if ($tampil['jumlah_kehadiran'] == 19) {
	echo "selected";
}?>>19</option>
                <option value="20"   <?php if ($tampil['jumlah_kehadiran'] == 20) {
	echo "selected";
}?>>20</option>
                <option value="21"   <?php if ($tampil['jumlah_kehadiran'] == 21) {
	echo "selected";
}?>>21</option>
                <option value="22"   <?php if ($tampil['jumlah_kehadiran'] == 22) {
	echo "selected";
}?>>22</option>
                <option value="23"   <?php if ($tampil['jumlah_kehadiran'] == 23) {
	echo "selected";
}?>>23</option>
                <option value="24"   <?php if ($tampil['jumlah_kehadiran'] == 24) {
	echo "selected";
}?>>24</option>
                <option value="25"   <?php if ($tampil['jumlah_kehadiran'] == 25) {
	echo "selected";
}?>>25</option>
              </select>
            </div>
            <div class="form-group">
              <label>Eskul</label>
              <select class="form-control" name="eskul" required>
                <option value="100000" <?php if ($tampil['eskul'] == 100000) {
	echo "selected";
}?>>ya</option>
                <option value="0" <?php if ($tampil['eskul'] == 0) {
	echo "selected";}?>>tidak</option>
              </select>
            </div>
            <div class="form-group">
              <label>Bonus</label>
              <select class="form-control" name="bonus" required>
                <option value="50000"<?php if ($tampil['bonus'] == 50000) {
	echo "selected";
}?>>ya</option>
                <option value="0"<?php if ($tampil['bonus'] == 0) {
	echo "selected";
}?>>tidak</option>
              </select>
            </div>
             <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto" />
              <img src="images/<?php echo $tampil['foto']; ?>" width="80 px">
            </div>
            <div>
              <input type="submit" name="Save" value="Save" class="btn btn-primary">
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
            <p><i>Harap Teliti Saat Mengupdate Data.</i></p>
          </form>
          </div>
      </div>
    </div>
  </div>



<?php
if (isset($_POST['Save'])) {

	$nama = $koneksi->real_escape_string(@$_POST['nama']);
	$jabatan = $koneksi->real_escape_string(@$_POST['jabatan']);
	$tunjangan = $koneksi->real_escape_string(@$_POST['tunjangan_jabatan']);
	$kehadiran = $koneksi->real_escape_string(@$_POST['jumlah_kehadiran']);
	$eskul = $koneksi->real_escape_string(@$_POST['eskul']);
	$bonus = $koneksi->real_escape_string(@$_POST['bonus']);
	$foto = $_FILES['foto']['name'];
	$sumber = $_FILES['foto']['tmp_name'];

	if (file_exists("images/$foto_u")) {
		unlink("images/$foto_u");
	}
	$upload = move_uploaded_file($sumber, "images/" . $foto);
	$update = $koneksi->query("UPDATE data_karyawan SET nama ='$nama', jabatan = '$jabatan', tunjangan_jabatan = '$tunjangan', jumlah_kehadiran = '$kehadiran', eskul = '$eskul', bonus = '$bonus', foto = '" . $foto . "', total_gaji =(12500*$kehadiran+280000+$bonus+$eskul+$tunjangan) WHERE NUPTK = '$NUPTK'");
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