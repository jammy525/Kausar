
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  <?php if(isset($head)){
      echo $head;
  }
  ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
            <div class="login-logo">
                <a href=""><b>O</b> <span>L</span> S</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg msg">Sign in to start your session</p>

                <form action="<?php echo base_url().'admin/process/login';?>" method="post" id='login' data-toggle="validator" role="form">
                    <div class="form-group">
                        
                        <input type="email" name="username" class="form-control" id="username" placeholder="Please enter your email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" class="form-control" id="password" placeholder="Please enter your password" data-error="Enter your password" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-box-body -->

        </div>
<!-- /.login-box -->
<?php if(isset($footerscript)){
    echo $footerscript;
}
?>
<script src="<?php echo base_url();?>control/js/login.js"></script>


</body>
</html>
