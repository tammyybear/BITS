<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/database_functions.php";
    include "../controllers/user_functions.php";

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if (empty($username) || empty($password)){
        redirectPagewithAlert("../../index.php", "Please enter credentials  to continue");
    }else{
        if(countResult($conn, "SELECT * from tbl_admin where username = '$username' and password = '$password'") == 1){
            $_SESSION['user'] = $username;
            $_SESSION['role_type'] = "Administrator";
            redirectPagewithAlert("../views/dashboard.php", "Welcome Administrator");
        }elseif (countResult($conn, "SELECT * from tbl_userprofile where user_name = '$username' AND user_password = '$password'") == 1){
            $_SESSION['user'] = $username;
            $role_type = getUserDetailsByUsername($conn, $username)[8];
            if ($role_type == "Encoder"){
                $_SESSION['role_type'] = $role_type;
                redirectPagewithAlert("../views/dashboard.php", "Welcome Encoder");
            }elseif ($role_type == "Evaluator"){
                $_SESSION['role_type'] = $role_type;
                redirectPagewithAlert("../views/dashboard.php", "Welcome Evaluator");
            }
        }else{
            redirectPagewithAlert("../../index.php", "Invalid Username/Password");
        }
    }
?>