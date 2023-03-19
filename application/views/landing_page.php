<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adumas | Aplikasi Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Favicons -->
  <!-- <link href="<?php echo base_url('/assets/img/favicon.png')?>" rel="icon"> -->
  <!-- <link href="<?php echo base_url('/assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets/vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/aos/aos.css" rel="stylesheet')?>">
  <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

  <!-- =======================================================
  * Template Name: Selecao - v4.10.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .tablescrol {
      height: 700px; /* atur tinggi section */
      overflow-y: auto; /* tambahkan scroll jika tabel melebihi tinggi section */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">ADUMAS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">layanan</a></li>
          <li><a class="nav-link scrollto" href="#faq">Faq</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle scrollto" href="#"   id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaduan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #7ebae2;">
          <?php if($this->session->userdata('akses')=='3'):?>
          <li><a class="nav-link scrollto" href="#pengaduan">Form pengaduan</a></li>
          <li><hr class="dropdown-divider" style="background-color: white;"></li>
          <li><a class="nav-link scrollto" href="#tabel-pengaduan">tabel pengaduan</a></li>
          <li><hr class="dropdown-divider" style="background-color: white;"></li>
          <li><a class="nav-link scrollto" href="#tabel">tabel tangapan</a></li>
          <?php else :?>
            <li><a class="nav-link scrollto"  onclick="contoh()">Form pengaduan</a></li>
            <li><hr class="dropdown-divider" style="background-color: white;"></li>
            <li><a class="nav-link scrollto"  onclick="contoh()">tabel pengaduan</a></li>
            <li><hr class="dropdown-divider" style="background-color: white;"></li>
            <li><a class="nav-link scrollto"   onclick="contoh()">tabel tangapan</a></li>
          <?php endif;?>
          </ul>
        </li>
          <?php if($this->session->userdata('akses')=='3'):?>
            <li><a class="nav-link scrollto" href="<?= base_url('auth/logout')?>">logout</a></li>
          <?php elseif(($this->session->userdata('akses')=='3')) : {?>
            <li><a class="nav-link scrollto" href="<?= base_url('auth')?>">Login</a></li>
            <?php } else : {?>
              <li><a class="nav-link scrollto" href="<?= base_url('auth')?>">Login</a></li>
              <?php }?>
          <?php endif;?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>Pengaduan Masyarakat</span></h2>
          <p class="animate__animated fanimate__adeInUp">Adukan semua masalah mu dimanapun dan kapanpun !</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Cara Melakukan Pengaduan</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
             prosedur melakukan pengaduan di aplikasi Adumas
            </p>
            <ul>
              <li><i class="fa-solid fa-check"></i> Penguna melakukan Register Mengunakan data yang valid</li>
              <li><i class="fa-solid fa-check"></i> Login mengunakan akun yang sudah di buat</li>
              <li><i class="fa-solid fa-check"></i> Isi Form Pengaduan dengan data yang valid</li>
              <li><i class="fa-solid fa-check"></i> Tunggu informasi dari Petugas </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan
            </p>
            <!-- <a href="" class="btn-learn-more">Bergabung Bersama kami</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Ingin melakukan Pengaduan ?</h3>
            <p>Silakan register dan login maka form pengaduan akan terbuka, di mohon untuk mengisi form sesuai fakta yang terjadi</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?= base_url('auth/register')?>">Register</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>Apa yang kami Layani</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class='bx bx-group' style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Petugas</a></h4>
              <p class="description"><?= $jumlah_data?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              
              <div class="icon"><i class='bx bx-bar-chart' style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pengaduan</a></h4>
              <p class="description"><?= $jumlah_pengaduan?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class='bx bx-pie-chart-alt-2' style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Tanggapan</a></h4>
              <p class="description"><?= $jumlah_tangapan?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class='bx bxs-user-rectangle' style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">User</a></h4>
              <p class="description"><?= $jumlah_masyarakat?></p>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-24 mt-5">
          <!-- pie chart -->
          <div class="card" data-aos="zoom-out" data-aos-delay="200">
            <div class="card-body">
              <div>
                <canvas  id="myChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      
    </section>
    <!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list" >

          <li>
            <div data-bs-toggle="collapse" data-aos="zoom-in-left" data-aos-delay="200" class="collapsed question" href="#faq1">Bagaimana cara melakukan Pengaduan ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                jika anda ingin melakukan pengaduab cara nya sangat mudah, anda hanya perlu register, lalu login mengunakan akun yg sudah di buat, isi form pengaduan dengan data yg valid. 
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" data-aos="zoom-in-left" data-aos-delay="200" href="#faq2" class="collapsed question">Berapa lama waktu pengaduan kami di proses? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pengaduan akan di tangapi dengan secepatnya tergantung masalah yg di adukan.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" data-aos="zoom-in-left" data-aos-delay="200" href="#faq3" class="collapsed question">Mengapa form pengaduan tidak Tampil ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Jika form pengaduan tidak tampil, anda harus melakukan login terlebih dahulu.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" data-aos="zoom-in-left" data-aos-delay="200" href="#faq5" class="collapsed question">Apa itu aplikasi pengaduan masyarakat?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
              Aplikasi pengaduan masyarakat adalah platform yang memungkinkan masyarakat untuk mengajukan pengaduan terkait berbagai masalah, seperti infrastruktur, lingkungan, kesehatan, dan lain sebagainya.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" data-aos="zoom-in-left" data-aos-delay="200" href="#faq6" class="collapsed question">Apa saja jenis pengaduan yang dapat diajukan melalui aplikasi pengaduan masyarakat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Jenis pengaduan yang dapat diajukan melalui aplikasi pengaduan masyarakat bervariasi, seperti masalah infrastruktur (jalan rusak, lampu jalan mati), lingkungan (sampah yang berserakan, air yang tercemar), kesehatan (fasilitas kesehatan yang buruk), dan lain sebagainya.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->
    <?php if($this->session->userdata('akses')=='3'):?>
    <!-- ======= Contact Section ======= -->
    
    <section id="pengaduan" class="contact" >
      <div class="container" style="">
      
        <div class="section-title"  data-aos="zoom-out">
          <h2>Form</h2>
          <p>Form Pengaduan</p>
        </div>

        <div class="row mt-5" >

          <div class="col-lg-12 mt-5 mt-lg-0">

             <form action="<?= base_url('crud_pengaduan/upload_pengaduan'); ?>" data-aos="zoom-out" method="post" enctype="multipart/form-data" role="form"  >
              <div class="row">
                <div class="col-md form-group">
                  <input type="hidden" name="nik" value="<?php echo $this->session->userdata('ses_id');?>" class="form-control" id="name" placeholder="Nama ">
                </div>
              </div>
              <div class="input-group mt-3">
                <input type="file" name="foto" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="isi" rows="8" placeholder="isi pengaduan" ></textarea>
                <input type="hidden" name="status" value="menunggu" class="form-control" id="name" placeholder="Nama ">
              </div>
              <button class="btn "  style="background-color: #7ebae2; margin-top: 25px; color: white;" type="submit">Kirim Aduan</button>
            </form>

          </div>
         

        </div>

      </div>
    </section><!-- End Contact Section -->
    <section id="tabel-pengaduan" class="tablescrol" >
      <div class="container" style="">
      <div class="section-title"  data-aos="zoom-out">
          <h2>Tabel</h2>
          <p>Tabel Pengaduan</p>
        </div>
        <div class="table-responsive" data-aos="zoom-out">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      
                      <th>id Pengaduan</th>
                      <th>tanggal pengaduan</th>
                      <!-- <th>tanggal Tangapan</th> -->
                      <th>isi pengaduan</th>
                      <!-- <th>tangapan</th> -->
                      <!-- <th>nama petugas</th> -->
                      <th>nik</th>
                      <th>nama</th>
                      <th>sebelum</th>
                      <!-- <th>sesudah</th> -->
                      <th>status</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pengaduan as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        
                        <td><?php echo $k->id_pengaduan; ?></td>
                        <td><?php echo $k->tgl_pengaduan; ?></td>
                        <!-- <td><?php echo $k->tgl_tangapan; ?></td> -->
                        <td><?php echo $k->isi_laporan; ?></td>
                        <!-- <td><?php echo $k->tangapan; ?></td> -->
                        <!-- <td><?php echo $k->nama_petugas; ?></td> -->
                        <td><?php echo $k->nik; ?></td>
                        <td><?php echo  $this->session->userdata('ses_nama');?></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto;?>" style="width: 100px;"></td>
                        <!-- <td><img src="<?php echo base_url() .'/gambar/'. $k->foto_tangapan;?>" style="width: 100px;"></td> -->
                        <td><?php echo $k->status; ?></td>
                        <td>
                             <!-- <a type="button" class="btn btn-danger" href="<?php echo site_url('crud_pengaduan/delete/'.$k->id_pengaduan); ?>">Delete</a>  -->
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $k->id_pengaduan; ?>">
                          <i class="fa-solid fa-pen"></i>
                          </button>
                        </td>
                    </tr>
                  <?php $current_no++; endforeach; ?>
                  </tbody>
                </table>
                </table>
                </div>
                <!-- Modal -->
                <?php foreach($pdf as $k): ?>
                <div class="modal fade" id="editModal<?= $k->id_pengaduan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pengaduan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="<?= base_url('crud_pengaduan/edit_pengaduan');?>" method="post">
                        <label for="exampleFormControlTextarea1" class="form-label">Pengaduan :</label>
                        <input type="hidden" value="<?= $k->id_pengaduan?>" name="id_pengaduan">
                        <textarea class="form-control" name="isi_laporan" value="<?php echo $k->isi_laporan; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <?php endforeach;?>
      </div>
    </section><!-- End Contact Section -->
    <section id="tabel" class="tablescrol" >
      <div class="container" style="">
      <div class="section-title"  data-aos="zoom-out">
          <h2>Tabel</h2>
          <p>Tabel Tangapan</p>
        </div>
        <div class="table-responsive" data-aos="zoom-out">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      
                      <th>id Pengaduan</th>
                      <th>tanggal pengaduan</th>
                      <th>tanggal Tangapan</th>
                      <th>isi pengaduan</th>
                      <th>tangapan</th>
                      <th>nama petugas</th>
                      <th>nik</th>
                      <th>nama</th>
                      <th>sebelum</th>
                      <th>sesudah</th>
                      <th>status</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($pdf as $k): ?>
               
                    <tr>
                        <td scope="row"><?php echo $current_no ?></td>
                        
                        <td><?php echo $k->id_pengaduan; ?></td>
                        <td><?php echo $k->tgl_pengaduan; ?></td>
                        <td><?php echo $k->tgl_tangapan; ?></td>
                        <td><?php echo $k->isi_laporan; ?></td>
                        <td><?php echo $k->tangapan; ?></td> 
                        <td><?php echo $k->nama_petugas; ?></td>
                        <td><?php echo $k->nik; ?></td>
                        <td><?php echo  $this->session->userdata('ses_nama');?></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto;?>" style="width: 100px;"></td>
                        <td><img src="<?php echo base_url() .'/gambar/'. $k->foto_tangapan;?>" style="width: 100px;"></td>
                        <td><?php echo $k->status; ?></td>
                        <td>
                             <!-- <a type="button" class="btn btn-danger" href="<?php echo site_url('crud_pengaduan/delete/'.$k->id_pengaduan); ?>">Delete</a>  -->
                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $k->id_pengaduan; ?>">
                          <i class="fa-solid fa-pen"></i>
                          </button>
                        </td>
                    </tr>
                  <?php $current_no++; endforeach; ?>
                  </tbody>
                </table>
                </div>
                <!-- Modal -->
                <?php foreach($pdf as $k): ?>
                <div class="modal fade" id="editModal<?= $k->id_pengaduan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pengaduan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="<?= base_url('crud_pengaduan/edit_pengaduan');?>" method="post">
                        <label for="exampleFormControlTextarea1" class="form-label">Pengaduan :</label>
                        <input type="hidden" value="<?= $k->id_pengaduan?>" name="id_pengaduan">
                        <textarea class="form-control" name="isi_laporan" value="<?php echo $k->isi_laporan; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <?php endforeach;?>
      </div>
    </section><!-- End Contact Section -->
    
    <?php endif;?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Adumas</h3>
      <p>Cari dan hubungi kami di sosial media di bawah ini agar tidak ketinggalan informasi terbaru</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Adumas</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <!-- <script>
    $(document).ready(function(){
        $.ajax({
            url: '<?php echo base_url('landing_page/status_chart'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data){
                var ctx = $('#statusChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.status,
                        datasets: [{
                            label: '',
                            data: data.jumlah,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }
        });
    });
</script> -->
<script>
    $(document).ready(function(){
        $.ajax({
            url: '<?php echo base_url('landing_page/status_chart'); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data){
                var ctx = $('#myChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.status,
                        datasets: [{
                            label: 'grafik pengaduan',
                            data: data.jumlah,
                            backgroundColor: [
                                // 'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                // 'rgba(255, 206, 86, 0.2)',
                                // 'rgba(75, 192, 192, 0.2)',
                                // 'rgba(153, 102, 255, 0.2)',
                                // 'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                // 'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                // 'rgba(255, 206, 86, 1)',
                                // 'rgba(75, 192, 192, 1)',
                                // 'rgba(153, 102, 255, 1)',
                                // 'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                      scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                    }
                });
            }
        });
    });
</script>
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
    function contoh(){
     Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Silahkan Login Terlebih Dahulu!',
      footer: '<a href="<?= base_url('auth/register')?>">Belum Punya Akun?</a>'
    });
  }


</script>
<?php if($this->session->flashdata('message')): ?>
<script>
Swal.fire({
  title: '<?= $this->session->flashdata('message'); ?>',
  icon: '<?= $this->session->flashdata('type'); ?>',
  showConfirmButton: false,
  timer: 2000
})
</script>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<script>
Swal.fire({
  title: '<?= $this->session->flashdata('error'); ?>',
  icon: '<?= $this->session->flashdata('type'); ?>',
  showConfirmButton: false,
  timer: 2000
})
</script>
<?php endif; ?>
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('/assets/vendor/aos/aos.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/assets/js/main.js')?>"></script>

</body>

</html>