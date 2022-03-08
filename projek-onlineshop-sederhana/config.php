<?php
$server="localhost";
$user="root";
$password="";
$database="data";
//koneksi database
$koneksi = new mysqli('localhost','root','','data');
if (!$koneksi){
	die("koneksi gagal".mysqli_connect_error());

}

?>