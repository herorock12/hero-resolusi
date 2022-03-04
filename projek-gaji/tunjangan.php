<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Tunjangan Jabatan</strong>
                        </div>
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Jabatan</th>
                                            <th>Tunjangan Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Kehadiran</th>
                                            <th>Eskul</th>
                                            <th>Bonus</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                      <?php
$query = $koneksi->query("SELECT * FROM kategori");
while ($data = $query->fetch_assoc()) {
	?>

                                          <tr>
                                            <td><?php echo $data['jabatan']; ?></td>
                                            <td>Rp. <?php echo number_format($data['tunjangan_jabatan']); ?></td>
                                            <td>Rp. <?php echo number_format($data['gaji_pokok']); ?></td>
                                            <td>Rp. <?php echo number_format($data['kehadiran']); ?></td>
                                            <td>Rp. <?php echo number_format($data['eskul']); ?></td>
                                            <td>Rp. <?php echo number_format($data['bonus']); ?></td>
                                          </tr>
                                        <?php }?>
                                    </thead>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>


