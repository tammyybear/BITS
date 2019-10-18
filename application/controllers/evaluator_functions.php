<?php

    if(!function_exists('evaluationTable')){
        function evaluationTable($conn, $type){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <table class="table">
                            <thead>
                                <tr class="table-row">
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Family Name</th>
                                    <th>Profile</th>
                                    <th>Household</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getEvaluationDetails($conn, $type) ?>                
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getEvaluationDetails')){
        function getEvaluationDetails($conn, $type){
            $query = mysqli_query($conn, "SELECT * from tbl_swd_availment where availment_status = '$type' ");
            if(mysqli_num_rows($query) > 0){
                if ($type == 'Pending'){
                    while($row = mysqli_fetch_array($query)){
                        include "encoder_functions.php"
                        ?>
                            <tr class="table-row">
                                <?php $roster_id = $row['roster_id']; ?>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[1] ?>
                                </td>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[2] ?>
                                </td>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[3] ?>
                                </td>
                                <td>
                                    <a href="../views/evaluation-benificiary-profile.php?id=<?php echo $roster_id?>&type=<?php echo $type ?>">
                                        <button type="button" class="btn btn-xs btn-info">View</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../views/edithousehold.php<?php echo '?id='.$row['household_id']; ?>">
                                        <button type="button" class="btn btn-xs btn-warning">Check List</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../views/evaluation-approve.php<?php echo '?id='.$row['household_id']; ?>">
                                        <button type="button" class="btn btn-xs btn-primary">Approve</button>
                                    </a>
                                    <a href="../views/evaluation-pending.php<?php echo '?id='.$row['household_id']; ?>">
                                        <button type="button" class="btn btn-xs btn-danger">Reject</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                    }
                }else{
                    while($row = mysqli_fetch_array($query)){
                        include "encoder_functions.php"
                        ?>
                            <tr class="table-row">
                                <?php $roster_id = $row['roster_id']; ?>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[1] ?>
                                </td>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[2] ?>
                                </td>
                                <td class="march">
                                    <?php echo getBenificiaryDetailsById($conn, $roster_id)[3] ?>
                                </td>
                                <td>
                                    <a href="../views/evaluation-benificiary-profile.php?id=<?php echo $roster_id?>&type=<?php echo $type ?>">
                                        <button type="button" class="btn btn-xs btn-info">View</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../views/evaluation-household-list.php?id=<?php echo $roster_id?>">
                                        <button type="button" class="btn btn-xs btn-warning">Check List</button>
                                    </a>
                                </td>
                                <td>
                                    <label class="btn btn-xs btn-default">None</label>
                                </td>
                            </tr>
                        <?php
                    }
                }
            }else{
                echo "No $type Availment Found";
            }
        }
    }

    if(!function_exists('evaluationProfile')){
        function evaluationProfile($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <?php $roster_id = $_GET['id']; ?>
                        <form>
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" readonly name="firstname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [1] ?>" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" readonly name="middlename" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [2] ?>">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" readonly name="familyname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [3] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-6 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" readonly name="extensionname" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [4] ?>">
                            </div>

                            <div class="col-md-6 form-group2">
                                <label class="control-label">Sex</label>
                                <select name="sex" readonly required="">
                                    <option selected value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [6] ?>"><?php echo getBenificiaryDetailsById($conn, $roster_id) [6] ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label ">Birth Date</label>
                                    <input type="date" readonly name="birthday" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [5] ?>" required="">
                                </div>
                            </div>

                            <div class="vali-form"> </div>

                            <div class="col-md-12 form-group1">
                                <label class="control-label">Purok / Sitio</label>
                                <input type="text" readonly name="purok" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [7] ?>" requried="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Barangay</label>
                                    <input type="text" readonly name="barangay" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [8] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">City / Municipality</label>
                                    <input type="text" readonly name="city" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [9] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Province</label>
                                    <input type="text" readonly name="province" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [10] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Region</label>
                                    <input type="text" readonly name="region" value="<?php echo getBenificiaryDetailsById($conn, $roster_id) [11] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        
                            <div class="col-md-12 form-group">
                                <?php
                                    if(isset($_GET['type'])){
                                        $type = $_GET['type'];
                                        if ($type == 'Pending'){
                                            ?>
                                                <a href="evaluation-pending.php">
                                                    <button type="button" class="btn btn-primary">Close</button>
                                                </a>
                                            <?php
                                        }elseif($type == 'Approve'){
                                            ?>
                                                <a href="evaluation-approve.php">
                                                    <button type="button" class="btn btn-primary">Close</button>
                                                </a>
                                            <?php
                                        }else{
                                            ?>
                                                <a href="evaluation-rejected.php">
                                                    <button type="button" class="btn btn-primary">Close</button>
                                                </a>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>

                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            <?php
        }
    }

?>