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
                                         <img class="card-img-top img-fluid" src="<?= base_url('assets_user/images/users/') . $user->foto ?>" alt="Card image cap">
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
                                             <div class="mt-4 text-right">
                                                 <a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>Profil/upload/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-warning">Ubah Foto</a>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-xl-8">
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="header-title mb-4">Upload Foto</h5>
                                 <?= form_open_multipart('Profil/editf'); ?>

                                 <div class="form-group row">
                                     <label for="berkas" class="col-md-2 col-form-label">Foto</label>
                                     <div class="col-md-10">
                                         <input class="form-control" type="file" id="image" name="image">
                                     </div>
                                 </div>

                                 <div class="mt-4 text-right">
                                     <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                                     <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo base_url(); ?>Profil" class="btn btn-warning">Batal</a>
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