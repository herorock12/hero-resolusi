<?php
// $mahasiswa = [
// 	[
// 		"nama" => "hero ramadhan",
// 		"npm" => "3123141",
// 		"email" => "heroramadha@gmail.com",
// 	],
// 	[
// 		"nama" => "hero ",
// 		"npm" => "332441",
// 		"email" => "hermamadha@gmail.com",
// 	],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=data', 'root', '');

$db = $dbh->prepare('SELECT * from kategori');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>