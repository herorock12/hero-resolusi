<?php
include "config.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Regist</title>
	   <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
   </style>

</head>
<body class="body">
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                 <br />
            </div>
        </div>
         <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Form Register</strong>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="NUPTK" name="NUPTK" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama"  />
                                        </div>
                                       <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                              <input type="text" class="form-control" placeholder="Username" name="username"  />
                                          </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Password" name="password"  />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Retype Password" name="password2" require />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Email" name="email"  />
                                        </div>
                                        <div class="form-group">
                                          <label>Jenis Kelamin</label>
                                          <select class="form-control" name="jk" >
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                          </select>
                                        </div>
                                        <strong><p>Harap isi dengan BENAR</p></strong>
<br/>
<br/>
                                     <input type="submit" name="Save" value="Register" class="btn btn-success">
                                     <input type="submit" class="btn btn-primary" value="Back" name="Back" />
                                    <hr />

                                    </form>
                            </div>

                        </div>
                    </div>


        </div>
    </div>
  </body>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</html>
<?php
if (isset($_POST['Save'])) {
	$username = $koneksi->real_escape_string(@$_POST['username']);
	$password = $koneksi->real_escape_string(@$_POST['password']);
	$nama = $koneksi->real_escape_string(@$_POST['nama']);
	$jk = $koneksi->real_escape_string(@$_POST['jk']);
	$email = $koneksi->real_escape_string(@$_POST['email']);
	$nuptk = $koneksi->real_escape_string(@$_POST['NUPTK']);

	$cek = $koneksi->query("SELECT username FROM anggota WHERE username ='$username'");
	$tampil = mysqli_num_rows($cek);
	if ($tampil >= 1) {
		?>

      <script>
        alert("Username / Email Anda sudah terdaftar, coba lagi")
      </script>

      <?php

	} else {

		$register = $koneksi->query("INSERT INTO anggota (NUPTK, username, password, nama, email, jk, level) VALUES ('$nuptk', '$username', '$password' ,'$nama','$email', '$jk', 'user')");

		if ($register) {
			?>
            <script type="text/javascript">

                alert ("Register Berhasil !");
                window.location.href="login.php";

            </script>
        <?php
}
	}
}
?>
    <?php
if (empty($_POST['username'])) {

}
?>
    <?php
if (isset($_POST['Back'])) {
	?>
              <script>
              window.location.href="login.php";
              </script>
              <?php
}

?>