<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from egemem.com/theme/kode/v1.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2016 15:12:53 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Login untuk member VampireSSH">
  <meta name="keywords" content="login VampireSSH" />
  <title>Login | VampireSSH</title>

  <!-- ========== Css Files ========== -->
  <link href="<?php echo site_url();?>assets/backend/css/root.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>
    <div class="login-form">
      <form action="<?php echo site_url('login/signin');?>" method="POST">
        <div class="top">
          <img src="img/kode-icon.png" alt="icon" class="icon">
          <h1>Login</h1>
          <h4><a href="<?php echo site_url();?>">VampireSSH.com</a></h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email anda" required>
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <i class="fa fa-key"></i>
          </div>
          <center>
              <?php echo $this->recaptcha->render(); ?>
              <br>
               <?php
                if(!empty($pesan) || !empty(validation_errors()))
                {
                ?>
                    <div class="alert alert-danger">
                        <center>
                            <?php
                            if(!empty($pesan))
                            {
                                echo $pesan;
                            }
                            if(!empty(validation_errors()))
                            {
                                echo validation_errors();
                            }
                            ?>
                        </center>
                    </div>
                <?php
                }
                if(!empty($result))
                {
                    ?>
                    <div class="alert alert-success">
                        <center>
                            <?php
                            echo $result;
                            ?>
                        </center>
                    </div>
                    <?php
                }
                ?>
          </center>
          <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>
</body>

<!-- Mirrored from egemem.com/theme/kode/v1.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2016 15:12:54 GMT -->
</html>