<?php
    include "../controllers/database_functions.php";
    include "../config/connection.php";
    include "../controllers/basic_functions.php";

    $roster_id = $_GET['id'];

    if(countResult($conn, "SELECT * from tbl_swd_availment where roster_id = '$roster_id' and availment_status = 'Pending'") == 1){
        redirectPageWithAlert("../views/benificiary.php", "Availment Already Request. Pending Status");
    }elseif(countResult($conn, "SELECT * from tbl_swd_availment where roster_id = '$roster_id' and availment_status = 'Approve'") == 1){
        redirectPageWithAlert("../views/benificiary.php", "Availment Already Approved");
    }elseif(countResult($conn, "SELECT * from tbl_swd_availment where roster_id = '$roster_id' and availment_status = 'Rejected'") == 1){
        if(updateDatabase($conn, "UPDATE tbl_swd_availment set availment_status = 'Pending' where roster_id = '$roster_id'") == 1){
            redirectPageWithAlert("../views/benificiary.php", "Availment Request Successfully Added");
        }
    }else {
        if(updateDatabase($conn, "INSERT INTO tbl_swd_availment(roster_id) VALUES ('$roster_id')") == 1){
            redirectPageWithAlert("../views/benificiary.php", "Availment Request Successfully Added");
        }else{
            redirectPageWithAlert("../actions/addavailment.php?id=$roster_id", "Error. Please Try Again");
        }
    }
?>