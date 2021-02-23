<body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="<?=base_url(''); ?>"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="<?=base_url(''); ?>" class="logo"><img src="<?=base_url('assets/'); ?>img/klaten333.ico" height="44" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">Website Resmi Desa Keden</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Silahkan Login untuk melanjutkan.</h5>
                                    <?php 
                                        if($this->session->flashdata('error') !='')
                                        {
                                            echo '<div class="alert alert-danger" role="alert">';
                                            echo $this->session->flashdata('error');
                                            echo '</div>';
                                        }
                                    ?>
                     
                                    <?php 
                                        if($this->session->flashdata('success_register') !='')
                                        {
                                            echo '<div class="alert alert-info" role="alert">';
                                            echo $this->session->flashdata('success_register');
                                            echo '</div>';
                                        }
                                    ?>
                                    <form method="post" class="form-horizontal" action="<?php echo base_url('Auth/proses_login'); ?>">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" class="form-control" name="email" id="email" required>
                                                    <label for="email">Email</label> 
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" name="password" id="password" required>
                                                    <label for="password">Password</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Masuk</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="<?=base_url('Auth/daftar'); ?>" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Belum punya akun? daftar sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>