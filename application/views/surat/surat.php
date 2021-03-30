<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Pengajuan Surat</h2>
      <ol>
        <li><a href="<?php echo base_url('User'); ?>">Home</a></li>
        <li>Surat</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="surat" class="services">
  <div class="container">
    <div class="controls">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group has-error has-danger">
            <label for="form_name">Nama *</label>
            <input id="form_name" type="text" name="name" class="form-control"
              placeholder="Silahkan masukkan nama anda *" required="required" data-error="Nama harus diisi!.">
            <div class="help-block with-errors">
              <ul class="list-unstyled">
                <li>Nama harus diisi!.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_lastname">NIK *</label>
            <input id="form_lastname" type="text" name="nik" class="form-control"
              placeholder="Silahkan masukkan NIK anda *" required="required" data-error="NIK Harus diisi!.">
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_email">No HP *</label>
            <input id="form_email" type="number" name="hp" class="form-control"
              placeholder="Silahkan masukkan no hp anda *" required="required" data-error="Format no hp salah.">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_need">Pilih Jenis Surat *</label>
            <select id="form_need" name="keperluan" class="form-control" required="required"
              data-error="Pilih jenis surat yang anda perlukan">
              <option value=""></option>
              <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
              <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
              <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
              <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
              <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
              <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
              <option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
              <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
              <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
            </select>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_message">Pesan *</label>
            <textarea id="form_message" name="message" class="form-control"
              placeholder="Silahkan isi keperluan atau keterangan lainnya disini *" rows="4" required="required"
              data-error="Silahkan isi pesan atau keterangan anda!."></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <input type="submit" class="btn btn-danger btn-send disabled" value="Kirim Permohonan">
        </div>

      </div>
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title">
      <h2>Features</h2>
      <p>Check our Features</p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Architecto ut aperiam autem id</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata
                  raqer a videna mareta paulona marka</p>
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa
                  odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni
                  nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Et blanditiis nemo veritatis excepturi</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata
                  raqer a videna mareta paulona marka</p>
                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt
                  est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque
                  beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus
                  non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque
                  necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum
                  odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/features-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis
                  delectus</p>
                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam
                  fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores
                  sed qui veritatis aperiam quia a laborum inventore</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/features-4.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut
                  quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae
                  molestiae voluptate vel</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/features-5.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

</main><!-- End #main -->
