<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/admin_functions.php";
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
                            <a href="dashboard.php">Home</a>
                            <i class="fa fa-angle-right"></i>
                            <span>Dashboard</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    
		            <!--content-->
                    <div class="content-top">
                        <div class="col-md-5">
                            <div class="content-top-1">
                                <div class="col-md-6 top-content">
                                    <h5>Pending Availments</h5>
                                    <label><?php echo countBenificiaries($conn, 'Pending') ?></label>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="content-top-1">
                                <div class="col-md-6 top-content">
                                    <h5>Approved Availments</h5>
                                    <label><?php echo countBenificiaries($conn, 'Approve') ?></label>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="content-top-1">
                                <div class="col-md-6 top-content">
                                    <h5>Rejected Availments</h5>
                                    <label><?php echo countBenificiaries($conn, 'Rejected') ?></label>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <?php CalendarToday() ?>
                        </div>
                        
                    </div>

                    <!-- faq-->
                    <div class="blank"> </div>
                    <!--//faq -->

                    <?php get_Footer() ?>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </body>
</html>

