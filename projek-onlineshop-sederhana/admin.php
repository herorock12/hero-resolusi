<?php

session_start();

include "config.php";

if ($_SESSION['admin']) {

	?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand">Dashboard</a>
            </div>
         <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">
            <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>

                    <li>
                      <a href="admin.php">Dashboard</a>
                    </li>
                    <li>
                     <a href="#"><i class="fa fa-sitemap fa-3x"></i> Produk<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">HP<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="?page=panah">SAMSUNG</a>
                                    </li>
                                    <li>
                                        <a href="?page=busur">OPPO</a>
                                    </li>
                                    <li>
                                        <a href="?page=tas">VIVO</a>
                                    </li>

                                </ul>
                            </li>
                    </ul>
                  </div>
                </nav>


                <div id="page-wrapper" >
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                             <?php
$page = @$_GET['page'];
	$aksi = @$_GET['aksi'];
	if ($page == "panah") {
		if ($aksi == "") {
			include 'arrow.php';
		} elseif ($aksi == "tambah") {
			include 'tambaharrow.php';
		} elseif ($aksi == "ubah") {
			include 'ubaharrow.php';
		} elseif ($aksi == "hapus") {
			include 'hapusarrow.php';
		}
	} elseif ($page == "busur") {
		if ($aksi == "") {
			include 'bow.php';
		} elseif ($aksi == "tambah") {
			include 'tambahbow.php';
		} elseif ($aksi == "ubah") {
			include 'ubahbusur.php';
		} elseif ($aksi == "hapus") {
			include 'hapusbusur.php';
		}
	} elseif ($page == "tas") {
		if ($aksi == "") {
			include 'bag.php';
		} elseif ($aksi == "tambah") {
			include 'tambahtas.php';
		} elseif ($aksi == "ubah") {
			include 'ubahtas.php';
		} elseif ($aksi == "hapus") {
			include 'hapustas.php';
		}
	} elseif ($page == "") {
		include 'dashboard.php';
	}
	?>

                            </div>
                        </div>
                        <hr>
                      </div>
                     <!-- /. PAGE INNER  -->
                    </div>
                 <!-- /. PAGE WRAPPER  -->
                </div>
                  <!-- /. WRAPPER  -->
                  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                  <!-- JQUERY SCRIPTS -->
                  <script src="assets/js/jquery-1.10.2.js"></script>
                    <!-- BOOTSTRAP SCRIPTS -->
                  <script src="assets/js/bootstrap.min.js"></script>
                  <!-- METISMENU SCRIPTS -->
                  <script src="assets/js/jquery.metisMenu.js"></script>
                      <!-- DATA TABLE SCRIPTS -->
                  <script src="assets/js/dataTables/jquery.dataTables.js"></script>

                  <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                      <script>
                          $(document).ready(function () {
                              $('#dataTables-example').dataTable();
                          });
                  </script>
                       <!-- CUSTOM SCRIPTS -->
                  <script src="assets/js/custom.js"></script>
                  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
                  <script src="assets/js/morris/morris.js"></script>
                  <!-- METISMENU SCRIPTS -->
                  <script src="assets/js/jquery.metisMenu.js"></script>


                </body>
                </html>

<?php
} else {
	header("location:login.php");
}

?> -->
