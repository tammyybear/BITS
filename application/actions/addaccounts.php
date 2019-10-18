<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $family_name = $_POST['familyname'];
    $name_extension = $_POST['extensionname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];

    if($password == $repeatpassword){
        if(countResult($conn, "SELECT * from tbl_userprofile where first_name = '$first_name' and family_name = '$family_name' and middle_name = '$middle_name'") == 1){
            redirectPageWithAlert("add_user.php", "Error. Please Try Again");
        }else{
            if(updateDatabase($conn, "INSERT into tbl_userprofile(first_name, middle_name, family_name, extension_name, role, user_name, user_password, email_add) VALUES ('$first_name', '$middle_name', '$family_name', '$name_extension', '$role', '$username', '$repeatpassword', '$email')") == 1){
                redirectPageWithAlert("../views/accounts.php", "User Successfully Added");
            }else{
                redirectPageWithAlert("../views/addaccounts.php", "Error. Please Try Again");
            }
        }
    }else{
        redirectPageWithAlert("../views/addaccounts.php", "Error. Please Try Again");
    }

?>