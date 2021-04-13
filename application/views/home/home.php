<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/Bg-mas.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di</h2>
              <h2 class="animate__animated animate__fadeInDown">Website Resmi Desa Keden</h2>
              <p class="animate__animated animate__fadeInUp">Desa Keden merupakan salah satu desa yang berada
                di Daerah Kecamatan Pedan Kabupaten Klaten. Website ini merupakan media komunikasi dan transparansi
                Pemerintah Desa Keden untuk seluruh masyarakat serta media pengaduan online dan juga pengajuan
                administrasi surat</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai Pelayanan</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s1.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Visi dan Misi</h2>
              <p class="animate__animated animate__fadeInUp">Visi : terwujudnya Desa Keden yang mandiri (maju, amanah,
                damai, inovatif, religius). Misi : Mewujudkan kehidupan masyarakat yang aman dan tentram, mewujudkan
                tata kelola yang baik, mewujudkan kualitas SDM, mewujudkan peningkatan potensi SDA di bidang pertanian,
                mewujudkan kemandirian perekonomian masyarakat, mewujudkan pembangunan yang terencana merata dan
                berkelanjutan, mewujudkan rasa persatuan, gotong royong dan pemberdayaan karang taruna</p>
              <a href="<?php echo base_url('User/infodes'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Info
                Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s3.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Berita Desa</h2>
              <p class="animate__animated animate__fadeInUp">halaman ini berisi berita, informasi dan pengumuman baik
                urusan pemerintah, kesehatan, teknologi ataupun lainnya yang
                berada di Desa Keden. Info desa ini dikelola oleh pemerintah desa keden.</p>
              <a href="<?php echo base_url('User/kegiatan'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Berita</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          <h2>Pelayanan Desa Keden</h2>
          <h3>Desa Keden melayani pelaporan online dari masyarakat dan pengajuan surat keterangan secara online</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Dengan adanya fitur pelayanan ini, kami mengharapkan masyarakat dapat ikut serta berpartisipasi dalam rangka mewujudkan desa cerdas atau smart village dan juga membantu pelayanan pemerintah.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Pelayanan pelaporan dan aspirasi masyarakat Desa Keden</li>
            <li><i class="ri-check-double-line"></i> Pelayanan pengajuan surat online masyarakat Desa Keden</li>
          </ul>
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <a href="<?php echo base_url('User/surat'); ?>" class="btn btn-secondary">Pengajuan Surat</a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
              <a href="<?php echo base_url('User/lapor'); ?>" class="btn btn-secondary animate__animated animate__fadeInUp scrollto">LAPOR!</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <section id="apbdes" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>INFO APBDes</h2>
        <p>APBDes</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box">
            <a href="<?php echo base_url('User/realisasi'); ?>"><span>Realisasi APBdes</span></a>
            <h4>2020</h4>
            <p>Berikut merupakan realisasi anggaran pendapatan dan belanja desa tahun 2020</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
          <a href="<?php echo base_url('User/transparasi'); ?>"><span>APBDes 2021</span></a>
            <h4>2021</h4>
            <p>Berikut merupakan transparasi anggaran pendapatan dan belanja desa tahun 2021</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
          <a href=""><span>Perubahan APBdes</span></a>
            <h4>2020</h4>
            <p>Berikut merupakan perubahan anggaran pendapatan dan belanja desa tahun 2020</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Whu Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="statistik" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Data</h2>
        <p>Statistik Desa</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="icofont-worker"></i>
            <h4><a href="<?php echo base_url('User/pekerjaan'); ?>">Data Pekerjaan</a></h4>
            <p>Klik untuk menampilkan statistik data pekerjaan Desa Keden</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-chart-bar-graph"></i>
            <h4><a href="<?php echo base_url('User/umur'); ?>">Statistik Umur</a></h4>
            <p>Klik untuk menampilkan statistik data umur Desa Keden </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-heart"></i>
            <h4><a href="<?php echo base_url('User/agama'); ?>">Data Agama</a></h4>
            <p>Klik untuk menampilkan statistik data agama Desa Keden
            </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-library"></i>
            <h4><a href="<?php echo base_url('User/pendidikan'); ?>">Data Pendidikan</a></h4>
            <p>Klik untuk menampilkan statistik data pendidikan Desa Keden</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-earth"></i>
            <h4><a href="<?php echo base_url('User/wilayah'); ?>">Data Wilayah</a></h4>
            <p>Klik untuk menampilkan statistik data wilayah Desa Keden</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-users-alt-4"></i>
            <h4><a href="<?php echo base_url('User/kelamin'); ?>">Data Jenis Kelamin</a></h4>
            <p>Klik untuk menampilkan statistik data jenis kelamin Desa Keden</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->

  </main><!-- End #main -->

  </body>

</html>