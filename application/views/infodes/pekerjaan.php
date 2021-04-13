<main id="main">
<script src="<?=base_url('assets_user/'); ?>js/charts/Chart.js"></script>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Data Pekerjaan</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Data Pekerjaan</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <canvas id="pekerjaan"></canvas>
      </div>
      <div class="col-lg-6">
        <div class='table-responsive'>
        <table class='table table-bordered table-striped'>
        <thead>
        <tr>
          <th>No</th>
          <th class='text-left'>Kelompok</th>
          <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
          <tr class=''>
            <td class='text-right'>1</td>
            <td>BELUM/TIDAK BEKERJA</td>
            <td class='text-right'>678</td>
          </tr>
          <tr class=''>
            <td class='text-right'>2</td>
            <td>MENGURUS RUMAH TANGGA</td>
            <td class='text-right'>281</td>
          </tr>
          <tr class=''>
            <td class='text-right'>3</td>
            <td>PELAJAR/MAHASISWA</td>
            <td class='text-right'>848</td>
          </tr>
          <tr class=''>
            <td class='text-right'>4</td>
            <td>PENSIUNAN</td>
            <td class='text-right'>19</td>
          </tr>
          <tr class=''>
            <td class='text-right'>5</td>
            <td>PEGAWAI NEGERI SIPIL (PNS)</td>
            <td class='text-right'>44</td>
          </tr>
          <tr class=''>
            <td class='text-right'>6</td>
            <td>TENTARA NASIONAL INDONESIA (TNI)</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>7</td>
            <td>KEPOLISIAN RI (POLRI)</td>
            <td class='text-right'>3</td>
          </tr>
          <tr class=''>
            <td class='text-right'>8</td>
            <td>PERDAGANGAN</td>
            <td class='text-right'>41</td>
          </tr>
          <tr class=''>
            <td class='text-right'>9</td>
            <td>PETANI/PEKEBUN</td>
            <td class='text-right'>15</td>
          </tr>
          <tr class=''>
            <td class='text-right'>10</td>
            <td>LAIN LAIN</td>
            <td class='text-right'>2393</td>
          </tr>
        </tbody>
      </table>
      </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

</main><!-- End #main -->

<script>

        var ctx = document.getElementById("pekerjaan").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'BELUM/TIDAK BEKERJA',
                  'MENGURUS RUMAH TANGGA',
                  'PELAJAR/MAHASISWA',
                  'PENSIUNAN',
                  'PEGAWAI NEGERI SIPIL (PNS)',
                  'TENTARA NASIONAL INDONESIA (TNI)',
                  'KEPOLISIAN RI (POLRI)',
                  'PERDAGANGAN',
                  'PETANI/PEKEBUN',
                  'LAIN LAIN'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[678,281,848,19,4,1,3,41,15,2393],

          backgroundColor:[
                 'rgba(255,0,0, 0.5)',
                 'rgba(0,255,0, 0.5)',
                 'rgba(0,0,255, 0.5)',
                 'rgba(255,255,0, 0.5)',
                 'rgba(0,255,255, 0.5)',
                 'rgba(255,0,255, 0.5)',
                 'rgba(128,0,0, 0.5)',
                 'rgba(128,128,0, 0.5)',
                 'rgba(0,128,0, 0.5)',
                 'rgba(128,0,128, 0.5)'
                 ]
        }],
        }
        });

    </script>
