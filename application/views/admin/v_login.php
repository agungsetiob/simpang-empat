<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Pemerintah Kabupaten Tanah Bumbu</title>
        <link rel="icon" href="<?php echo base_url();?>/assets/images/logo-tanbu.png" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/logo-tanbu.png" type="image/x-icon">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets-2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets-2/plugins/font-awesome/css/all.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>/assets-2/css/connect.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets-2/css/dark_theme.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets-2/css/custom.css" rel="stylesheet">

    </head>
    <body class="auth-page sign-in">
        

        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col">
                                    <div class="logo-box"><a href="#" class="logo-text">Login Admin</a></div>
                                    <form action="<?php echo base_url();?>login" method ="post">
                                        <div class="form-group">
                                            <input type="text" name= "username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" value="" id="defaultCheck1" onclick="myFunction()">
                                            <label class="custom-control-label" for="defaultCheck1">
                                                Tampilkan Password
                                            </label>
                                        </div>
                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("password");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "password";
                                                }
                                            }
                                        </script>
                                        <button type="submit" class="btn btn-primary btn-block btn-submit">Log In</button>
                                        <!-- <div class="auth-options">
                                            <div class="custom-control custom-checkbox form-group">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                            <a href="#" class="forgot-link">Forgot Password?</a>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="<?php echo base_url();?>/assets-2/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>/assets-2/js/connect.min.js"></script>
    </body>

</html>