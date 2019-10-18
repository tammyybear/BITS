<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $program_id = $_GET['id'];

        if(updateDatabase($conn, "DELETE FROM `tbl_program` WHERE program_id='$program_id'") == 1){
            redirectPageWithAlert("../views/programs.php", "Program Successfully Remove");
        }else{
        redirectPageWithAlert("../views/programs.php", "Error. Please Try Again");
    }

?>