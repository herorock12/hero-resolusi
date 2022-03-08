<?php

	$id = @$_GET['id'];

	$query = $koneksi->query("SELECT * FROM produk WHERE id = '$id'");

	$data = $query->fetch_assoc();

	$foto = $data['foto'];

	if (file_exists("images/$foto")) {
		unlink("images/$foto");
	}

	$query = $koneksi->query("DELETE FROM produk WHERE id = '$id'");
if ($query) {
?>


<script type="text/javascript">
	window.location.href="?page=busur";
</script>

<?php  
}
?>