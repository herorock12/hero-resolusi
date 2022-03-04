

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupa Password</title>
	   <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
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
                        <strong>Form Lupa Password</strong>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">
<br/>

                                       <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                              <input type="text" class="form-control" placeholder="Username" name="username" />
                                          </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Email" name="email" />
                                        </div>
<br/>
<br/>
                                     <input type="submit" name="Save" value="Confirm" class="btn btn-success">
                                     <input type="submit" name="back" value="back" class="btn btn-primary ">
                                    <hr />

                                    </form>
                            </div>

                        </div>
                    </div>


        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php
if (isset($_POST['Save'])) {
	$username = $koneksi->real_escape_string(@$_POST['username']);
	$email = $koneksi->real_escape_string(@$_POST['email']);

	$cek = $koneksi->query("SELECT * FROM anggota WHERE username = '$username'");
	$tampil = mysqli_num_rows($cek);
	if ($tampil === 0) {
		?>
    <script>
      alert("username/email anda tidak sama");
    </script>
    <?php
} else {

		$forget = $koneksi->query("INSERT INTO forget (username, email) VALUES ('$username', '$email')");

		if ($forget) {
			?>
            <script type="text/javascript">

                alert ("konfirmasi berhasil silahkan tunggu");
                window.location.href="login.php";

            </script>

     <?php
}
	}
}
?>

 <?php
if (isset($_POST['back'])) {

	header("location:login.php");
}

?>