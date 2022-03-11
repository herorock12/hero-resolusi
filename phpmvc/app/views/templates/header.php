<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman <?php echo $data['judul']; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
	      </li>
	    </ul>
	  </div>
	</div>
</nav>