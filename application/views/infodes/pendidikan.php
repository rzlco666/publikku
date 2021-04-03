<main id="main">
<script src="<?=base_url('assets_user/'); ?>js/charts/Chart.js"></script>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Data Pendidikan</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Data Pendidikan</li>
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
            <td>TIDAK / BELUM SEKOLAH</td>
            <td class='text-right'>1818</td>
          </tr>
          <tr class=''>
            <td class='text-right'>2</td>
            <td>BELUM TAMAT SD/SEDERAJAT</td>
            <td class='text-right'>305</td>
          </tr>
          <tr class=''>
            <td class='text-right'>3</td>
            <td>TAMAT SD / SEDERAJAT</td>
            <td class='text-right'>706</td>
          </tr>
          <tr class=''>
            <td class='text-right'>4</td>
            <td>SLTP/SEDERAJAT</td>
            <td class='text-right'>16</td>
          </tr>
          <tr class=''>
            <td class='text-right'>5</td>
            <td>SLTA / SEDERAJAT</td>
            <td class='text-right'>80</td>
          </tr>
          <tr class=''>
            <td class='text-right'>6</td>
            <td>DIPLOMA I / II</td>
            <td class='text-right'>1</td>
          </tr>
          <tr class=''>
            <td class='text-right'>7</td>
            <td>AKADEMI/ DIPLOMA III/S. MUDA</td>
            <td class='text-right'>33</td>
          </tr>
          <tr class=''>
            <td class='text-right'>8</td>
            <td>DIPLOMA IV/ STRATA I</td>
            <td class='text-right'>79</td>
          </tr>
          <tr class=''>
            <td class='text-right'>9</td>
            <td>STRATA II</td>
            <td class='text-right'>549</td>
          </tr>
          <tr class=''>
            <td class='text-right'>10</td>
            <td>STRATA III</td>
            <td class='text-right'>2</td>
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
                  'TIDAK / BELUM SEKOLAH',
                  'BELUM TAMAT SD/SEDERAJAT',
                  'TAMAT SD / SEDERAJAT',
                  'SLTP/SEDERAJAT',
                  'SLTA / SEDERAJAT',
                  'DIPLOMA I / II',
                  'AKADEMI/ DIPLOMA III/S. MUDA',
                  'DIPLOMA IV/ STRATA I',
                  'STRATA II',
                  'STRATA III'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[1818,305,706,16,80,1,33,79,549,2],

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
