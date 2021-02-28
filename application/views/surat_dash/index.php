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
                                    <h4 class="page-title mb-1">Riwayat Pengajuan Surat</h4>
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
            
                                            <p class="card-title-desc"><a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>Surat/create/">Buat Pengajuan Surat</a>
                                            </p>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Tanggal</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Status</th>
                                                    <th>Waktu Update</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php 
                                                    $no = 1;
                                                    foreach($surat as $row)
                                                    {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row->nama; ?></td>
                                                    <td><?php echo $row->nik; ?></td>
                                                    <td><?php echo $row->tanggal; ?></td>
                                                    <td><?php echo $row->jenis; ?></td>
                                                    <td><?php echo $row->status; ?></td>
                                                    <td><?php echo $row->waktu_update; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>Surat/edit/<?php echo $row->id_surat; ?>" class="btn btn-danger">Edit</a>
                                                        <a href="<?php echo base_url(); ?>Surat/delete/<?php echo $row->id_surat; ?>" class="btn btn-primary">Hapus</a>
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