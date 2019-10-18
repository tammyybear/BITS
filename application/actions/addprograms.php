<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $programname = $_POST['programname'];
    $programdesc = $_POST['programdesc'];
    $programamt = $_POST['programamt'];
    
    if(countResult($conn, "SELECT * from tbl_program where program_name = '$programname' and program_description = '$programdesc' and program_amount = '$programamt'") == 1){
        redirectPageWithAlert("add_user.php", "addprograms. Please Try Again");
    }else{
        if(updateDatabase($conn, "INSERT INTO tbl_program(program_name, program_description, program_amount) VALUES ('$programname', '$programdesc', '$programamt')") == 1){
            redirectPageWithAlert("../views/programs.php", "Program Successfully Added");
        }else{
            redirectPageWithAlert("../views/addprograms.php", "Error. Please Try Again");
        }
    }
    

?>