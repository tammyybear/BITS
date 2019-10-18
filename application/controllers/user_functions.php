<?php

    if(!function_exists('getUserDetailsByUsername')){
        function getUserDetailsByUsername($conn, $username){
            $users_details = array();
            $query = mysqli_query($conn, "SELECT * from tbl_userprofile where user_name = '$username'");
            while($row = mysqli_fetch_array($query)){
                array_push($users_details, $row['user_id'], $row['user_name'], $row['user_password'], $row['email_add'], $row['first_name'], $row['middle_name'], $row['family_name'], $row['extension_name'], $row['role'], $row['created_at'], $row['updated_at']);
            }
            return $users_details;
        }
    }

?>