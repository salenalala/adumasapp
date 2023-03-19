<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
          if($this->session->flashdata('error'))
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}?>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          
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
                      <th>id pengaduan</th>
                      <th>tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>foto</th>
                      <th>status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pengaduan as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        <td><?php echo $k->id_pengaduan; ?></td>
                        <td><?php echo $k->tgl_pengaduan; ?></td>
                        <td><?php echo $k->nik; ?></td>
                        <td><?php echo $k->isi_laporan; ?></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto;?>" style="width: 150px;"></td>
                        <td><?php echo $k->status; ?></td>
                        <td>
                            <!-- <a type="button" class="btn btn-danger" href="<?php echo site_url('crud_pengaduan/delete/'.$k->id_pengaduan); ?>">Delete</a> -->
                            <?php if($k->status == 'menunggu'){ ?>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editmodal<?= $k->id_pengaduan?>">
                            verivikasi
                            </button>  
                            <?php } ?>
                            <?php if($k->status != 'selesai' && $k->status != 'menunggu'){ ?>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tangapan<?= $k->id_pengaduan?>">
                            tangapi
                            </button>    
                            <?php } ?>
                        </td>
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
  <?php foreach($pengaduan as $k): ?>
             <div class="modal fade" id="editmodal<?= $k->id_pengaduan?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Verifikasi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?= base_url('crud_pengaduan/edit'); ?>">
                      <div class="form-group">
                        <input type="hidden" value="<?= $k->id_pengaduan?>" name="id_pengaduan">
                        <label for="exampleFormControlSelect1">Status :</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                          <option value="proses ">proses</option>
                          <option value="di tolak">tolak</option>
                        </select>
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
              <?php $current_no++; endforeach; ?>
  <!-- Modal -->
          <?php foreach($pengaduan as $k): ?>
             <div class="modal fade" id="tangapan<?= $k->id_pengaduan?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tangapi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?= base_url('crud_tangapan/create'); ?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="hidden" value="<?= $k->id_pengaduan?>" name="id_pengaduan">
                        <input type="hidden" value="<?= $this->session->userdata('ses_id');?>" name="id_petugas">
                        <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="inputGroupFile02">
                        
                        <label for="exampleFormControlTextarea1" class="form-label">Tangapan</label>
                        <textarea class="form-control"name="tangapan" id="exampleFormControlTextarea1" rows="3"></textarea>
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
              <?php $current_no++; endforeach; ?>