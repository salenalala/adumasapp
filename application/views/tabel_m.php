<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
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
              <!-- Button trigger modal -->
              <button style="margin-bottom: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                +tambah data
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?= base_url('crud_petugas/tambah'); ?>">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Petugas :</label>
                        <input type="text" name="id_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan id">                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama :</label>
                        <input type="text" name="nama_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">                       
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username :</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username">                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan password">                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No telp :</label>
                        <input type="text" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no telpon">                        
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">level :</label>
                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                          <option value="1">admin</option>
                          
                          <option value="2">petugas</option>
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
            <!-- /end modal -->
            <div class="table-responsive" >
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>id petugas</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>No Telpon</th>
                      <th>level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($petugas as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        <td><?php echo $k->id_petugas; ?></td>
                        <td><?php echo $k->nama_petugas; ?></td>
                        <td><?php echo $k->username; ?></td>
                        <td><?php echo $k->password; ?></td>
                        <td><?php echo $k->telpon; ?></td>
                        <td><?php echo $k->level; ?></td>
                        <td>
                         
                            
                            
                            <?php if($k->level == '1') :?>
                               
                            <?php else :?>
                              <a type="button" class="btn btn-danger" href="<?php echo site_url('crud_petugas/delete/'.$k->id_petugas); ?>">Delete</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editmodal<?= $k->id_petugas?>">
                            edit
                            </button>    
                            <?php endif ?>
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
  <?php foreach($petugas as $k): ?>
             <div class="modal fade" id="editmodal<?= $k->id_petugas?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="<?= base_url('crud_petugas/edit'); ?>">
                      <div class="form-group">
                        <label for="exampleInputEmail1">id petugas :</label>
                        <input type="text" value="<?= $k->id_petugas  ?>" name="id_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nis">                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama :</label>
                        <input type="text" value="<?= $k->nama_petugas  ?>" name="nama_petugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">                       
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username :</label>
                        <input type="text" value="<?= $k->username  ?>" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no telpon">                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password :</label>
                        <input type="password" value="<?= $k->password ?>" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kelas">                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No telp :</label>
                        <input type="text" value="<?= $k->telpon  ?>" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no telpon">                        
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Level :</label>
                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                          <option value="1">admin</option>
                          <option value="2">petugas</option>
                          
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