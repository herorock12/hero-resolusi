<?php 
  $id = @$_GET['id'];

  $query = $koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori WHERE id = '$id'");

  $tampil = $query->fetch_assoc();

  $kategori = $tampil['kategori'];

  $foto_u = $tampil['foto'];

  

?>


<div class="panel-heading">
 		<div class="panel-body">
 			<div class="row">
 				<div class="col-md-6">
 					<h1><center>Ubah Data</h1></center>
 					<form action="" method="post" enctype="multipart/form-data">
 						<div class="form-group">
 							<label>Nama Produk</label>
 							<input class="form-control" name="nama_produk" value="<?php echo $tampil['nama_produk'];?>" />
 						</div>
            <div class="form-group">
              <label>Harga</label>
              <input type="number" class="form-control" name="harga" value="<?php echo $tampil['harga'];?>"/>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsi"><?php echo $tampil['deskripsi'];?></textarea>
             </div>
             <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="id_kategori"  >
                <option value="1"   <?php  if ($tampil['id_kategori']=='1') {
                  echo "selected";
                }?>>Busur</option>
                <option value="2" <?php  if ($tampil['id_kategori']=='2') {
                  echo "selected";
                }?>>Panah</option>
                <option value="3" <?php  if ($tampil['id_kategori']=='3') {
                  echo "selected";
                }?>>Aksesoris</option>
                <option value="4" <?php  if ($tampil['id_kategori']=='4') {
                  echo "selected";
                }?>>Tas</option>
              </select>
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto" />
              <img src="images/<?php echo $tampil['foto'];?>" width="80 px">
            </div>
            <div>
              <input type="submit" name="Save" value="Save" class="btn btn-primary">
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
            <p><i>Harap mengisi foto produk kembali saat melakukan edit data</i></p>
          </form>
          </div>
      </div>
    </div>
  </div>



<?php
if (isset($_POST['Save'])) {

    $nama_produk = $koneksi->real_escape_string(@$_POST['nama_produk']);    
    $harga = $koneksi->real_escape_string(@$_POST['harga']);
    $id_kategori = $koneksi->real_escape_string(@$_POST['id_kategori']);
    $deskripsi = $koneksi->real_escape_string(@$_POST['deskripsi']);


    //upload foto//
    $foto = $_FILES['foto']['name'];
    $sumber = $_FILES['foto']['tmp_name'];

    if (file_exists("images/$foto_u")) {
        unlink("images/$foto_u");
      }
      $upload = move_uploaded_file($sumber, "images/".$foto);
    
    $tambah= $koneksi->query("UPDATE produk SET nama_produk ='$nama_produk', harga = '$harga', deskripsi = '$deskripsi', id_kategori = '$id_kategori',foto = '".$foto."' WHERE id = '$id'");
    if($tambah){
        ?>
            <script type="text/javascript">
                
                alert ("Update Data Berhasil !");
                window.location.href="?page=tas";

            </script>

		<?php
	}
}
	?>       