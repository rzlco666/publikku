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
                                    <h4 class="page-title mb-1">Ubah Pengajuan Surat</h4>
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
                                            <h5 class="header-title mb-4">Ubah Pengajuan Surat</h5>
                                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Surat/update">

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">NIK</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $surat->nik; ?>" name="nik" id="nik">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id_surat" value="<?php echo $surat->id_surat; ?>">
                                                    <input class="form-control" type="text" value="<?php echo $surat->nama; ?>" name="nama" id="nama">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $surat->alamat; ?>" name="alamat" id="alamat">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">No HP</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $surat->hp; ?>" name="hp" id="hp">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tanggal</label>
                                                <div class="col-md-10">
                                                    <input placeholder="Masukkan tanggal laporan" type="date" value="<?php echo $surat->tanggal; ?>" class="form-control" name="tanggal" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Jenis Surat</label>
                                                <div class="col-md-10">
                                                    <select name="jenis" value="<?php echo $surat->jenis; ?>" class="custom-select">
                                                        <option disabled="disabled" selected>Pilih jenis surat</option>
                                                        <?php foreach ($jenis_surat as $jeniss): ?>
                                                            <option value="<?php echo $jeniss['kategorisurat'] ?>"><?php echo $jeniss['kategorisurat'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Pesan</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" id="elm1" name="pesan"><?php echo $surat->pesan; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-right">
                                                <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo base_url(); ?>Surat" class="btn btn-warning">Batal</a>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Ajukan</button>
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