<?php
    require_once "includes/functions/config.php";

    if (isset($_POST['submit'])) {
        $result = adminLogin($_POST);
        if ($result === true) {
            redirect_to("index");
        } else {
            $errors = $result;
        }
    }

    if (isset($_COOKIE['admin_password']) && isset($_COOKIE['admin_email'])) {
        $cookie_email = $_COOKIE['admin_email'];
        $cookie_password = $_COOKIE['admin_password'];
    }

?>



<?php require_once "includes/templates/header.php"; ?>
  <body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper"><!--Login Page Starts-->
<section id="login">
    <div class="container-fluid">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                <div class="card px-4 py-2 box-shadow-2 width-400">
                    <div class="card-header text-center">
                        <img src="../assets/images/madueke/icon.png" alt="logo" class="mb-3" width="80">
                        <h4 class="text-uppercase text-bold-400 grey darken-1">Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <form method="post" action="">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-lg" value="<?php if (isset($cookie_email)) : echo $cookie_email; endif; ?>" name="email" id="inputEmail" placeholder="Email Address" required email>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-lg" value="<?php if (isset($cookie_password)) : echo $cookie_password; endif; ?>" name="password" id="inputPass" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-5">
                                                <input type="checkbox" class="custom-control-input" name="rememberMe" checked id="rememberme">
                                                <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer grey darken-1">
                        <div class="text-center mb-1">Forgot Password? <a><b>Reset</b></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Login Page Ends-->
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="app-assets/vendors/js/core/popper.min.js"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="app-assets/vendors/js/prism.min.js"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="app-assets/vendors/js/screenfull.min.js"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="app-assets/js/app-sidebar.js"></script>
    <script src="app-assets/js/notification-sidebar.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>