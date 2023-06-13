<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- plugins:css -->
 <!-- plugins:css -->
 <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/fonts/vendors/feather/feather.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/fonts/vendors/ti-icons/css/themify-icons.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/fonts/vendors/css/vendor.bundle.base.css' ?>">
    
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/css/vertical-layout-light/style.css' ?>">

</head>

<body>

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <h3 class="font-weight-light text-center">M.R. Vivekananda Modern School</h3>
                            <img src="<?php echo base_url() ?>assets/admin/images/logo.png" alt="logo">
                        </div>
                     
                        <h3 class="font-weight-light text-center">Sign in to continue.</h3>
                        <form class="pt-3" method="post"  name="loginform" id="loginform">
                        <?php 
                        $msg=$this->session->flashdata('msg');
                        if($msg != ""){
                            ?>
                            <div class="">
                                <?php echo $msg;?>
                            </div>
                            <?php
                        }
                        ?>    
                        <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                            <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN IN" name="login" >
                               
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php base_url() . 'assets/admin/js/off-canvas.js' ?>"></script>
<script src="<?php base_url() . 'assets/admin/js/hoverable-collapse.js' ?>"></script>
<script src="<?php base_url() . 'assets/admin/js/template.js' ?>"></script>
<script src="<?php base_url() . 'assets/admin/js/settings.js' ?>"></script>
<script src="<?php base_url() . 'assets/admin/js/todolist.js' ?>"></script>
    <!-- endinject -->
</body>


</html>