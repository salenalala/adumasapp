<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php 
				if($this->session->flashdata('success')){
          echo '<div class="alert alert-success" role="alert">';
					echo $this->session->flashdata('success');
					echo '</div>';
        }
				?>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php if($this->session->userdata('akses')=='1'):?>
    <button style="margin-left: 15px; margin-bottom: 15px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="fa-solid fa-print"></i> Print
    </button>
    <!-- <button style="margin-left: 15px; margin-bottom: 15px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    <i class="fa-solid fa-print"></i> Excel
    </button> -->
     <!-- <a type="button" style="margin-left: 15px; margin-bottom: 15px;" id="pdf" class="btn btn-danger" href="<?= base_url('crud_tangapan/tes'); ?>">Export Pdf</a> -->
     <?php endif;?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Button trigger modal -->
          
            <!-- tabel -->
            <div class="col-md">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="table-responsive" >
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
                      <th>after foto</th>
                      <th>status</th>
                      <!-- <th>Aksi</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($tangapan as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        <td><?php echo $k->id_tangapan; ?></td>
                        <td><?php echo $k->id_pengaduan; ?></td>
                        <td><?php echo $k->tgl_tangapan; ?></td>
                        <td><?php echo $k->tangapan; ?></td>
                       
                        <td><?php echo $k->id_petugas; ?></td>
                        <td><?php echo $k->nik; ?></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto;?>" style="width: 150px;"></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto_tangapan;?>" style="width: 150px;"></td>
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
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->              
            <!-- /end tabel -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">filter data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    
                    <form action="<?php echo site_url('crud_tangapan/getDataByDate'); ?>" method="post">
                    <div class="form-group">
                        <label for="start_date">dari tanggal:</label>
                        <input type="date" class="form-control" name="tgl_awal" id="start_date">
                        <label for="end_date">sampai tanggal</label>
                        <input type="date" class="form-control" name="tgl_akhir" id="end_date"> 
                    </div> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            <!-- /end modal -->

            <script>
              let pdf = addEventListener() => {
                window.print();
              }
              </script>