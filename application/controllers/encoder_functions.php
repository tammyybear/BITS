<?php
    if(!function_exists('benificiaryTable')){
        function benificiaryTable($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <table class="table">
                            <thead>
                                <tr class="table-row">
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Family Name</th>
                                    <th>Gender</th>
                                    <th>Household</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getBenificiaryDetails($conn) ?>                
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getBenificiaryDetails')){
        function getBenificiaryDetails($conn){
            $query = mysqli_query($conn, "SELECT * from tbl_roster");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr class="table-row">
                            <td class="march">
                                <?php echo $row['first_name'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['middle_name'] ?>
                            </td>
                            <td class="mcarh">
                                <?php echo $row['family_name'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['sex'] ?>
                            </td>
                            <td>
                                <a href="household.php<?php echo '?id='.$row['roster_id']; ?>">
                                    <button type="button" class="btn btn-xs btn-warning warning_44">View</button>
                                </a>
                            </td>
                            <td>
                                <a href="../views/editbenificiary.php<?php echo '?id='.$row['roster_id']; ?>">
                                    <button type="button" class="btn btn-xs btn-primary">View</button>
                                </a>
                            </td>
                        </tr>
                <?php
                }
            }else{
                echo "No Benificiary Found";
            }
        }
    }

    if(!function_exists('addBenificiary')){
        function addBenificiary(){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                    
                        <form method="POST" action="../actions/addbenificiary.php">
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" name="middlename" placeholder="Middle name">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" name="familyname" placeholder="Last name" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-6 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" placeholder="Extension name">
                            </div>

                            <div class="col-md-6 form-group2">
                                <label class="control-label">Sex</label>
                                <select name="sex" required="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label ">Birth Date</label>
                                    <input type="date" name="birthday" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
                                </div>
                            </div>

                            <div class="vali-form"> </div>

                            <div class="col-md-12 form-group1">
                                <label class="control-label">Purok / Sitio</label>
                                <input type="text" name="purok" placeholder="Purok / Sitio" requried="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Barangay</label>
                                    <input type="text" name="barangay" placeholder="Barangay" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">City / Municipality</label>
                                    <input type="text" name="city" placeholder="City / Municipality">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Province</label>
                                    <input type="text" name="province" placeholder="Province" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Region</label>
                                    <input type="text" name="region" placeholder="Region">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>

                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getBenificiaryDetailsByName')){
        function getBenificiaryDetailsByName($conn, $first_name, $middle_name, $family_name){
            $benificiary_details = array();
            $query = mysqli_query($conn, "SELECT * from tbl_roster where first_name = '$first_name' and middle_name = '$middle_name' and family_name = '$family_name'");
            while($row = mysqli_fetch_array($query)){
                array_push($benificiary_details, $row['roster_id'], $row['first_name'], $row['middle_name'], $row['family_name'], $row['extension_name'], $row['birthday'], $row['sex'], $row['purok_sitio'], $row['psgc_barangay'], $row['psgc_city_municipality'], $row['psgc_province'], $row['psgc_region']);
            }
            return $benificiary_details;
        }
    }

    if(!function_exists('householdTable')){
        function householdTable($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <table class="table">
                            <thead>
                                <tr class="table-row">
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Family Name</th>
                                    <th>Gender</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getHouseholdDetails($conn) ?>                
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getHouseholdDetails')){
        function getHouseholdDetails($conn){
            $roster_id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * from tbl_household_roster where roster_id = '$roster_id' ");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr class="table-row">
                            <td class="march">
                                <?php echo $row['first_name'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['middle_name'] ?>
                            </td>
                            <td class="mcarh">
                                <?php echo $row['family_name'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['sex'] ?>
                            </td>
                            <td>
                                <a href="../views/edithousehold.php<?php echo '?id='.$row['household_id']; ?>">
                                    <button type="button" class="btn btn-xs btn-primary">View</button>
                                </a>
                            </td>
                        </tr>
                <?php
                }
            }else{
                echo "No Household Found";
            }
        }
    }

    if(!function_exists('addHousehold')){
        function addHousehold(){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <?php $roster_id = $_GET['id']; ?>
                        <form method="POST" action="../actions/addhousehold.php?id=<?php echo $roster_id; ?>">
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" placeholder="First name" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" name="middlename" placeholder="Middle name">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" name="familyname" placeholder="Last name" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-6 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" placeholder="Extension name">
                            </div>

                            <div class="col-md-6 form-group1">
                                <label class="control-label">Relationship w/ Benificiary</label>
                                <input type="text" name="relationship" placeholder="Relationship" required="">
                            </div>

                            <div class="clearfix"> </div>

                            <div class="vali-form">
                                <div class="col-md-4 form-group2">
                                    <label class="control-label">Gender</label>
                                    <select name="sex" required="">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-8 form-group2">
                                    <label class="control-label ">Birth Date</label>
                                    <input type="date" name="birthday" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
                                </div>
                            </div>

                            <div class="vali-form"> </div>

                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Purok / Sitio</label>
                                    <input type="text" name="purok" placeholder="Purok / Sitio" requried="">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Barangay</label>
                                    <input type="text" name="barangay" placeholder="Barangay" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">City / Municipality</label>
                                    <input type="text" name="city" placeholder="City / Municipality">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Province</label>
                                    <input type="text" name="province" placeholder="Province" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Region</label>
                                    <input type="text" name="region" placeholder="Region">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <?php $roster_id = $_GET['id']; ?>
                                <a href="../actions/addavailment.php?id=<?php echo $roster_id ?>">
                                    <button type="button" class="btn btn-danger">Skip</button>
                                </a>
                            </div>

                            <div class="clearfix"> </div>
                        </form>
                    </div>  
                </div>
            <?php
        }
    }

    if(!function_exists('viewBenificiary')){
        function viewBenificiary($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <?php $roster_id = $_GET['id']; ?>
                        <form method="POST" action="../actions/editbenificiary.php<?php echo '?id='.$roster_id; ?>">
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [1] ?>" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" name="middlename" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [2] ?>">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" name="familyname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [3] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-6 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [4] ?>">
                            </div>

                            <div class="col-md-6 form-group2">
                                <label class="control-label">Sex</label>
                                <select name="sex" required="">
                                    <option selected value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [6] ?>"><?php echo getBenificiaryDetailsById($conn, $roster_id) [6] ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label ">Birth Date</label>
                                    <input type="date" name="birthday" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [5] ?>" required="">
                                </div>
                            </div>

                            <div class="vali-form"> </div>

                            <div class="col-md-12 form-group1">
                                <label class="control-label">Purok / Sitio</label>
                                <input type="text" name="purok" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [7] ?>" requried="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Barangay</label>
                                    <input type="text" name="barangay" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [8] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">City / Municipality</label>
                                    <input type="text" name="city" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [9] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Province</label>
                                    <input type="text" name="province" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [10] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Region</label>
                                    <input type="text" name="region" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [11] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a href="../actions/addavailment.php<?php echo '?id='.$roster_id; ?>">
                                    <button type="button" class="btn btn-primary">Apply Availment</button>
                                </a>
                                <a href="../actions/deletebenificiary.php<?php echo '?id='.$roster_id; ?>">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                                <a href="benificiary.php">
                                    <button type="button" class="btn btn-default">Close</button>
                                </a>
                            </div>

                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getBenificiaryDetailsById')){
        function getBenificiaryDetailsById($conn, $roster_id){
            $benificiary_details = array();
            $query = mysqli_query($conn, "SELECT * from tbl_roster where roster_id = '$roster_id'");
            while($row = mysqli_fetch_array($query)){
                array_push($benificiary_details, $row['roster_id'], $row['first_name'], $row['middle_name'], $row['family_name'], $row['extension_name'], $row['birthday'], $row['sex'], $row['purok_sitio'], $row['psgc_barangay'], $row['psgc_city_municipality'], $row['psgc_province'], $row['psgc_region']);
            }
            return $benificiary_details;
        }
    }

    if(!function_exists('viewHousehold')){
        function viewHousehold($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <?php $household_id = $_GET['id']; ?>
                        <form method="POST" action="../actions/edithousehold.php?id=<?php echo $household_id; ?>">
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" value="<?php echo getHouseholdDetailsById($conn, $household_id) [2] ?>" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" name="middlename" value="<?php echo getHouseholdDetailsById($conn, $household_id) [3] ?>">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" name="familyname" value="<?php echo getHouseholdDetailsById($conn, $household_id) [4] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-6 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" value="<?php echo getHouseholdDetailsById($conn, $household_id) [5] ?>">
                            </div>

                            <div class="col-md-6 form-group1">
                                <label class="control-label">Relationship w/ Benificiary</label>
                                <input type="text" name="relationship" value="<?php echo getHouseholdDetailsById($conn, $household_id) [6] ?>" required="">
                            </div>

                            <div class="clearfix"> </div>

                            <div class="vali-form">
                                <div class="col-md-4 form-group2">
                                    <label class="control-label">Gender</label>
                                    <select name="sex" required="">
                                    <option selected value="<?php echo getHouseholdDetailsById($conn, $household_id) [8] ?>"><?php echo getHouseholdDetailsById($conn, $household_id) [8] ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-8 form-group2">
                                    <label class="control-label ">Birth Date</label>
                                    <input type="date" name="birthday" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="<?php echo getHouseholdDetailsById($conn, $household_id) [7] ?>" required="">
                                </div>
                            </div>

                            <div class="vali-form"> </div>

                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Purok / Sitio</label>
                                    <input type="text" name="purok" value="<?php echo getHouseholdDetailsById($conn, $household_id) [9] ?>" requried="">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Barangay</label>
                                    <input type="text" name="barangay" value="<?php echo getHouseholdDetailsById($conn, $household_id) [10] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">City / Municipality</label>
                                    <input type="text" name="city" value="<?php echo getHouseholdDetailsById($conn, $household_id) [11] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Province</label>
                                    <input type="text" name="province" value="<?php echo getHouseholdDetailsById($conn, $household_id) [12] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Region</label>
                                    <input type="text" name="region" value="<?php echo getHouseholdDetailsById($conn, $household_id) [13] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="../actions/deletehousehold.php<?php echo '?id='.$household_id; ?>">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                                <a href="benificiary.php">
                                    <button type="button" class="btn btn-warning">Close</button>
                                </a>
                            </div>

                            <div class="clearfix"> </div>
                        </form>
                    </div>  
                </div>
            <?php
        }
    }

    if(!function_exists('getHouseholdDetailsById')){
        function getHouseholdDetailsById($conn, $household_id){
            $household_details = array();
            $query = mysqli_query($conn, "SELECT * from tbl_household_roster where household_id = '$household_id'");
            while($row = mysqli_fetch_array($query)){
                array_push($household_details, $row['household_id'], $row['roster_id'], $row['first_name'], $row['middle_name'], $row['family_name'], $row['extension_name'], $row['relationship'], $row['birthdate'], $row['sex'], $row['purok_sitio'], $row['psgc_barangay'], $row['psgc_city_municipality'], $row['psgc_province'], $row['psgc_region']);
            }
            return $household_details;
        }
    }

?>