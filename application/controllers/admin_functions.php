<?php
include "../config/connection.php";
include "user_functions.php";

    if(!function_exists('countBenificiaries')){
        function countBenificiaries($conn, $type){
            date_default_timezone_set('Asia/Manila');
            $date = date('Y-m-d');
            $query = mysqli_query($conn, "SELECT * FROM tbl_swd_availment WHERE availment_status = '$type' and created_at = '$date'");
            $result = mysqli_num_rows($query);
            return $result;
        }
    }
    
    if(!function_exists('CalendarToday')){
        function CalendarToday(){
            ?>
                <div class="cal1 cal_2">
                    <div class="clndr">
                        <div class="clndr-controls">
                            <div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div>
                            <div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div>
                        </div>
                        <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr class="header-days">
                                    <td class="header-day">S</td>
                                    <td class="header-day">M</td>
                                    <td class="header-day">T</td>
                                    <td class="header-day">W</td>
                                    <td class="header-day">T</td>
                                    <td class="header-day">F</td>
                                    <td class="header-day">S</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-28">
                                        <div class="day-contents">28</div>
                                    </td>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-29">
                                        <div class="day-contents">29</div>
                                    </td>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-30">
                                        <div class="day-contents">30</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-01">
                                        <div class="day-contents">1</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-02">
                                        <div class="day-contents">2</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-03">
                                        <div class="day-contents">3</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-04">
                                        <div class="day-contents">4</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-05">
                                        <div class="day-contents">5</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-06">
                                        <div class="day-contents">6</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-07">
                                        <div class="day-contents">7</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-08">
                                        <div class="day-contents">8</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-09">
                                        <div class="day-contents">9</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-10">
                                        <div class="day-contents">10</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-11">
                                        <div class="day-contents">11</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-12">
                                        <div class="day-contents">12</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-13">
                                        <div class="day-contents">13</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-14">
                                        <div class="day-contents">14</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-15">
                                        <div class="day-contents">15</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-16">
                                        <div class="day-contents">16</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-17">
                                        <div class="day-contents">17</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-18">
                                        <div class="day-contents">18</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-19">
                                        <div class="day-contents">19</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-20">
                                        <div class="day-contents">20</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-21">
                                        <div class="day-contents">21</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-22">
                                        <div class="day-contents">22</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-23">
                                        <div class="day-contents">23</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-24">
                                        <div class="day-contents">24</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-25">
                                        <div class="day-contents">25</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-26">
                                        <div class="day-contents">26</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-27">
                                        <div class="day-contents">27</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-28">
                                        <div class="day-contents">28</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-29">
                                        <div class="day-contents">29</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-30">
                                        <div class="day-contents">30</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-31">
                                        <div class="day-contents">31</div>
                                    </td>
                                    <td class="day adjacent-month next-month calendar-day-2015-08-01">
                                        <div class="day-contents">1</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!----Calender -------->
                <link rel="stylesheet" href="../../framework/core/template/css/clndr.css" type="text/css" />
                <script src="../../framework/core/template/js/underscore-min.js" type="text/javascript"></script>
                <script src= "../../framework/core/template/js/moment-2.2.1.js" type="text/javascript"></script>
                <script src="../../framework/core/template/js/clndr.js" type="text/javascript"></script>
                <script src="../../framework/core/template/js/site.js" type="text/javascript"></script>
                <!----End Calender -------->
            <?php
        }
    }

    if(!function_exists('addAccounts')){
        function addAccounts(){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                    
                        <form method="POST" action="../actions/addaccounts.php">
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
                            
                            <div class="col-md-4 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" placeholder="Extension name">
                            </div>
                            <div class="col-md-8 form-group1 group-mail">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" placeholder="Email" required="">
                            </div>
                            <div class="clearfix"> </div>

                            <div class="col-md-12 form-group2">
                                <label class="control-label">Role</label>
                                <select name="role" required="">
                                    <option value="Role">Role</option>
                                    <option value="Encoder">Encoder</option>
                                    <option value="Evaluator">Evaluator</option>
                                    <option value="Administrator">Administrator</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="vali-form"> </div>

                            <div class="col-md-12 form-group1">
                                <label class="control-label">User Name</label>
                                <input type="text" name="username" placeholder="User name" requried="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Create Password</label>
                                    <input type="password" name="password" placeholder="Create Password" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Repeat Password</label>
                                    <input type="password" name="repeatpassword" placeholder="Repeat Password">
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

    if(!function_exists('accountsTable')){
        function accountsTable($conn){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                        <table class="table">
                            <thead>
                                <tr class="table-row">
                                    <th>Role</th>
                                    <th>First Name</th>
                                    <th>Family Name</th>
                                    <th>Username</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getAccountDetails($conn) ?>                
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
        }
    }

    if(!function_exists('getAccountDetails')){
        function getAccountDetails($conn){
            $query = mysqli_query($conn, "SELECT * from tbl_userprofile ORDER BY role");
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr class="table-row">
                            <td class="march">
                                <?php echo $row['role'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['first_name'] ?>
                            </td>
                            <td class="mcarh">
                                <?php echo $row['family_name'] ?>
                            </td>
                            <td class="march">
                                <?php echo $row['user_name'] ?>
                            </td>
                            <td>
                                <a href="editaccounts.php<?php echo '?id='.$row['user_id']; ?>">
                                    <button type="button" class="btn btn-xs btn-warning warning_44">Edit</button>
                                </a>
                            </td>
                            <td>
                                <a href="../actions/deleteaccounts.php<?php echo '?id='.$row['user_id']; ?>">
                                    <button type="button" class="btn btn-xs btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                <?php
                }
            }else{
                echo "No User Account Found";
            }
        }
    }

    if(!function_exists('editAccounts')){
        function editAccounts($conn, $user_id){
            ?>
                <div class="validation-system">
                    <div class="validation-form">
                    
                        <form method="POST" action="../actions/editaccounts.php<?php echo '?id='.$user_id; ?>">
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" value="<?php echo getUserDetailsbyID($conn, $user_id) [4] ?>" required="">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Middle Name (Optional)</label>
                                    <input type="text" name="middlename" value="<?php echo getUserDetailsbyID($conn, $user_id) [5] ?>">
                                </div>
                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Family Name</label>
                                    <input type="text" name="familyname" value="<?php echo getUserDetailsbyID($conn, $user_id) [6] ?>" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            
                            <div class="col-md-4 form-group1">
                                <label class="control-label">Extension Name (Optional)</label>
                                <input type="text" name="extensionname" value="<?php echo getUserDetailsbyID($conn, $user_id) [7] ?>">
                            </div>
                            <div class="col-md-8 form-group1 group-mail">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" value="<?php echo getUserDetailsbyID($conn, $user_id) [3] ?>" required="">
                            </div>
                            <div class="clearfix"> </div>

                            <div class="col-md-12 form-group2">
                                <label class="control-label">Role</label>
                                <select name="role" required="">
                                    <option selected value="<?php echo getUserDetailsbyID($conn, $user_id) [8] ?>"><?php echo getUserDetailsbyID($conn, $user_id) [8] ?></option>
                                    <option value="Encoder">Encoder</option>
                                    <option value="Evaluator">Evaluator</option>
                                    <option value="Administrator">Administrator</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>

                            <div class="vali-form"> </div>

                            <div class="col-md-12 form-group1">
                                <label class="control-label">User Name</label>
                                <input type="text" name="username" value="<?php echo getUserDetailsbyID($conn, $user_id) [1] ?>" requried="">
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Create Password</label>
                                    <input type="password" name="password" value="<?php echo getUserDetailsbyID($conn, $user_id) [2] ?>" required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Repeat Password</label>
                                    <input type="password" name="repeatpassword" placeholder="Repeat Password">
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

    if(!function_exists('getUserDetailsbyID')){
        function getUserDetailsbyID($conn, $user_id){
            include "database_functions.php";
            $user_details = array();
            $query = mysqli_query($conn, "SELECT * from tbl_userprofile where user_id = '$user_id'");
            while($row = mysqli_fetch_array($query)){
                array_push($user_details, $row['user_id'], $row['user_name'], $row['user_password'], $row['email_add'], $row['first_name'], $row['middle_name'], $row['family_name'], $row['extension_name'], $row['role']);
            }
            return $user_details;
        }
    }
?>