<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $household_id = $_GET['id'];

    if(updateDatabase($conn, "DELETE FROM `tbl_household_roster` WHERE household_id = '$household_id'") == 1){
        redirectPageWithAlert("../views/benificiary.php", "Household Successfully Remove");
    }else{
    redirectPageWithAlert("../views/benificiary.php", "Error. Please Try Again");
    }

?>