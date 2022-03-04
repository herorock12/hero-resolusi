<?php

$id = @$_GET['NUPTK'];

$query = $koneksi->query("SELECT * FROM data_karyawan WHERE NUPTK = '$id'");

$data = $query->fetch_assoc();
$foto = $data['foto'];

if (file_exists("images/$foto")) {
	unlink("images/$foto");
}

$query = $koneksi->query("DELETE FROM data_karyawan WHERE NUPTK = '$id'");
if ($query) {
	?>


<script type="text/javascript">
	window.location.href="?page=anggota";
</script>

<?php
}
?>