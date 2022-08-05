<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK IBRAHIMY 2 SUKOREJO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/Smile.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <style>
    <?php
    require_once("assets/css/style.css");
    require_once("assets/vendor/animate.css/animate.min.css");
    require_once("assets/vendor/bootstrap/css/bootstrap.min.css");
    require_once("assets/vendor/bootstrap-icons/bootstrap-icons.css");
    require_once("assets/vendor/boxicons/css/boxicons.min.css");
    require_once("assets/vendor/glightbox/css/glightbox.min.css");
    require_once("assets/vendor/swiper/swiper-bundle.min.css");
    ?>
  </style>
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url('/application/views/assets/css/login.css') ?>" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo base_url(); ?>beranda">SMK IBRAHIMY 2 SUKOREJO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url(); ?>beranda">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Program Keahlian</span></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>tkj">Teknik Komputer dan Jaringan</a></li>
              <li><a href="<?php echo base_url(); ?>atp">Agribisnis tanaman perkebunan</a></li>
              <li><a href="<?php echo base_url(); ?>aphp">Agribisnis Pengolahan Hasil Pertanian</a></li>
              <li><a href="<?php echo base_url(); ?>bank">Perbankan Syariah dan Keuangan Mikro</a></li>
              <li><a href="<?php echo base_url(); ?>busana">Tata Busana</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>login"><span>Pendaftaran Online</span></a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>infopendaftaran">Informasi Pendaftaran</a></li>
          <li><a href="<?php echo base_url(); ?>infosekretariat"><span>Hubungi Kami</span></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <section>
    </div>
  </section>

  <main id="main">
    <!-- ======= Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div align="center">
          <img class="logo" src=" application\views\assets\image\logo.jpg" alt="">
        </div>

        <br />
        <h1 class="text-login" align="center">Login</h1>
        <br />
        <div class="panel panel-default">
          <div class="panel-body">
            <?php
            if ($this->session->flashdata('message')) {
              echo '
                    <div class="alert alert-success">
                        ' . $this->session->flashdata("message") . '
                    </div>
                    ';
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>login/validation">
              <div class="form-group">
                <label>Enter Email Address</label>
                <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
              </div>
              <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
              </div>
              <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
              </div>
            </form>
          </div>
        </div>
      </div><!-- End .content-->
      </div>
      </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="
  bottom:0;
  width:100%;
  height:100px;">
      <div class="container">
        <div class="row">

        </div>

      </div>
      </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Kelompok 2</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->

</body>

</html>