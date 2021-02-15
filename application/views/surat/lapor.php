<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Laporkan!</h2>
          <ol>
            <li><a href="<?php echo base_url('User'); ?>">Home</a></li>
            <li>Lapor</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="lapor" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Form Laporan</h2>
        <p>LAPOR!</p>
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Waktu</label>
            <input type="time" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Tanggal</label>
            <input type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Lokasi</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Bukti Foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-danger ">Submit</button>
        </form>
      </div>
    </div>
  </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
