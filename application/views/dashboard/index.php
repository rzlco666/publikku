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
                        <h4 class="page-title mb-1">Dashboard</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Selamat Datang di Website Resmi Desa Keden</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h5><?php echo $user->username; ?></h5>
                                        <p class="text-muted">
                                        <table>
                                            <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td><?php echo $user->KTP; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td><?php echo $user->alamat; ?></td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>:</td>
                                                <td><?php echo $user->hp; ?></td>
                                            </tr>
                                        </table>
                                        </p>

                                        <div class="mt-4">
                                            <a href="<?php echo base_url(); ?>Profil/edit/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-primary btn-sm">Ubah Profil <i class="mdi mdi-arrow-right ml-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-transparent p-3">
                                <h5 class="header-title mb-0">Statistik Pelaporan</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media my-2">

                                        <div class="media-body">
                                            <p class="text-muted mb-2">Jumlah Total Laporan</p>
                                            <h5 class="mb-0"><?php echo $laporan->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-layer-group"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Laporan Sedang Diperiksa</p>
                                            <h5 class="mb-0"><?php echo $laporan3->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-analytics"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Laporan Sedang Diproses</p>
                                            <h5 class="mb-0"><?php echo $laporan2->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-ruler"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Laporan Telah Selesai</p>
                                            <h5 class="mb-0"><?php echo $laporan4->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-box"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Jumlah Aspirasi</p>
                                            <h5 class="mb-0"><?php echo $laporan5->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-comment-alt-dots"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Jumlah Pelaporan</p>
                                            <h5 class="mb-0"><?php echo $laporan6->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-align-alt"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-4">Form Laporan</h5>
                                <p class="card-title-desc">Desa Keden melayani pelaporan online dari masyarakat</p>
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Lapor/save">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Isi Laporan</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="elm1" name="isi">Jelaskan hal yang ingin dilaporkan</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lokasi" class="col-md-2 col-form-label">Lokasi</label>
                                        <div class="col-md-10">
                                            *Masukan Lokasi kejadian RT/RW dan dan titik tepatnya kejadian (contoh : Dk Krangkeng RT 01 RW 05, Depan Masjid AN-Nur)
                                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
                                            <input class="form-control" type="text" name="lokasi" id="lokasi">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Tanggal</label>
                                        <div class="col-md-10">
                                            <input placeholder="Masukkan tanggal laporan" type="date" class="form-control" name="tanggal" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Foto atau Video</label>
                                        <div class="col-md-10">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image" required data-toggle="tooltip" data-placement="bottom" title="Ukuran maksimal 15 MB">
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
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Laporkan</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header bg-transparent p-3">
                                <h5 class="header-title mb-0">Statistik Pengajuan Surat</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media my-2">

                                        <div class="media-body">
                                            <p class="text-muted mb-2">Jumlah Total Pengajuan Surat</p>
                                            <h5 class="mb-0"><?php echo $surat->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-layer-group"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Pengajuan Surat Sedang Diperiksa</p>
                                            <h5 class="mb-0"><?php echo $surat3->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-analytics"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Pengajuan Surat Sedang Diproses</p>
                                            <h5 class="mb-0"><?php echo $surat2->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-ruler"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Pengajuan Surat Telah Selesai</p>
                                            <h5 class="mb-0"><?php echo $surat4->total; ?></h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-box"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-4">Form Pengajuan Surat</h5>
                                <p class="card-title-desc">Desa Keden melayani pengajuan surat online dari masyarakat</p>
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Surat/save">

                                    <div class="form-group row">
                                        <label for="lokasi" class="col-md-2 col-form-label">NIK</label>
                                        <div class="col-md-10">
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
                                                <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                                                <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
                                                <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                                                <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                                                <option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
                                                <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                                                <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
                                            </select>
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