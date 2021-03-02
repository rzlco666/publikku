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
                                    <h4 class="page-title mb-1">Riwayat Laporan</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <p class="card-title-desc"><a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>Lapor/create/">Buat Laporan</a>
                                            </p>

                                            <?php 
                                                if($this->session->flashdata('error') !='')
                                                {
                                                    echo '<div class="alert alert-primary" role="alert">';
                                                    echo $this->session->flashdata('error');
                                                    echo '</div>';
                                                }
                                            ?>
                             
                                            <?php 
                                                if($this->session->flashdata('success_ubah') !='')
                                                {
                                                    echo '<div class="alert alert-success" role="alert">';
                                                    echo $this->session->flashdata('success_ubah');
                                                    echo '</div>';
                                                }
                                            ?>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Isi Laporan</th>
                                                    <th>Lokasi</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Deskripsi</th>
                                                    <th>Waktu Update</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php 
                                                    $no = 1;
                                                    foreach($laporan as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row->isi_lapor; ?></td>
                                                    <td><?php echo $row->lokasi; ?></td>
                                                    <td><?php echo $row->tanggal; ?></td>
                                                    <td><?php echo $row->status; ?></td>
                                                    <td><?php echo $row->deskripsi; ?></td>
                                                    <td><?php echo $row->waktu_update; ?></td>
                                                    <td><?php echo $row->foto; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>Lapor/edit/<?php echo $row->id_fitur; ?>" class="btn btn-danger">Edit</a>
                                                        <a href="<?php echo base_url(); ?>Lapor/delete/<?php echo $row->id_fitur; ?>" class="btn btn-primary">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->