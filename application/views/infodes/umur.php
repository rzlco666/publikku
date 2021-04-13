<main id="main">
<script src="<?=base_url('assets_user/'); ?>js/charts/Chart.js"></script>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Data Statistik Umur</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Data Statistik Umur</li>
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
            <td>Di bawah 1 Tahun</td>
            <td class='text-right'>241</td>
          </tr>
          <tr class=''>
            <td class='text-right'>2</td>
            <td>2 s/d 4 Tahun</td>
            <td class='text-right'>74</td>
          </tr>
          <tr class=''>
            <td class='text-right'>3</td>
            <td>5 s/d 9 Tahun</td>
            <td class='text-right'>271</td>
          </tr>
          <tr class=''>
            <td class='text-right'>4</td>
            <td>10 s/d 14 Tahun</td>
            <td class='text-right'>328</td>
          </tr>
          <tr class=''>
            <td class='text-right'>5</td>
            <td>15 s/d 19 Tahun</td>
            <td class='text-right'>328</td>
          </tr>
          <tr class=''>
            <td class='text-right'>6</td>
            <td>20 s/d 24 Tahun</td>
            <td class='text-right'>328</td>
          </tr>
          <tr class=''>
            <td class='text-right'>7</td>
            <td>25 s/d 29 Tahun</td>
            <td class='text-right'>283</td>
          </tr>
          <tr class=''>
            <td class='text-right'>8</td>
            <td>30 s/d 34 Tahun</td>
            <td class='text-right'>269</td>
          </tr>
          <tr class=''>
            <td class='text-right'>9</td>
            <td>35 s/d 39 Tahun</td>
            <td class='text-right'>340</td>
          </tr>
          <tr class=''>
            <td class='text-right'>10</td>
            <td>Di atas 40 Tahun</td>
            <td class='text-right'>1994</td>
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
                  'Di bawah 1 Tahun',
                  '2 s/d 4 Tahun',
                  '5 s/d 9 Tahun',
                  '10 s/d 14 Tahun',
                  '15 s/d 19 Tahun',
                  '20 s/d 24 Tahun',
                  '25 s/d 29 Tahun',
                  '30 s/d 34 Tahun',
                  '35 s/d 39 Tahun',
                  'Di atas 40 Tahun'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[241,74,271,328,328,328,283,269,340,1994],

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
