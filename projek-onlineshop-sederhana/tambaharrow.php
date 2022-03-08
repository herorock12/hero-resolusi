<div class="panel-heading">
 		<div class="panel-body">
 			<div class="row">
 				<div class="col-md-6">
 					<h1><center>Tambah Data</h1></center>
 					<form action="" method="post" enctype="multipart/form-data">
 						<div class="form-group">
 							<label>Nama Barang</label>
 							<input class="form-control" name="nama_produk" />
 						</div>
            <div class="form-group">
              <label>Harga</label>
              <input type="number" class="form-control" name="harga" />
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsi" ></textarea>
             </div>
             <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="id_kategori" required>
                <option value="1">Busur</option>
                <option value="2">Panah</option>
                <option value="3">Aksesoris</option>
                <option value="4">Tas</option>
              </select>
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="foto"/>
            </div>
            <div>
                    <input type="submit" name="Save" value="Save" class="btn btn-primary">
                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                  </div>
                </form>
                </div>
            </div>
          </div>
        </div>



<?php
if (isset($_POST['Save'])) {

    $nama = $koneksi->real_escape_string(@$_POST['nama_produk']);
    $harga = $koneksi->real_escape_string(@$_POST['harga']);
    $deskripsi = $koneksi->real_escape_string(@$_POST['deskripsi']);
    $id_kategori = $koneksi->real_escape_string(@$_POST['id_kategori']);


    //upload foto//
    $foto = $_FILES['foto']['name'];
    $sumber = $_FILES['foto']['tmp_name'];
    move_uploaded_file($sumber, "images/".$foto);
    $tambah= $koneksi->query("INSERT INTO produk (nama_produk, deskripsi, harga, id_kategori, foto) VALUES ('$nama', '$deskripsi', '$harga', '$id_kategori', '".$foto."')");
    //produk
    if($tambah){
        ?>
          <script type="text/javascript">
                
                alert ("Data Berhasil Disimpan !");
                window.location.href="?page=panah";

            </script> 

		<?php
	}
}

	?>       