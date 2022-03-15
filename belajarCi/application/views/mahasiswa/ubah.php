<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Mahasiswa
			  </div>
			  <div class="card-body">
			    <form action="" method="post">
			    	<input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
					  <div class="form-group">
					    <label for="nama">Name</label>
					    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>">
					    <small  class="form-text text-danger"><?php echo form_error('nama'); ?></small>
					  </div>
					  <div class="form-group">
					    <label for="npm">npm</label>
					    <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $mahasiswa['npm']; ?>">
					    <small  class="form-text text-danger"><?php echo form_error('npm'); ?></small>
					  </div>
					  <div class="form-group">
					    <label for="email">email</label>
					    <input type="email" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>">
					    <small  class="form-text text-danger"><?php echo form_error('email'); ?></small>
					  </div>
					  <div class="form-group">
					    <label for="jurusan">jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan">
					    	<?php foreach ($jurusan as $j): ?>
					    		<?php if ($j == $mahasiswa['jurusan']): ?>
					      <option value="<?php echo $j; ?>" selected><?php echo $j; ?></option>
					      <?php else: ?>
					      	<option value="<?php echo $j; ?>"><?php echo $j; ?></option>
					      <?php endif;?>
					  <?php endforeach;?>
					    </select>
					  </div>
					  <button type="submit" class="btn btn-primary float-right" name="tambah">Ubah Data</button>
					  <a href="<?php echo base_url(); ?>mahasiswa" type="button" class="btn btn-warning float-right geser">Kembali</a>
				</form>
			  </div>
			</div>
		</div>
	</div>



</div>