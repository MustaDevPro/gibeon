<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sigin In Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h1><i class="fas fa-spinner fa-spin text-primary"></i></h1> 
            <h4>Loading</h4>
        </div>
        <div class="row flex-column justify-content-center align-items-center" style="height:90vh;">
            <div class="card card-secondary" style="width:60vh;">
                <?php
                    if(isset($_SESSION['error'])){
                        print "
                        <div class='alert alert-danger text-warning alert-dismissible fade show' role='alert'>
                            <strong>Error:</strong>".$_SESSION['error']."
                        </div>
                        ";
                        unset($_SESSION['error']);
                    }
                ?>
                <div class=" card-header text-center">Gibeon TV</div>
                <form action="./valdate_login.php" class="px-4" method="post">
                    <div class="card-header text-center">
                        <input type="text" name="username" class="form-control my-3" placeholder="Username or Email">
                        <input type="password" name="pasword" class="form-control my-3" placeholder="Enter password">
                    </div>
                    <div class=" card-header text-center">
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </div>
                </form>
            </div>
        </div>






        <!-- Main Footer -->

    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>