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
                                    <h4 class="page-title mb-1">Buat Pengajuan Surat</h4>
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
                                            <h5 class="header-title mb-4">Buat Pengajuan Surat</h5>

                                            <?php
if ($this->session->flashdata('error') != '') {
    echo '<div class="alert alert-primary" role="alert">';
    echo $this->session->flashdata('error');
    echo '</div>';
}
?>

                                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Surat/save">

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">NIK</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" hidden="hidden" type="text" name="no_invoice" value="<?php echo $invoice;?>">
                                                    <input class="form-control" type="text" value="<?php echo $user->KTP; ?>" name="nik" id="nik">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
                                                    <input class="form-control" type="text" value="<?php echo $user->username; ?>" name="nama" id="nama">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $user->alamat; ?>" name="alamat" id="alamat">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">No HP</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $user->hp; ?>" name="hp" id="hp">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tanggal</label>
                                                <div class="col-md-10">
                                                    <input placeholder="Masukkan tanggal laporan" type="date" class="form-control" name="tanggal" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Jenis Surat</label>
                                                <div class="col-md-10">
                                                    <select name="jenis" class="custom-select">
                                                        <option disabled="disabled" selected>Pilih jenis surat</option>
                                                        <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                        <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                                        <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                                                        <option value="Surat Izin Acara">Surat Izin Acara</option>
                                                        <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                                                        <option value="Surat Keterangan Domisili Penduduk">Surat Keterangan Domisili Penduduk</option>
                                                        <option value="Surat Pengantar Pembuatan KTP">Surat Pengantar Pembuatan KTP</option>
                                                        <option value="Surat Pengantar Pembuatan KK">Surat Pengantar Pembuatan KK</option>
                                                        <option value="Surat Keterangan Pindah Tempat">Surat Keterangan Pindah Tempat</option>
                                                        <option value="Surat Keterangan Izin Orang Tua">Surat Keterangan Izin Orang Tua</option>
                                                        <option value="Surat Keterangan Menikah">Surat Keterangan Menikah</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                 <label class="col-md-2 col-form-label">Upload Foto/PDF KTP</label>
                                                 <div class="col-md-10">
                                                     <div class="custom-file">
                                                         <input type="file" name="image" class="custom-file-input" id="image" required data-toggle="tooltip" data-placement="bottom" title="Ukuran maksimal 15 MB">
                                                         <label class="custom-file-label" for="validationCustomFile">Upload foto/pdf KTP *ukuran maksimal 15 MB</label>
                                                     </div>
                                                 </div>
                                             </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Pesan</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" id="elm1" name="pesan">Silahkan isi keperluan atau keterangan lainnya disini</textarea>
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