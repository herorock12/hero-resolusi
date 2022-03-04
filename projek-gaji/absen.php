<?php session_start();
include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data karyawan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">DASHBOARD</a>
            <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="absen.php">DATA KARYAWAN</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link btn btn-danger" href="logout.php">LOG OUT</a>
                </form>
              </div>
            </div>
    </nav>
    <?php
$username = $_SESSION['username'];
$query = "SELECT * FROM anggota a JOIN  data_karyawan d ON a.NUPTK = d.NUPTK  WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
?>
    <?php
if (mysqli_num_rows($result) >= 1) {
	$data_user = mysqli_fetch_array($result);
	$_SESSION["NUPTK"] = $data_user["NUPTK"];
	$_SESSION["nama"] = $data_user["nama"];
	$_SESSION["jabatan"] = $data_user["jabatan"];
	$_SESSION["total_gaji"] = $data_user["total_gaji"];
	$_SESSION["foto"] = $data_user["foto"];
	$_SESSION["print"] = $data_user["print"];
}
?>
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header"><strong>DATA KARYAWAN</strong></div>
                  <div class="card-body text-secondary">
                    <img src="images/<?php echo $_SESSION['foto']; ?>" width="80 px">
                    <h5 class="card-title">NUPTK : <?php echo $_SESSION['NUPTK']; ?></h5>
                    <p class="card-title">Nama Karyawan : <?php echo $_SESSION['nama']; ?></p>
                    <p class="card-title">Jabatan : <?php echo $_SESSION['jabatan']; ?></p>
                    <p class="card-title">Gaji : Rp. <?php echo number_format($_SESSION['total_gaji']); ?></p>
                <?php
if ($_SESSION['print'] == "YA") {
	?>
                    <strong><p style="padding-left: 10px;">PEGAWAI SUDAH PRINT GAJI</p></strong>
                <?php } else {?>
                    <a style="margin-top: 5px;" href="cetak_karyawan.php" target="_blank" class="btn btn-primary">  Cetak Data Karyawan</a>
                <?php }?>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>



