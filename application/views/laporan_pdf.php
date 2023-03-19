<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $tittle; ?></title>

  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/dist/css/adminlte.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/plugins/summernote/summernote-bs4.min.css')?>">
</head><body class="hold-transition sidebar-mini layout-fixed">
 
 
 <!-- tabel -->
 <div class="col-md">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
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
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->              
            <!-- /end tabel -->
        </div>
<!-- jQuery -->
<script src="<?php echo base_url('asset/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('asset/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('asset/plugins/plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/plugins/plugins/sparklines/sparkline.js')?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('asset/plugins/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/plugins/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('asset/plugins/plugins/moment/moment.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('asset/plugins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('asset/plugins/plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('asset/plugins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/plugins/dist/js/adminlte.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/plugins/dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/plugins/dist/js/pages/dashboard.js')?>"></script>
</body></html>