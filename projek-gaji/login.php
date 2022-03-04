<?php
session_start();
include "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <title>Selamat Datang</title>
  </head>
  <body>
  <div class="container">
        <div class="row text-center" style="margin-top: 50px;">
            <div class="col-md-12">
              <img src="images/logo.jpeg" alt="" style="background-size: 100%; max-width: 20%;">
              <br><br>
            </div>
        </div>
         <div class="row ">

                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Silahkan Login  </strong>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="pass" class="form-control"  placeholder="Your Password" />
                                        </div>
                                        <div class="form-group">
                                            <!-- <label class="checkbox-inline"> -->
                                                <!-- <input type="checkbox" /> Remember me -->
                                            <!-- </label> -->
                                            <span class="pull-right">
                                                   <a href="forget.php" >Forget password ? </a>
                                            </span>
                                        </div>
                                        <input type="submit" name="login" value="Login" class="btn btn-primary ">
                                        <hr>
                                        <a href="regist.php" >Register </a>
                                      </form>

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

<?php
if (isset($_POST['login'])) {

	$username = $koneksi->real_escape_string(@$_POST['username']);
	$pass = $koneksi->real_escape_string(@$_POST['pass']);
	$query = $koneksi->query("SELECT * FROM anggota WHERE username ='$username' AND password = '$pass'");
	$data = $query->fetch_assoc();
	$ada = $query->num_rows;

	if ($ada === 1) {

		if ($data['level'] == "admin") {
			$_SESSION['admin'] = $data['username'];

			$_SESSION['login'] = true;

			?>
      <script>
        window.location.href="index.php";
      </script>
      <?php
} elseif ($data['level'] == "user") {
			$_SESSION['username'] = $data['username'];
			?>
      <script type="text/javascript">
        alert("Welcome");
        window.location.href="absen.php";
      </script>
        <?php
}
	} elseif ($ada != ['username'] AND $ada != ['pass']) {
		?>
      <script>
        alert("username dan password anda salah")
      </script>
      <?php
}
}
?>



