<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/database_functions.php";
    include "../controllers/encoder_functions.php";

    $household_id = $_GET['id'];
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $family_name = $_POST['familyname'];
    $relationship = $_POST['relationship'];
    $extension_name = $_POST['extensionname'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday']; 
    $purok_sitio = $_POST['purok'];
    $psgc_barangay = $_POST['barangay'];
    $psgc_city_municipality = $_POST['city'];
    $psgc_province = $_POST['province'];
    $psgc_region = $_POST['region'];

    if(updateDatabase($conn, "UPDATE tbl_household_roster set first_name = '$first_name', middle_name = '$middle_name', family_name = '$family_name', extension_name = '$extension_name', relationship = '$relationship', birthdate = '$birthday', sex = '$sex', purok_sitio = '$purok_sitio', psgc_barangay = '$psgc_barangay', psgc_city_municipality = '$psgc_city_municipality', psgc_province = '$psgc_province', psgc_region = '$psgc_region' where household_id = '$household_id'") == 1){
        redirectPageWithAlert("../views/benificiary.php", "Household Profile Successfully Updated");
    }else{
        redirectPageWithAlert("../views/edithousehold.php?id=$household_id", "Error. Please Try Again");
    }

?>