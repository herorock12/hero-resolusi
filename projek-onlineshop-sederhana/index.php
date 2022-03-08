<?php
include 'config.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Website Penjualan Online</title>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
	  <a class="navbar-brand" href="#">ONLINE SHOP</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
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
if (isset($_SESSION['user'])) {
	?>
                      <div class="btn-group">
					  <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
					  </button>
					  <div class="dropdown-menu dropdown-menu-lg-right">
				    	<a href="logout.php" class="dropdown-item">logout</a>
					  </div>
					</div>

                      <?php
} else {
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


	<!-- konten -->
	<div class="jumbotron jumbotron-fluid">
	  <div class="container text-center">
	    <h1 class="display-3">Selamat Datang</h1>
	    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	  </div>
	</div>

	<div class="container">
		<div class="card-group">
		  <div class="card">
		    <div class="card-body">
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		      <div class="card-body">
		      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-body">
		      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>
		</div>
	</div>


	<!-- produk -->
	<br>

	<div class="container">
		<div class="d-grid gap-2 col-2 mx-auto">
  <button class="btn btn-outline-info" type="text"><h1>PRODUK</h1></button>
</div>
		<h4>Anak Panah</h4><br><br>
		<div class="row">
				<?php
$query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori where kategori = 'panah'");
while ($panah = $query->fetch_assoc()) {
	?>
			<div class="col-4">
				<div class="card" style="width: 18rem;">
					<img src="images/<?php echo $panah['foto']; ?>" class="card-img-top" alt="...">
				  <div class="card-body">
						<h5 class="card-title"><?php echo $panah['nama_produk']; ?></h5>
							<p class="card-text"><?php echo $panah['deskripsi']; ?></p>
							<?php
if (isset($_SESSION['user'])) {
		?>
							<h6>Rp. <?php echo number_format($panah['harga']); ?></h6> <br>
						<?php }?>
							<a href="detailarrow.php?id=<?php echo $panah['id']; ?>" class="btn btn-primary">Detail</a>
				  </div>
				</div>
			</div>
		<?php }?>
		</div>
		<br>
		<h4>Busur</h4><br>
		<div class="row">
			<?php

$query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori where kategori = 'busur'");
while ($busur = $query->fetch_assoc()) {

	?>
			<div class="col-lg-4">
				<div class="card" style="width: 18rem;">
					<img src="images/<?php echo $busur['foto']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
							<h5 class="card-title"><?php echo $busur['nama_produk']; ?></h5>
								<p class="card-text"><?php echo $busur['deskripsi']; ?></p>
								<?php
if (isset($_SESSION['user'])) {
		?>
								<h6>Rp. <?php echo number_format($busur['harga']); ?></h6> <br>
							<?php }?>
								<a href="detailarrow.php?id=<?php echo $busur['id']; ?>" class="btn btn-primary">Detail</a>
					  </div>
				</div>
			</div>
			<?php }?>
		</div>

		<br><h4>Tas Alat Anak Panah</h4><br>
		<div class="row">
			<?php

$query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori where kategori = 'tas'");
while ($tas = $query->fetch_assoc()) {

	?>
			<div class="col-lg-4">
				<div class="card" style="width: 18rem;">
					<img src="images/<?php echo $tas['foto']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
							<h5 class="card-title"><?php echo $tas['nama_produk']; ?></h5>
								<p class="card-text"><?php echo $tas['deskripsi']; ?></p>
								<?php
if (isset($_SESSION['user'])) {
		?>
								<h6>Rp. <?php echo number_format($tas['harga']); ?></h6> <br>
							<?php }?>
								<a href="detailarrow.php?id=<?php echo $tas['id']; ?>" class="btn btn-primary">Detail</a>
					  </div>
				</div>
			</div>
			<?php }?>
		</div>


		<br><h4>Aksesoris</h4><br>
		<div class="row">
			<?php

$query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori where kategori = 'acc'");
while ($acc = $query->fetch_assoc()) {

	?>
			<div class="col-lg-4">
				<div class="card" style="width: 18rem;">
					<img src="images/<?php echo $acc['foto']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
							<h5 class="card-title"><?php echo $acc['nama_produk']; ?></h5>
								<p class="card-text"><?php echo $acc['deskripsi']; ?></p>
								<?php
if (isset($_SESSION['user'])) {
		?>
								<h6>Rp. <?php echo number_format($acc['harga']); ?></h6> <br>
							<?php }?>
								<a href="detailarrow.php?id=<?php echo $acc['id']; ?>" class="btn btn-primary">Detail</a>
					  </div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</body>
<footer class="bg-dark text-white text-center">
	CopyRight 2019
</footer>
</html>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>