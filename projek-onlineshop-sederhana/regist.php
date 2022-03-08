<?php 

include "config.php";
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Online</title>
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
                        <strong>Form Register</strong>  
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">
<br/>
                                       <div class="form-group input-group">
                                              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                              <input type="text" class="form-control" placeholder="Username" name="username" />
                                          </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Password" name="password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Retype Password" name="password2" />
                                        </div>
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
    $password = $koneksi->real_escape_string(@$_POST['password']);
    $cek = $koneksi->query("SELECT username FROM user WHERE username ='$username'");
    $tampil = mysqli_num_rows($cek);
    if ($tampil >= 1) {
      ?>
      
      <script>
        alert("Username Anda sudah terdaftar, coba lagi")
      </script>
    
      <?php

    }else{

 $register= $koneksi->query("INSERT INTO user (username, password, level) VALUES ('$username', '$password' , 'user')");


    if($register){
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
     if (empty($_POST['username'])){

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