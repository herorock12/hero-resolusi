<?php 
session_start();
  include 'config.php';
  // panggil produk
  $id = $_GET['id'];
  $query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori WHERE id ='$id'");
  $tampil = $query->fetch_assoc();

?>
<?php 
include 'config.php';
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
      <form class="form-inline my-2 my-lg-0" action="search.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
  <ul class="navbar-nav mr-auto">
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
  
  
  <br>
  <br>
  <br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
              <img src="images/<?php echo $tampil['foto'];?>" width='300px'>
          </div>
       <div class="col">
               <h5><?php echo $tampil ['nama_produk'];?></h5>
               <p><br><?php echo $tampil['deskripsi'];?></p>      

<br>
<br>
<br><br><br><br><br><br>
            <?php
            if(isset($_SESSION['user'])){ 
              ?>
            <h6>Rp. <?php echo number_format($tampil['harga']);?></h6> <br>
          <?php } ?>
            <a href="kontak.php" class="btn btn-primary">Beli Produk</a>
          </div>
       </div>
      </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>