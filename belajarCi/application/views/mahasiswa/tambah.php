<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			    <form action="" method="post">
				  <div class="form-group">
				    <label for="nama">Name</label>
				    <input type="text" class="form-control" id="nama" name="nama">
				    <small  class="form-text text-danger"><?php echo form_error('nama'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="npm">npm</label>
				    <input type="text" class="form-control" id="npm" name="npm">
				    <small  class="form-text text-danger"><?php echo form_error('npm'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="email">email</label>
				    <input type="email" class="form-control" id="email" name="email">
				    <small  class="form-text text-danger"><?php echo form_error('email'); ?></small>
				  </div>
				  <div class="form-group">
				    <label for="jurusan">jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Teknik Informatika">Teknik Informatika</option>
				      <option value="Teknik Industri">Teknik Industri</option>
				      <option value="Teknik Sipil">Teknik Sipil</option>
				      <option value="Teknik Mesin">Teknik Mesin</option>
				      <option value="Psikolog">Psikolog</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
				  <a href="<?php echo base_url(); ?>mahasiswa" type="button" class="btn btn-warning float-right geser">Kembali</a>
				</form>
			  </div>
			</div>
		</div>
	</div>



</div>