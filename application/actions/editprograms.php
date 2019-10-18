<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $program_id = $_GET['id'];
    $programname = $_POST['programname'];
    $programdesc = $_POST['programdesc'];
    $programamt = $_POST['programamt'];

    if(updateDatabase($conn, "UPDATE tbl_program set program_name = '$programname', program_description = '$programdesc', program_amount = '$programamt' where program_id = '$program_id'") == 1){
        redirectPageWithAlert("../views/programs.php", "Program Successfully Updated");
    }else{
    redirectPageWithAlert("../views/editprograms.php?id=$program_id", "Error. Please Try Again");
    }

?>