<?php
    require_once "includes/functions/config.php";
    blockUrlHackers();

?>
<?php require_once "includes/templates/header.php"; ?>
<body data-col="1-column" class=" 1-column  blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper"><!--Registration Page Starts-->
    <section id="registration">
        <div class="container-fluid">
            <div class="row full-height-vh">
                <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                    <div class="card px-4 py-2 box-shadow-2">
                        <div class="card-header text-center">
                            <img src="../assets/images/madueke/icon.png" alt="logo" class="mb-3 animated fadeInUp" width="50%" style="border: 3px solid gray; border-radius: 80px;">
                            <h4 class="text-uppercase text-bold-500 grey darken-1">Add Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block mx-auto">

                                <form method="post" action="" id="admin_form">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-lg" name="name" id="fname" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-lg" name="email" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-lg" name="password" id="inputPass" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" id="submit_btn" class="btn btn-danger text-bold-600 px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Add Admin</button>
                                    </div>
                                    <hr>
                                    <div class="form-group text-center col-sm-offset-1">
                                        <label class="pl-2" for="terms">Return to <a href="index">Dashboard</a></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Registration Page Ends-->
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<script src="polling/js/add_admin.js"></script>
<?php require_once "includes/templates/footer.php"; ?>