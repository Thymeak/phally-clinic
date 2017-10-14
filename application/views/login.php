
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Phally Polyclinic and Maternity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>public/css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="<?php echo base_url() ?>public/css/font-awesome.css" rel="stylesheet">
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
        <script src="<?php echo base_url() ?>public/js/jquery-1.10.2.min.js"></script>
        <!--clock init-->

        <style>
            .error{
                color:red;
            }
        </style>


    </head>
    <body>
        <!--/login-->

        <div class="error_page">
            <!--/login-top-->

            <div class="error-top">
                <h2 class="inner-tittle page">Phally Clinic</h2>
                <div class="login">
                    <h3 class="inner-tittle t-inner">Login</h3>
                    <div class="buttons login">
                        <!-- <ul>
                                <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                                <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                                <div class="clearfix"></div>
                        </ul> -->
                    </div>
                    <?php echo $this->session->flashdata('loginfail'); ?>
                    <?php echo form_open('login') ?>
                    <!-- <form> -->
                    <?php echo form_error('txtusername', '<div class="error">', '</div>'); ?>
                    <input type="text" class="text" value="<?php echo set_value('txtusername') ?>" name="txtusername" placeholder="Username" require>
                    <?php echo form_error('txtpassword', '<div class="error">', '</div>'); ?>
                    <input type="password" name="txtpassword" placeholder="Password" require>
                    <div class="submit"><input type="submit" onclick="myFunction()" value="Login" ></div>
                    <div class="clearfix"></div>

                    <!-- <div class="new">
                            <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
                            <p class="sign">Do not have an account ? <a href="sign.html">Sign Up</a></p>
                            <div class="clearfix"></div>
                    </div> -->
                    <!-- </form> -->
                    <?php echo form_close() ?>
                </div>


            </div>


            <!--//login-top-->
        </div>

        <!--//login-->
        <!--footer section start-->
        <div class="footer">
            <!-- <div class="error-btn">
                                    <a class="read fourth" href="index.html">Return to Home</a>
                                    </div> -->
            <p>&copy 2017. All Rights Reserved | Design by <a href="https://www.facebook.com/techcambo/?fref=ts" target="_blank">Tech Cambo.</a></p>
        </div>
        <!--footer section end-->
        <!--/404-->
        <!--js -->
        <script src="<?php echo base_url() ?>public/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url() ?>public/js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
    </body>
</html>
