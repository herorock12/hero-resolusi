<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash();?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
			  Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Mahasiswa" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Datar Mahasiswa</h3>
			<ul class="list-group mt-4">
			<?php foreach ($data['mhs'] as $mhs): ?>
				<li class="list-group-item">
					<?php echo $mhs['nama'] ?>
						<a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">Hapus</a>
						<a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-warning float-right ml-2 tampilModalUbah"data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>
						<a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-primary float-right ml-2">Detail</a>
					</li>
			<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" id="id" name="id">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama">
			 </div>

			 <div class="form-group">
			    <label for="npm">Npm</label>
			    <input type="number" class="form-control" id="npm" name="npm">
			 </div>

			 <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email">
			 </div>

			 <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Teknik Industri">Teknik Industri</option>
			      <option value="Teknik Sipil">Teknik Sipil</option>
			      <option value="Teknik Mesin">Teknik Mesin</option>
			      <option value="Psikolog">Psikolog</option>
			    </select>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
      </div>
    </div>
  </div>
</div>