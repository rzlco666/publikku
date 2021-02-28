            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?=base_url('Dashboard'); ?>" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-upload-alt"></i></div>
                        
                                    <span>Lapor</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?=base_url('Lapor/create'); ?>">Buat Laporan</a></li>
                                    <li><a href="<?=base_url('Lapor'); ?>">Riwayat Laporan</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-document-layout-left"></i></div>
                        
                                    <span>Pengajuan Surat</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?=base_url('Surat/create'); ?>">Buat Pengajuan Surat</a></li>
                                    <li><a href="<?=base_url('Surat'); ?>">Riwayat Pengajuan Surat</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url('Profil'); ?>" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-cube"></i></div>
                                    <span>Profil</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->