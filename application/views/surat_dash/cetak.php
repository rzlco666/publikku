<html>
 <head>
  <title>Cetak Resi Surat</title>
 </head>

 <body bgcolor="white">
  <img src="<?php echo base_url('assets_user/images/'); ?>logo_klaten.png" height="100" align="left" >
  <font face="Arial" size="5" color="black"> <p align="center"> <b>Desa Keden</b> </p></font>
  <hr>

  <font face="Arial" color="black" size="6"> <p align="center"> <u> <b> CETAK RESI SURAT </b></u></font><br>

  <p><font face="Arial">
  <br>
  Dengan ini kami menerangkan bahwa:
  </p>
  <br>
    <p>Nama    : <?php echo $surat->nama; ?></p>

    <p>NIK    : <?php echo $surat->nik; ?></p>

    <p>Alamat : <?php echo $surat->alamat; ?></p>

    <p>Jenis Surat : <?php echo $surat->jenis; ?></p>

    <br>
    <p>Dapat mencetak surat dengan nomer resi:</p>
    <br>
    <h3 align="center"><b>RESI SURAT : <?php echo $surat->nomor_surat; ?></b></h3>
    <br>

    <p>Silahkan ambil ke balai desa dan bawa berkas persyaratan.</p>

 </body>
 <script>
    window.print();
  </script>
</html>