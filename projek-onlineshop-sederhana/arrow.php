<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Produk</strong>
                        </div>
                         <a href="?page=panah&aksi=tambah" class="btn btn-success" style="margin-left: 10px; margin-top: 10px;"><strong>Tambah Data</a></strong>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama_barang</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>foto</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>

                                    
                                    <tbody>


                                      <?php 

                                           $no = 1;

                                           $query =$koneksi->query("SELECT * FROM produk p join kategori k on p.id_kategori = k.id_kategori where kategori = 'panah'");

                                           while ($data=$query->fetch_assoc()) {
                                          
                                          
                                          ?>

                                          <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama_produk'];?></td>
                                            <td><?php echo $data['deskripsi'];?></td>
                                            <td><?php echo $data['harga'];?></td>
                                            <td>
                                              <img src="images/<?php echo $data['foto'];?>" width="80 px">
                                            </td>
                                            <td>
                                              <a href="?page=panah&aksi=ubah&id=<?php echo $data['id'];?>" class= "btn btn-info" style="margin-bottom: 10px;"><i class="fa fa-edit "></i> Ubah</a>
                                              <a onclick="return confirm('Apakah ingin menghapus data?')"href="?page=panah&aksi=hapus&id=<?php echo $data['id'];?>" class= "btn btn-danger" style="margin-top: 10px;"><i class="fa fa-pencil"></i> Hapus</a>
                                            </td>
                                          </tr>
                                    <?php }?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

