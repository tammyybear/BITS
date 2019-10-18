<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $roster_id = $_GET['id'];

    if(countResult($conn, "SELECT * FROM `tbl_swd_availment` WHERE roster_id = '$roster_id' and (availment_status = 'Pending' or availment_status = 'Rejected')") == 1){
        updateDatabase($conn, "DELETE FROM `tbl_swd_availment` WHERE roster_id = '$roster_id'");
        updateDatabase($conn, "DELETE FROM `tbl_household_roster` WHERE roster_id = '$roster_id'");
        updateDatabase($conn, "DELETE FROM `tbl_roster` WHERE roster_id = '$roster_id'");
        redirectPageWithAlert("../views/benificiary.php", "Benificiary Successfully Remove");
    }else{
    redirectPageWithAlert("../views/benificiary.php", "Error. Benificiary Have Already Approved Availment. Please Check");
    }

?>