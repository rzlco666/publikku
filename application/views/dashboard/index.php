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
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td><?php echo $user->alamat; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td><?php echo $user->KTP; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>:</td>
                                                                <td><?php echo $user->email; ?></td>
                                                            </tr>
                                                        </table>
                                                    </p>

                                                    <div class="mt-4">
                                                        <a href="<?php echo base_url(); ?>Profil/edit/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-primary btn-sm">Ubah Profil <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="<?=base_url('assets_user/'); ?>images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Monthy sale Report</h5>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">This month Sale</p>
                                                    <h4>$ 13,425</h4>
                                                </div>
                                                <div dir="ltr" class="ml-2">
                                                    <input data-plugin="knob" data-width="56" data-height="56" data-linecap=round data-displayInput=false
                                                    data-fgColor="#f15959" value="56" data-skin="tron" data-angleOffset="56"
                                                    data-readOnly=true data-thickness=".17" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted">Sale status</p>
                                                    <h5 class="mb-0"> + 12 % <span class="font-size-14 text-muted ml-1">From previous period</span></h5>
                                                </div>

                                                <div class="align-self-end ml-2">
                                                    <a href="#" class="btn btn-primary btn-sm">View more</a>
                                                </div>
                                            </div>
                                        </div>
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
                                                <label class="col-md-2 col-form-label">Foto</label>
                                                <div class="col-md-10">
                                                    <div class="custom-file">
                                                        <input type="file" name="foto" class="custom-file-input" id="validationCustomFile" required>
                                                        <label class="custom-file-label" for="validationCustomFile">Upload foto</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-right">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Laporakan</button>
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