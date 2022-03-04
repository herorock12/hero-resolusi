<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "gaji";
//koneksi database
$koneksi = new mysqli('localhost', 'root', '', 'gaji');
if (!$koneksi) {
	die("koneksi gagal" . mysqli_connect_error());

}

?>