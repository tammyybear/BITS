<?php

    if(!function_exists('redirectPagewithAlert')){
        function redirectPagewithAlert($page, $message){
        ?>
            <script>
                alert("<?php echo $message; ?>");
                self.location.replace("<?php echo $page ?>");
            </script>
        <?php
        }
    }

    if(!function_exists('redirectPage')){
        function redirectPage($page){
            ?>
            <script>
                self.location.replace("<?php echo $page ?>");
            </script>
            <?php
        }
    }

    if(!function_exists('get_Header')){
        function get_Header(){
            ?>
                <title>BITS | Benificiaries Information Tracking System</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="keywords" content="BITS | Benificiaries Information Tracking" />
                <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                
                <link href="../../framework/core/template/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
                <link href="../../framework/core/template/css/style.css" rel='stylesheet' type='text/css' />
                <link href="../../framework/core/template/css/font-awesome.css" rel="stylesheet"> 
                
                <script src="../../framework/core/template/js/jquery.min.js"> </script>
                <script src="../../framework/core/template/js/bootstrap.min.js"> </script>

                <script src="../../framework/core/template/js/jquery.metisMenu.js"></script>
                <script src="../../framework/core/template/js/jquery.slimscroll.min.js"></script>

                <link href="../../framework/core/template/css/custom.css" rel="stylesheet">
                <script src="../../framework/core/template/js/custom.js"></script>
                <script src="../../framework/core/template/js/screenfull.js"></script>
                <script>
                    $(function () {
                        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
                        if (!screenfull.enabled) {
                            return false;
                        }
                        $('#toggle').click(function () {
                            screenfull.toggle($('#container')[0]);
                        });
                    });
                </script>
            <?php
        }
    }

    
    if(!function_exists('get_SideNav')){
        function get_SideNav(){
            if(isset($_SESSION['role_type'])) {
                if($_SESSION['role_type'] == "Administrator"){
                ?>
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                                </li>
                                <li>
                                    <a href="benificiary.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i><span class="nav-label">Encoding</span> </a>
                                </li>
                                <li>
                                    <a href="evaluation.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i><span class="nav-label">Evaluation</span> </a>
                                </li>
                                <li>
                                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Configuration</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="accounts.php" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i>Accounts</a></li>
                                        <li><a href="programs.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i>Programs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../actions/logout.php" class=" hvr-bounce-to-right"><i class="fa fa-info-circle nav_icon"></i><span class="nav-label">Logout</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                elseif($_SESSION['role_type'] == "Encoder"){
                ?>
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                                </li>
                                <li>
                                    <a href="benificiary.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i><span class="nav-label">Encoding</span> </a>
                                </li>
                                <li>
                                    <a href="../actions/logout.php" class=" hvr-bounce-to-right"><i class="fa fa-info-circle nav_icon"></i><span class="nav-label">Logout</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                elseif($_SESSION['role_type'] == "Evaluator"){
                ?>
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                                </li>
                                <li>
                                    <a href="evaluation.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i><span class="nav-label">Evaluation</span> </a>
                                </li>
                                <li>
                                    <a href="../actions/logout.php" class=" hvr-bounce-to-right"><i class="fa fa-info-circle nav_icon"></i><span class="nav-label">Logout</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
            }
        }
    }

    if(!function_exists('get_Footer')){
        function get_Footer(){
            ?>
                <div class="copy">
                        <p> &copy; 2019 OLFU MIT. All Rights Reserved | Design by <a href="#" target="_blank">TEAM BITS</a> </p>
                </div> 

                <script src="../../framework/core/template/js/jquery.nicescroll.js"></script>
                <script src="../../framework/core/template/js/scripts.js"></script>
            <?php
        }
    }

?>