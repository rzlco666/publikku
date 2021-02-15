<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register Akun Masyarakat</div>
      <div class="card-body">

        <form action="<?=base_url('auth/registAdmin') ?>" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="First name" value="<?=set_value('username') ?>">
                  <label for="username">Username</label>
                  <?=form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email address" value="<?=set_value('email') ?>">
              <label for="email">Email</label>
              <?=form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
          </div>
          </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?=set_value('password') ?>">
                  <label for="password">Password</label>
                   <?=form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
              </div>

            </div>
          </div>
          <button type="submit" name="regiterbtn" class="btn btn-primary btn-block" >Register </button>
        </form>


        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url('auth'); ?>">Login Page</a>
        </div>
      </div>
    </div>
  </div>


    <div class = 'table-responsive'>

</body>

</html>