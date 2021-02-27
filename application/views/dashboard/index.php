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
                                            <div id="yearly-sale-chart" class="apex-charts"></div>
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