<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $user_id = $_GET['id'];

        if(updateDatabase($conn, "DELETE FROM `tbl_userprofile` WHERE user_id='$user_id'") == 1){
            redirectPageWithAlert("../views/accounts.php", "User Successfully Remove");
        }else{
        redirectPageWithAlert("../views/accounts.php", "Error. Please Try Again");
    }

?>