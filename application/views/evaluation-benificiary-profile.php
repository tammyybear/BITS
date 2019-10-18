<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/encoder_functions.php";
    include "../controllers/evaluator_functions.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php get_header() ?>
    </head>
    <body>
        <div id="wrapper">

            <nav class="navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <h1> <a class="navbar-brand" href="dashboard.php">BITS</a></h1>         
                </div>
                <div class=" border-bottom">
                    <div class="full-left">
                        <div class="clearfix"> </div>
                    </div>
                    <div class="drop-men" > </div>
                    <div class="clearfix"> </div>
            
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <?php get_SideNav() ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">

                    <!--banner-->	
                    <div class="banner">
                        <h2>
                            <a href="evaluation.php">Evaluation</a>
                            <i class="fa fa-angle-right"></i>
                            <span>Benificiary Profile</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    
                    <!--content-->
                    <?php evaluationProfile($conn) ?>
                    <!--//content-->

                    <?php get_Footer() ?>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </body>
</html>

