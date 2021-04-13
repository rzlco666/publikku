<main id="main">
<script src="<?=base_url('assets_user/'); ?>js/charts/Chart.js"></script>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Data Jenis Kelamin</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Data Jenis Kelamin</li>
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
            <td>PRIA</td>
            <td class='text-right'>2159</td>
          </tr>
          <tr class=''>
            <td class='text-right'>2</td>
            <td>WANITA</td>
            <td class='text-right'>2173</td>
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
                  'PRIA',
                  'WANITA'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[2159,2173],

          backgroundColor:[
                 'rgba(255,0,0, 0.5)',
                 'rgba(0,255,0, 0.5)'
                 ]
        }],
        }
        });

    </script>
