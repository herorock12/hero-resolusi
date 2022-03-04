<?php session_start();?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Data Karyawan</title>
  </style>
</head>
<body>
  <?php
// Load file koneksi.php
include "config.php";
$username = $_SESSION['username'];
$query = "SELECT * FROM anggota a JOIN  data_karyawan d ON a.NUPTK = d.NUPTK  WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
?>

    <?php
if (mysqli_num_rows($result) > 0) {
	$data_user = mysqli_fetch_array($result);
	$_SESSION["NUPTK"] = $data_user["NUPTK"];
	$_SESSION["nama"] = $data_user["nama"];
	$_SESSION["jabatan"] = $data_user["jabatan"];
	$_SESSION["tunjangan_jabatan"] = $data_user["tunjangan_jabatan"];
	$_SESSION["gaji_pokok"] = $data_user["gaji_pokok"];
	$_SESSION["bonus"] = $data_user["bonus"];
	$_SESSION["eskul"] = $data_user["eskul"];
	$_SESSION["jumlah_kehadiran"] = $data_user["jumlah_kehadiran"];
	$_SESSION["total_gaji"] = $data_user["total_gaji"];
	$_SESSION["print"] = $data_user["print"];
	$_SESSION["bulan"] = $data_user["bulan"];
}
?>
  <?php
$tgl = date('M-Y', strtotime($_SESSION['bulan'])); // Ubah format tanggal jadi dd-mm-yyyy
?>
</div>
<div class="card">
  <div class="card-header">
      <h5 class="card-title text-center">Data Karyawan</h5>
  </div>
  <div class="card-body">
    <img src="images/<?php echo $_SESSION['foto']; ?>" width="80 px">
    <img src="images/logo.jpeg" alt="" class="rounded float-right" style="background-size: 100%; max-width: 10%;">
    <p class="card-text">NUPTK : <?php echo $_SESSION['NUPTK']; ?></p>
    <p class="card-text">Nama Karyawan : <?php echo $_SESSION['nama']; ?></p>
    <p class="card-text">Jabatan : <?php echo $_SESSION['jabatan']; ?></p>
    <p class="card-text">Tunjangan : Rp. <?php echo number_format($_SESSION['tunjangan_jabatan']); ?></p>
    <p class="card-text">Gaji Pokok : Rp. <?php echo number_format($_SESSION['gaji_pokok']); ?></p>
    <p class="card-text">Bonus : Rp. <?php echo number_format($_SESSION['bonus']); ?></p>
    <p class="card-text">Eskul : Rp. <?php echo number_format($_SESSION['eskul']); ?></p>
    <p class="card-text">Kehadiran : <?php echo $_SESSION['jumlah_kehadiran']; ?> Hari</p>
    <p class="card-text">Gaji : Rp. <?php echo number_format($_SESSION['total_gaji']); ?></p>
    <p class="card-text">Bulan : <?php echo $tgl; ?></p>
  </div>
</div>
</body>
</html>
<script>
	window.print();
</script>