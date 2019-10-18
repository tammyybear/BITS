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
    $relationship = $_POST['relationship'];
    $extension_name = $_POST['extensionname'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday'];
    $purok_sitio = $_POST['purok'];
    $psgc_barangay = $_POST['barangay'];
    $psgc_city_municipality = $_POST['city'];
    $psgc_province = $_POST['province'];
    $psgc_region = $_POST['region'];

    if(countResult($conn, "SELECT * from tbl_household_roster where first_name = '$first_name' and family_name = '$family_name' and middle_name = '$middle_name' and roster_id = '$roster_id'") == 1){
        redirectPageWithAlert("../views/addhousehold.php?id=$roster_id", "Error. Household Found. Please Try Again");
    }else{
        if(updateDatabase($conn, "INSERT INTO tbl_household_roster(roster_id, first_name, middle_name, family_name, extension_name, relationship, birthdate, sex, purok_sitio, psgc_barangay, psgc_city_municipality, psgc_province, psgc_region) VALUES ('$roster_id', '$first_name', '$middle_name', '$family_name', '$extension_name', '$relationship', '$birthday', '$sex', '$purok_sitio', '$psgc_barangay', '$psgc_city_municipality', '$psgc_province', '$psgc_region')") == 1){
                redirectPageWithAlert("../actions/addavailment.php?id=$roster_id", "Household Successfully Added");
        }else{
            redirectPageWithAlert("../views/addhousehold.php?id=$roster_id", "Error. Please Try Again");
        }
    }

?>