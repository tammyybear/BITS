<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/database_functions.php";
    include "../controllers/encoder_functions.php";

    $roster_id = $_GET['id'];
    $rejected = 'Rejected';

    if(updateDatabase($conn, "UPDATE tbl_swd_availment set availment_status = '$rejected' where roster_id = '$roster_id'") == 1){
        redirectPageWithAlert("../views/evaluation-pending.php", "Benificiary Availment Successfully Updated");
    }else{
        redirectPageWithAlert("../views/evaluation-pending.php", "Error. Please Try Again");
    }

?>