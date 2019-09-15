<?php
  if(session_id() == '' || !isset($_SESSION)) {
    session_start();
  }
  if (isset($_SESSION['admin'])) {
        header('location:home');
    }
?>

<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-10 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 row justify-content-center">
                <div class="col-lg-9">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            <?php
                                if (!empty($msg)) {
                                    echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
                                 }
                            ?>
                        </div>
                        <form class="user" method="POST">
                            <div class="form-group">
                                <input type="username" name="username" class="form-control form-control-user" id="username" aria-describedby="userHelp" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" name="remeber" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                </div>
                            </div>
                            <button class="btn btn-primary bg-user btn-block" name="login">Login</button>
                            <hr>
                            <a href="index.html" class="btn bg-google bg-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Login with Google
                            </a>
                            <a href="index.html" class="btn bg-facebook bg-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="register.html">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
