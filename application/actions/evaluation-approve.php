<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/evaluator_functions.php";
    include "../controllers/admin_functions.php";

    $roster_id = $_GET['id'];
    $program_id = $_POST['program_id'];
    $availment_description = getProgramDetailsById($conn, $program_id)[2];
    $availment_amount = getProgramDetailsById($conn, $program_id)[3];
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $availment_date = $date;
    $availment_status = 'Approve';

    if(updateDatabase($conn, "UPDATE tbl_swd_availment set program_id = '$program_id', availment_description = '$availment_description', availment_amount = '$availment_amount', availment_date = '$date', availment_status = '$availment_status'  where roster_id = '$roster_id'") == 1){
        redirectPageWithAlert("../views/evaluation-pending.php", "Availment Successfully Approved");
    }else{
        redirectPageWithAlert("../views/evaluation-pending.php", "Error. Please Try Again");
    }
?>