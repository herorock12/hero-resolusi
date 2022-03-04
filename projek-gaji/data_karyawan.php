<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Karyawan</strong>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NUPTK</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                      <?php

$query = $koneksi->query("SELECT * FROM anggota");
while ($data = $query->fetch_assoc()) {
	?>

                                          <tr>
                                            <td><?php echo $data['NUPTK']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['jk']; ?></td>
                                          </tr>
                                        <?php }?>
                                    </thead>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>