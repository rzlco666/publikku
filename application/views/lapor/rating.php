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
                                    <h4 class="page-title mb-1">Beri Rating Laporan</h4>
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
                                            <h5 class="header-title mb-4">Beri Rating Laporan</h5>
                                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Rating/update">
                                            <input type="hidden" name="id_fitur" id="id_fitur" value="<?php echo $lapor->id_fitur; ?>"/>

                                            <div class="form-group row">
                                                <label for="lokasi" class="col-md-2 col-form-label">Rating</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="rating" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Feedback</label>
                                                <div class="col-md-10">
                                                    <?php 

                                                    $feedb = $lapor->feedback;
                                                    if (empty($feedb)) {
                                                        ?> <textarea class="form-control" id="elm1" name="feedback">Berikan saran dan masukkan</textarea> <?php
                                                    }else{
                                                        ?> <textarea class="form-control" id="elm1" name="feedback"><?php echo $lapor->feedback; ?></textarea> <?php
                                                    }

                                                    ?>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-right">
                                                <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo base_url(); ?>Lapor" class="btn btn-warning">Batal</a>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Beri Rating</button>
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