<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gibeon Tv</title>
    <!-- [ FONT-AWESOME ICON ] 
=========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

    <!-- [ PLUGIN STYLESHEET ]
=========================================================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- [ Boot STYLESHEET ]
=========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

    <!-- [ DEFAULT STYLESHEET ] 
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/color/rose.css">
    <style>
    .home-products {
        display: flex;
        grid-gap: 3;
    }

    .home-products>div {
        background: teal;
        border-radius: 6px;
    }

    @media screen and (max-width:990px) {
        #bs-example-navbar-collapse-1 .navbar-nav li {
            background: #000;
        }

        #bs-example-navbar-collapse-1 .navbar-nav li a h3 {
            color: white;
        }

    }
    </style>
</head>

<body>

    <!-- [ LOADERs ]
================================================================================================================================-->
    <div class="preloader">
        <div class="loader theme_background_color">
            <span></span>
        </div>
    </div>

    <!-- [ /PRELOADER ]
=============================================================================================================================-->

    <!-- [WRAPPER ]

=============================================================================================================================-->
    <div class="wrapper">

        <!-- [NAV]
    ============================================================================================================================-->
        <!-- Navigation
        ==========================================-->

        <?php require_once "navbar.php"; ?>

        <!-- [/NAV]
    ============================================================================================================================-->

        <!-- [/MAIN-HEADING]
    ============================================================================================================================-->
        <section class="main-heading">
        </section>

        <div class="row"
            style="background:linear-gradient(to right, blue, purple);margin:0px 0px; padding:2rem 2rem; position:relative;">
            <div class="col-md-5 col-sm-12" style="min-height:70vh;">
                <?php
                if(isset($_GET['params'])){
                    $sql = "SELECT * FROM `posts` WHERE `id` = ".$_GET['params']." AND  `status` = 1 LIMIT 1"; 
                }else{
                    $sql = "SELECT * FROM `posts` WHERE `status` = 1 LIMIT 1"; 
                }
                 $res = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($res)>0){
                    $data = mysqli_fetch_array($res);
                    print "<img src='assets/images/".$data['image']."' width='100%'>";
                    ?>
                <div style="background:rgba(0,0,0,.6);padding-bottom:1rem;" class="text-center">
                    <?php print $data['description'];?><br />
                    <a href="buy.php?price=<?php print $data['price'];?>&desc=<?php print $data['description'];?>"
                        target="_blank" class="btn btn-success" style="border:none;border-radius:50px">
                        Buy Ticket at <?php print $data['price'];?> Rwf</a>
                </div>
                <?php
                 }else{
                ?>
                <div style="
                background:rgba(0,0,0,.6);
                height: 60vh;
                width:100%;
                border-radius: 5px;
                display: flex;
                justify-content:center;
                align-items: center;
                ">
                    <div style="font-size: 25px;">There is no active event currently</div>
                </div>
                <?php
                 }
                 ?>
            </div>
            <div class="col-md-7 col-sm-12 d-flex">
                <div
                    style="display:flex;justify-content:space-between;background:rgba(0,0,0,.6); margin-bottom: 4px; padding: 1rem;">
                    <div>More Events</div>
                    <div>
                        <ul style="display:flex;justify-content:space-between;">
                            <li><a href="services.php?catype=gospal" class="btn btn-primary"
                                    style="border-radius:50px; margin-right:2px;">Gospel
                                    concert</a></li>
                            <li><a href="services.php?catype=basket" class="btn btn-primary"
                                    style="border-radius:50px; margin-right:2px;">Basket
                                    Ball</a></li>
                            <li><a href="services.php?catype=fifa" class="btn btn-primary"
                                    style="border-radius:50px; marigin-right:2px;">FiFA</a></li>
                        </ul>
                    </div>
                </div>
                <?php
                 $sql = "SELECT * FROM `posts`"; 
                //  $sql = "SELECT * FROM `posts` WHERE `id` = ".$_GET['params']." AND  `status` = 1 LIMIT 1"; 
                 $res = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($res)>0){
                    while($data = mysqli_fetch_array($res)){
                    ?>
                <a href="services.php?params=<?php print $data['id'];?>">
                    <div style="
                        background:rgba(0,0,0,.6);
                        height: 20vh;
                        width:100%;
                        border-radius: 5px;
                        display: flex;
                        justify-content:start;
                        margin-bottom:2px;
                        overflow:hidden;
                    ">
                        <div style="font-size: 25px;height: 20vh;">
                            <img src="assets/images/<?php print $data['image'] ?>" height="100%" width='150'>
                        </div>
                        <div style="font-size: 18px; margin-left: 1rem; color: #fff;">
                            <?php print $data['description'];?><br />

                        </div>
                    </div>
                </a>
                <?php
                    }
                 }else{
                    ?>
                <div style="
                background:rgba(0,0,0,.6);
                height: 20vh;
                width:100%;
                border-radius: 5px;
                display: flex;
                justify-content:center;
                align-items: center;
                ">
                    <div style="font-size: 25px;">There is no active event currently</div>
                </div>
                <?php
                 }
                 ?>

            </div>
        </div>
        <!-- </section> -->


        <!-- [/MAIN-HEADING]
    ============================================================================================================================-->

        <!-- [INSPIRATION]
    ============================================================================================================================-->



        <!-- [/INSPIRATION]
    ============================================================================================================================-->

        <!-- [/about]
    ==================================================================================================================-->


        <?php require_once "footer.php"; ?>


        <!-- [/about]
    ========================================================================================================== -->

        <!-- [FOOTER]
    ============================================================================================================================-->
        <footer class="site-footer section-spacing text-center " id="eight">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li>
                                <p class="footer-links"><a href="#" style="color:#000;">Terms of Use</a>
                                    <a href="#" style="color:#000;">Privacy Policy</a>
                                </p>
                            </li>
                            <li><a href="to:+250787328089" style="color:#000;">If you need your own Website
                                    contact
                                    me</a></li>
                            <li><a href="to:+250787328089" style="color:#000;">+250787328089</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4"> <small style="color:#000;">&copy; 2022 Hillwood Empire
                            reserved.</small>
                    </div>
                    <div class="col-md-4">
                        <!--social-->
                        <ul class="social">
                            <li><a href="https://twitter.com/MustaphaIconic?t=kCyzop4wvjXIxraGBNDR6g&s=09"
                                    target="_blank"><i class="fa fa-twitter "></i></a></li>
                            <li><a href="https://www.youtube.com/c/Gibeonchristiantv" target="_blank"><i
                                        class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/laosshivan" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/+250787328089?text=I'm%20interested%20in%20your%20Web%20for%20Development"
                                    target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                        <!--social end-->
                    </div>
                </div>
            </div>
        </footer>

        <!-- [/FOOTER]
    ============================================================================================================================-->
    </div>

    <!-- [ /WRAPPER ]
=============================================================================================================================-->

    <!-- [ DEFAULT SCRIPT ] -->

    <script src="library/modernizr.custom.97074.js"></script>
    <script src="library/jquery-1.11.3.min.js"></script>
    <script src="library/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- [ PLUGIN SCRIPT ] -->

    <script src="library/vegas/vegas.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- [ TYPING SCRIPT ] -->

    <script src="js/typed.js"></script>

    <!-- [ COUNT SCRIPT ] -->

    <script src="js/fappear.js"></script>
    <script src="js/jquery.countTo.js"></script>

    <!-- [ SLIDER SCRIPT ] -->

    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>


    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>
</body>

</html>

</html>