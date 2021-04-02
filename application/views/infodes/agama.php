<main id="main">
<script src="<?=base_url('assets_user/'); ?>js/charts/Chart.js"></script>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Data Agama</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Data Agama</li>
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
            <td>ISLAM</td>
            <td class='text-right'>39</td>
          </tr>
          <tr class=''>
            <td class='text-right'>2</td>
            <td>KRISTEN</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>3</td>
            <td>KATHOLIK</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>4</td>
            <td>HINDU</td>
            <td class='text-right'>10</td>
          </tr>
          <tr class=''>
            <td class='text-right'>5</td>
            <td>BUDHA</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>6</td>
            <td>KHONGHUCU</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>7</td>
            <td>Kepercayaan Terhadap Tuhan YME / Lainnya</td>
            <td class='text-right'>1</td>
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
        var piechart = new Chart(ctx,{type: 'doughnut',
          data : {
        // label nama setiap Value
        labels:[
                  'ISLAM',
                  'KRISTEN',
                  'KATHOLIK',
                  'HINDU',
                  'BUDHA',
                  'KHONGHUCU',
                  'Kepercayaan Terhadap Tuhan YME / Lainnya'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[39,1,1,10,1,1,1],

          backgroundColor:[
                 'rgba(255,0,0, 0.5)',
                 'rgba(0,255,0, 0.5)',
                 'rgba(0,0,255, 0.5)',
                 'rgba(255,255,0, 0.5)',
                 'rgba(0,255,255, 0.5)',
                 'rgba(255,0,255, 0.5)'
                 ]
        }],
        }
        });

    </script>
