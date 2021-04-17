 <!-- ============================================================== -->
 <!-- Start right Content here -->
 <!-- ============================================================== -->
 <div class="main-content">

     <div class="page-content">

         <!-- Page-Title -->
         <div class="page-title-box">
             <div class="container-fluid">
                 <div class="row align-items-center">
                     <div class="col-md-8">
                         <h4 class="page-title mb-1">Ubah Laporan</h4>
                     </div>
                 </div>

             </div>
         </div>
         <!-- end page title end breadcrumb -->

         <div class="page-content-wrapper">
             <div class="container-fluid">
                 <div class="row">

                     <div class="col">
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="header-title mb-4">Ubah Laporan</h5>
                                 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Lapor/update">
                                     <input type="hidden" name="id_fitur" id="id_fitur" value="<?php echo $lapor->id_fitur; ?>" />
                                     <div class="form-group row">
                                         <label class="col-md-2 col-form-label">Isi Laporan</label>
                                         <div class="col-md-10">
                                             <textarea class="form-control" id="elm1" name="isi"><?php echo $lapor->isi_lapor; ?></textarea>
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <label for="lokasi" class="col-md-2 col-form-label">Lokasi</label>
                                         <div class="col-md-10">
                                             <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
                                             <input class="form-control" type="text" value="<?php echo $lapor->lokasi; ?>" name="lokasi" id="lokasi">
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <label class="col-md-2 col-form-label">Tanggal</label>
                                         <div class="col-md-10">
                                             <input placeholder="Masukkan tanggal laporan" type="date" value="<?php echo $lapor->tanggal; ?>" class="form-control" name="tanggal" />
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <label class="col-md-2 col-form-label">Foto atau Video</label>
                                         <div class="col-md-10">
                                             <div class="custom-file">
                                                 <input type="file" name="image" value="<?php echo $lapor->foto; ?>" class="custom-file-input" id="image" required data-toggle="tooltip" data-placement="bottom" title="Ukuran maksimal 15 MB">
                                                 <label class="custom-file-label" for="validationCustomFile">Upload bukti foto/video *ukuran maksimal 15 MB</label>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Jenis Pelaporan</label>
                                                <div class="col-md-10">
                                                    <select name="jenis" class="custom-select">
                                                        <option disabled="disabled" selected>Pilih jenis pelaporan</option>
                                                        <?php foreach ($jenis_laporan as $jenis): ?>
                                                            <option value="<?php echo $jenis['kategori'] ?>"><?php echo $jenis['kategori'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                     </div>

                                     <div class="mt-4 text-right">
                                         <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo base_url(); ?>Lapor" class="btn btn-warning">Batal</a>
                                         <button class="btn btn-primary waves-effect waves-light" type="submit">Laporkan</button>
                                     </div>

                                 </form>
                             </div>
                         </div>
                     </div>

                 </div>
                 <!-- end row -->

             </div> <!-- container-fluid -->
         </div>
         <!-- end page-content-wrapper -->
     </div>
     <!-- End Page-content -->