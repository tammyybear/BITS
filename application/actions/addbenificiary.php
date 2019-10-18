<?php
    session_start();
    include "../config/connection.php";
    include "../controllers/basic_functions.php";
    include "../controllers/database_functions.php";
    include "../controllers/encoder_functions.php";

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

    if(countResult($conn, "SELECT * from tbl_roster where first_name = '$first_name' and family_name = '$family_name' and middle_name = '$middle_name'") == 1){
        redirectPageWithAlert("../views/addbenificiary.php", "Error. Please Try Again");
    }else{
        if(updateDatabase($conn, "INSERT INTO tbl_roster(first_name, middle_name, family_name, extension_name, birthday, sex, purok_sitio, psgc_barangay, psgc_city_municipality, psgc_province, psgc_region) VALUES ('$first_name', '$middle_name', '$family_name', '$extension_name', '$birthday', '$sex', '$purok_sitio', '$psgc_barangay', '$psgc_city_municipality', '$psgc_province', '$psgc_region')") == 1){
            $roster_id = getBenificiaryDetailsByName($conn, $first_name, $middle_name, $family_name)[0];
            redirectPageWithAlert("../views/addhousehold.php?id=$roster_id", "Benificiary Successfully Added");
        }else{
            redirectPageWithAlert("../views/addbenificiary.php", "Error. Please Try Again");
        }
    }

?>