<div class="panel-heading">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <h1><center>Tambah Data</h1></center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>NUPTK</label>
              <input class="form-control" name="NUPTK" required />
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input class="form-control" name="nama" />
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control" name="jabatan" required>
                <option value="KP.RA">KP.RA</option>
                <option value="GURU/BEND">GURU/BEND</option>
                <option value="GURU">GURU</option>
                <option value="GURU_2">GURU_2</option>
                <option value="GURU_3">GURU_3</option>
                <option value="GURU_4">GURU_4</option>
                <option value="GURU_5">GURU_5</option>
                <option value="GURU/TU">GURU/TU</option>
                <option value="KEBERSIHAN">KEBERSIHAN</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tunjangan Jabatan</label>
              <select class="form-control" name="tunjangan_jabatan" required>
                <option value="550000">KP.RA</option>
                <option value="450000">GURU/BEND</option>
                <option value="200000">GURU</option>
                <option value="300000">GURU_2</option>
                <option value="270000">GURU_3</option>
                <option value="270000">GURU_4</option>
                <option value="260000">GURU_5</option>
                <option value="250000">GURU/TU</option>
                <option value="170000">KEBERSIHAN</option>
              </select>
            </div>
            <div class="form-group">
              <label>Kehadiran</label>
              <select class="form-control" name="jumlah_kehadiran" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
              </select>
            </div>
            <div class="form-group">
              <label>Eskul</label>
              <select class="form-control" name="eskul" required>
                <option value="100000">ya</option>
                <option value="0">tidak</option>
              </select>
            </div>
            <div class="form-group">
              <label>Bonus</label>
              <select class="form-control" name="bonus" required>
                <option value="50000">ya</option>
                <option value="0">tidak</option>
              </select>
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto" required/>
            </div>
            <div class="form-group">
              <label>Gaji Bulan</label>
              <input type="date" class="form-control" name="bulan">
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
	$nuptk = $koneksi->real_escape_string(@$_POST['NUPTK']);
	$nama = $koneksi->real_escape_string(@$_POST['nama']);
	$jabatan = $koneksi->real_escape_string(@$_POST['jabatan']);
	$tunjangan = $koneksi->real_escape_string(@$_POST['tunjangan_jabatan']);
	$kehadiran = $koneksi->real_escape_string(@$_POST['jumlah_kehadiran']);
	$eskul = $koneksi->real_escape_string(@$_POST['eskul']);
	$bonus = $koneksi->real_escape_string(@$_POST['bonus']);
	$gaji = $koneksi->real_escape_string(@$_POST['bulan']);

	// upload foto
	$foto = $_FILES['foto']['name'];
	$sumber = $_FILES['foto']['tmp_name'];
	move_uploaded_file($sumber, "images/" . $foto);

	$tambah = $koneksi->query("INSERT INTO data_karyawan (NUPTK, nama, jabatan, tunjangan_jabatan ,jumlah_kehadiran, fee_kehadiran, gaji_pokok, eskul, bonus, foto, total_gaji, bulan) VALUES ('$nuptk', '$nama', '$jabatan', '$tunjangan' ,'$kehadiran', 12500, 280000, '$eskul', '$bonus', '" . $foto . "', (12500*$kehadiran+280000+$bonus+$eskul+$tunjangan), '$gaji')");
	// tambah data
	if ($tambah) {
		?>
    <script type="text/javascript">

                alert ("Data Berhasil Disimpan !");
                window.location.href="?page=anggota";

            </script>
    <?php

	}
}

?>