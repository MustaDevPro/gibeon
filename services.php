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
    .home-products{
        display: flex;
        grid-gap: 3;
    }
    .home-products>div{
        background: teal;
        border-radius:6px;
    }
    @media screen and (max-width:990px) {
        #bs-example-navbar-collapse-1 .navbar-nav li{
            background: #000;
        }
        #bs-example-navbar-collapse-1 .navbar-nav li a h3{
            color:white;
        }
        
    }

</style>
</head>
<body >

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
    <!-- <section class="main-heading" id="home"  style="background-image:linear-gradient(to right, blue, purple);min-height:100vh;"> -->
        <!-- <div class="overlay" style="background:transparent;margin-top:0px"> -->
            <!-- <div class="container"> -->
               <div class="row" style="background-image:linear-gradient(to right, blue, purple);margin:0px 0px; padding:2rem 2rem">
                    <div class="col-md-5 col-sm-12" style="height:70vh;">
                        <?php
                            $sql = "SELECT * FROM posts WHERE `status`= 1 ORDER BY `time` DESC LIMIT 1";
                            $res = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_array($res);
                            if(mysqli_num_rows($res)>0){
                        ?>
                        <div class="card" style="width:69vh; padding-bottom:1rem;">
                            <div class="card-body" style="text-align:center;">
                                <img src="./assets/images/<?php print $data['image'];?>" width="100%">
                            </div>
                            <div class="card-footer text-center" style="background:rgba(0,0,0,.7);padding-bottom:1rem;">
                                <div class="card-header">
                                    <?php print $data['description'];?>
                                </div>
                                <a href="buy.php?bid=<?php print $data['id'];?>&price=<?php print $data['price'];?>&des=<?php print $data['description'];?>" class="btn btn-success rounded px-4"
                                style="border-radius:4px;">
                                    Buy Ticket <?php print $data['price'];?> Rwf
                                </a>
                            </div>
                        </div>
                        
                    <?php  }else{ ?>
                        <div class="card" style="width:69vh; padding-bottom:1rem;">
                            <div class="card-body" style="text-align:center;height:50vh;">
                                <h1 class="p-5">There is no available pary in this moment</h1>
                            </div>
                            <div class="card-footer text-center" style="background:rgba(0,0,0,.7);padding:5rem;border-radius:10px;">
                                <div class="card-header">
                                    <h2  style="line-height:1.5">Please wait a moment We will inform you later</h2>
                                </div>

                            </div>
                        </div>
                    <?php  } ?>
                    </div>
                    <div class="col-md-7 col-sm-12 d-flex">
                        <?php
                        $sql = "SELECT * FROM posts ORDER BY `time` DESC LIMIT 10";
                        $res = mysqli_query($conn,$sql);
                        while($data = mysqli_fetch_array($res)){
                        ?>
                          <div class="card" style="padding-bottom:1rem; display:flex;">
                            <div class="card-body bg-dark" style="text-align:center;">
                                <img src="./assets/images/<?php print $data['image'];?>" width="200px">
                            </div>
                            <div style="padding:0rem 0rem 2rem 2rem;width:120vh;">
                            <?php print $data['description'];?>
                            </div>
                        </div>  
                        <?php
                        }
                        ?>
                        
                       
                        
                    </div>
            </div>
        <!-- </div>   -->
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
                            <a href="#" style="color:#000;">Privacy Policy</a></p>
                        </li>
                        <li><a href="to:+250787328089" style="color:#000;">If you need your own Website contact me</a></li>
                        <li><a href="to:+250787328089" style="color:#000;">+250787328089</a></li>
                    </ul>
                </div>
                <div class="col-md-4"> <small style="color:#000;">&copy; 2022 Hillwood Empire reserved.</small></div>
                <div class="col-md-4"> 
                    <!--social-->
                    <ul class="social">
                        <li><a href="https://twitter.com/MustaphaIconic?t=kCyzop4wvjXIxraGBNDR6g&s=09" target="_blank"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.youtube.com/c/Gibeonchristiantv" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/laosshivan" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://wa.me/+250787328089?text=I'm%20interested%20in%20your%20Web%20for%20Development" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
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