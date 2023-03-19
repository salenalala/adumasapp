
<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>id Tangapan</th>
                      <th>id pengaduan</th>
                      <th>tanggal Tangapan</th>
                      <th>tangapan</th>
                      <th>id bpetugas</th>
                      <th>nik</th>
                      <th>foto</th>
                      <th>status</th>
                      <!-- <th>Aksi</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pdf as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        <td><?php echo $k->id_tangapan; ?></td>
                        <td><?php echo $k->id_pengaduan; ?></td>
                        <td><?php echo $k->tgl_tangapan; ?></td>
                        <td><?php echo $k->tangapan; ?></td>
                        <td><?php echo $k->id_petugas; ?></td>
                        <td><?php echo $k->nik; ?></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto;?>" style="width: 150px;"></td>
                        <td><?php echo $k->status; ?></td>
                        <!-- <td>
                             <a type="button" class="btn btn-danger" href="<?php echo site_url('crud_pengaduan/delete/'.$k->id_pengaduan); ?>">Delete</a> 
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editmodal<?= $k->id_tangapan?>">
                            verivikasi
                            </button>    
                        </td> -->
                    </tr>
                  <?php $current_no++; endforeach; ?>
                  </tbody>
        </table>
        <script>
 window.print();
 </script>
<!-- <script>
              let pdf = addEventListener() => {
                window.print();
              }
  </script> -->