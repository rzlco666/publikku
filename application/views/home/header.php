<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Keden</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets/'); ?>img/klaten333.ico" rel="icon">


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url('assets/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/'); ?>css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="<?php echo base_url('User'); ?>">Desa Keden</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="drop-down"><a href="#">Pelayanan</a>
            <ul>
              <li><a href="<?php echo base_url('User/surat'); ?>">Permintaan Surat Keterangan</a></li>
              <li><a href="<?php echo base_url('User/lapor'); ?>">Pelaporan</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Pemerintah</a>
            <ul>
              <li><a href="#">Sturktur Pemerintah</a></li>
              <li><a href="#statistik">Statistik Desa</a></li>
              <li><a href="#">Profil Desa</a></li>
              <li><a href="#">BUMDES</a></li>
            </ul>
          </li>

          <li class="active"><a href="#apbdes">APBDes</a></li>
          <li><a href="<?php echo base_url('User/infodes'); ?>">Info Desa</a></li>
          <li><a href="<?php echo base_url('User/kegiatan'); ?>">Kegiatan</a></li>
          <li><a href="contact.html"></a></li>

        </ul>

      </nav><!-- .nav-menu -->
      <?php

if (empty($this->session->userdata('is_login'))) {
    ?>
          <div class="dropdown ml-auto">
            <button style="outline: none; border-style: none;" class="get-started-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?=base_url('Auth/login'); ?>">Pengguna</a>
              <a class="dropdown-item" href="#">Admin</a>
              <a class="dropdown-item" href="#">Kades</a>
            </div>
          </div>
          <a href="<?=base_url('Auth/daftar'); ?>" class="get-started-btn">Register</a>
      <?php
} else {
    ?>
          <a href="<?=base_url('Dashboard'); ?>" class="get-started-btn ml-auto">Dashboard</a>
      <?php

}

?>


    </div>
  </header><!-- End Header -->
