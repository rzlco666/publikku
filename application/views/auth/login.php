<div class="container">
    <div class="card card-login mx-auto mt-5 ">
      <div class="card-header text-center">Login Masyarakat</div>

<?=$this->session->flashdata('message') ?>

      <div class="card-body">
        <form action = "<?=base_url('auth') ?>" method="POST">
                <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                <?=form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>


                <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <?=form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>


                <button name="login_btn" class="btn btn-primary btn-block" type="submit" value="login">Login</button>
                <div class="text-center">
                <a class="d-block small mt-3" href="<?=base_url('auth/regist'); ?>">Register akun</a>
                </div>
        </form>
    </div>
    </div>
</div>