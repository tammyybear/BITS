<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/user_functions.php";
    include "../controllers/database_functions.php";

    $user_id = $_GET['id'];
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
        if(updateDatabase($conn, "UPDATE tbl_userprofile set first_name = '$first_name', middle_name = '$middle_name', family_name = '$family_name', extension_name = '$name_extension', email_add = '$email', role = '$role', user_name = '$username', user_password = '$repeatpassword' where user_id = '$user_id'") == 1){
            redirectPageWithAlert("../views/accounts.php", "User Successfully Updated");
        }
    }else{
        redirectPageWithAlert("../views/editaccounts.php?id=$user_id", "Error. Please Try Again");
    }

?>