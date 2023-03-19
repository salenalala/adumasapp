
              <H1 class="text-center">Laporan Pengaduan Masyarakat</H1>
                <table class="table table-bordered" style="margin-top: 25px;">
                  <thead class="table-dark">
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
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($filter as $k): ?>
               
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
                        
                    </tr>
                  <?php $current_no++; endforeach; ?>
                  </tbody>
                </table>
             

            <script>
 window.print();
 </script>