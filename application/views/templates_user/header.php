<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Desa Keden</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Website Resmi Desa Keden" name="description" />
        <meta content="Desa Keden" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/'); ?>img/klaten333.ico">

        <!-- Bootstrap Rating css -->
        <link href="<?=base_url('assets_user/'); ?>libs/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css" />

        <!-- datepicker -->
        <link href="<?=base_url('assets_user/'); ?>libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="<?=base_url('assets_user/'); ?>libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- DataTables -->
        <link href="<?=base_url('assets_user/'); ?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets_user/'); ?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?=base_url('assets_user/'); ?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?=base_url('assets_user/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url('assets_user/'); ?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url('assets_user/'); ?>css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body style="overflow: scroll;" data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?=base_url(''); ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=base_url('assets/'); ?>img/klaten333.ico" height="22" alt="logo">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=base_url('assets_user/'); ?>images/logo-dark2.png" alt="" height="40">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=base_url('assets/'); ?>img/klaten333.ico" height="22" alt="logo">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=base_url('assets_user/'); ?>images/logo-light2.png" alt="" height="40">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <a href="<?=base_url(''); ?>"><i class="mdi mdi-home-variant"></i></a>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?=base_url('assets_user/'); ?>images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $user->username; ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo base_url('Profil'); ?>"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>Profil/edit/<?php echo $this->session->userdata('id_user'); ?>"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('Auth/logout'); ?>"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>

            </header>