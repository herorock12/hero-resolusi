<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Karyawan</strong>
                        </div>
                         <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-left: 10px; margin-top: 10px;"><strong>Tambah Karyawan</a></strong>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NUPTK</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Total Gaji</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Gaji Bulan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php

$query = $koneksi->query("SELECT * FROM data_karyawan");
while ($data = $query->fetch_assoc()) {
	?>

                                          <tr>
                                            <td><?php echo $data['NUPTK']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['jabatan']; ?></td>
                                            <td>Rp. <?php echo number_format($data['total_gaji']); ?></td>
                                            <td>
                                              <img src="images/<?php echo $data['foto']; ?>" width="80 px">
                                            </td>
                                            <td><?php echo date('M', strtotime($data['bulan'])); ?></td>
                                            <td>
                                              <a href="?page=anggota&aksi=ubah&NUPTK=<?php echo $data['NUPTK']; ?>" class= "btn btn-info" style="margin-bottom: 10px;"><i class="fa fa-edit "></i> Edit</a>
                                              <a onclick="return confirm('Apakah ingin menghapus data?')" href="?page=anggota&aksi=hapus&NUPTK=<?php echo $data['NUPTK']; ?>" class= "btn btn-danger" style="margin-bottom: 10px;"><i class="fa fa-pencil"></i> Delete</a>
                                              <a href="?page=anggota&aksi=sudah&NUPTK=<?php echo $data['NUPTK']; ?>" class= "btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-check "></i> Update</a>
                                            </td>
                                          </tr>
                                        <?php }?>
                                    </thead>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                            <a style="margin-top: 5px;" href="print.php" refresh="_blank" class="btn btn-default pull-left"><span class='glyphicon glyphicon-print'></span>  Cetak Data Karyawan</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>