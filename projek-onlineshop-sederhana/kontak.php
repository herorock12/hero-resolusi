<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Website</title>
</head>
<body>
	<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
	  <a class="navbar-brand" href="#">Logo</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="kontak.php">Kontak</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Produk
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			    <a class="dropdown-item" href="anakpanah.php">Anak Panah</a>
			    <a class="dropdown-item" href="busur.php">Busur</a>
			    <a class="dropdown-item" href="tas.php">Tas Alat Panah</a>
			    <a class="dropdown-item" href="acc.php">Aksesoris</a>
	        </div>
	      </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
	      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" name="Search">
	    </form>
	  </div>
	</div>
	<ul class="navbar-nav mr-auto">
	      <?php
                    if(isset($_SESSION['user'])){ 
                      ?>
                      <div class="btn-group">
					  <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
					  </button>
					  <div class="dropdown-menu dropdown-menu-lg-right">
				    	<a href="logout.php" class="dropdown-item">logout</a>
					  </div>
					</div>

                      <?php 
                  }else{
                    ?>
                    <div class="btn-group">
                    	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">Login</button>
					  <div class="dropdown-menu dropdown-menu-lg-right">
					    <a class="dropdown-item" href="login.php">login</a>
					    <a class="dropdown-item" href="regist.php">register</a>
			        </div>
                  <?php
                    }
                    ?>
	  </ul>
	</nav>

<br><br><br><br>

	<!-- konten -->



<div class="container">
	<div class="row">
		<div class="col text-center">
			<h3>Developed by</h3>
			<br>
			<img src="1.jpg" alt="" class="rounded-circle" width="200">
		</div>
	</div>
	<br>
	<div class="col text-center">
		<h3>Email :</h3>
		<h3>WhatsApp :</h3>
		<a href="https://api.whatsapp.com/send?phone=6287777285589&text=Halo Saya ingin memesan" target="_blank" class="btn btn-success">Kirim Pesan</a>
	</div>
</div>
	


</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>