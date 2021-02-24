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
                                    <h4 class="page-title mb-1">Profil</h4>
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

                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="<?=base_url('assets_user/'); ?>images/widget-img.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title font-size-16 mt-0 text-center"><?php echo $user->username; ?></h4>
                                                        <p class="card-text">
                                                            <table>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>:</td>
                                                                    <td><?php echo $user->alamat; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>NIK (KTP)</td>
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
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Update Profil</h5>
                                            <form method="post" action="<?php echo base_url(); ?>Profil/update">

                                            <div class="form-group row">
                                                <label for="username" class="col-md-2 col-form-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
                                                    <input class="form-control" type="text" value="<?php echo $user->username; ?>" name="username" id="username">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $user->alamat; ?>" name="alamat" id="alamat">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="KTP" class="col-md-2 col-form-label">NIK (KTP)</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="<?php echo $user->KTP; ?>" name="KTP" id="KTP">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" value="<?php echo $user->email; ?>" name="email" id="email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="password" value="<?php echo $user->password; ?>" name="password" id="password">
                                                </div>
                                            </div>

                                            <div class="mt-4 text-right">
                                                <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo base_url(); ?>Profil" class="btn btn-warning">Batal</a>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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