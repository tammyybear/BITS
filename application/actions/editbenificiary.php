<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/database_functions.php";
    include "../controllers/encoder_functions.php";

    $roster_id = $_GET['id'];
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $family_name = $_POST['familyname'];
    $extension_name = $_POST['extensionname'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday'];
    $purok_sitio = $_POST['purok'];
    $psgc_barangay = $_POST['barangay'];
    $psgc_city_municipality = $_POST['city'];
    $psgc_province = $_POST['province'];
    $psgc_region = $_POST['region'];

    if(updateDatabase($conn, "UPDATE tbl_roster set first_name = '$first_name', middle_name = '$middle_name', family_name = '$family_name', extension_name = '$extension_name', birthday = '$birthday', sex = '$sex', purok_sitio = '$purok_sitio', psgc_barangay = '$psgc_barangay', psgc_city_municipality = '$psgc_city_municipality', psgc_province = '$psgc_province', psgc_region = '$psgc_region' where roster_id = '$roster_id'") == 1){
        redirectPageWithAlert("../views/benificiary.php", "Benificiary Profile Successfully Updated");
    }else{
        redirectPageWithAlert("../views/editbenificiary.php?id=$roster_id", "Error. Please Try Again");
    }

?>