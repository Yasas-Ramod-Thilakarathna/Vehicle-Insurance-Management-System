<?php include('dbconfig.php');?>
<?php 
session_start();

	include("dbconfig.php");
	include("adminfunctions.php");

	$user_data = check_login($conn);
   

?>
<?php
   $insList =  '';

   //getting the list of insurance
   $query = "SELECT * FROM insurance_policy";
   $insurance = mysqli_query($conn, $query);

   
   if($insurance){
       
       while($ins = mysqli_fetch_assoc($insurance)){

        $maxgrosamm = $ins['max_grossAmount'];
        if($maxgrosamm==60000){


            $insList .= "<tr>";

            $insList .= "<td>{$ins['p_ID']}</td>";
            $insList .= "<td>{$ins['ins_name']}</td>";
            $insList .= "<td>{$ins['ins_type']}</td>";
            $insList .= "<td>{$ins['vehicle_cate']}</td>";
            $insList .= "<td>{$ins['min_grossAmount']}</td>";
            $insList .= "<td>{$ins['max_grossAmount']}</td>";
            $insList .= "<td>{$ins['start_date']}</td>";
            $insList .= "<td>{$ins['conditions']}</td>";
            $insList .= "<td>{$ins['description']}</td>";
            $insList .= "<td><a  href = \"ModifyIns.php?p_ID = {$ins['p_ID']}\" ><input type='submit' value = 'Edit' name='Edit' id='Edit'></a></td>";

            $insList .= "<td><a  href = \"DeleteIns.php?p_ID = {$ins['p_ID']}\"><input type='submit' value = 'Delete' name='Delete' id='Delete'></a></td>";

            $insList .= "</tr>";
        }
       }
   }else{
       echo "Database query failed !";
   }
?>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/insStyles.css">
<link rel="stylesheet" type="text/css" href="css/adminNav.css"> <!--Admin vertical nav-->

 <!--navi begin-->
<table  class="content"  >
        <tr>
            <td class="vertical">
            <!--admin vertical navi-->
                <nav>
                    <a href="usermanage.php"><i class="fa fa-group" style="font-size:24px"></i> User Details</a><br>
                    <a href="claimmanage.php"><i class="fa fa-angellist" style="font-size:24px"></i> Claim </a><br>
                    <a href="feedbackmanage.php"><i class="fa fa-comments-o" style="font-size:24px"></i> Feedback </a><br>
                    <a href="viewinsurancerequests.php"><i class="fa fa-handshake-o" style="font-size:24px"></i> Policy Holder </a><br>
                    <a href="insurancepolicy.php"><i class="fa fa-automobile" style="font-size:24px"></i> Insurance Policy</a><br>
                    <a href="adminlogout.php">Logout</a>
                </nav> 
            </td>       
            <!--Insurance policy list-->
            <td>
                <main>
                    <h1>Insurance Policy Management <span><a href="addIns.php"><button> Add New Insurance</button></a></span></h1>
                    <table  class= "insList">
                        <tr>
                            <th>Policy No</th>
                            <th>Insurance Name</th>
                            <th>Insurance Type</th>
                            <th>Vehicle Category</th>
                            <th>Min_grossAmount</th>
                            <th>Max_grossAmount</th>
                            <th>Start date</th>
                            <th>Conditions</th>
                            <th>Description</th>
                            <th >Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php echo $insList; ?>
                    </table>    
                </main>
            </td>    
        </tr> 
    </table>    
    
    <!-- Footer main -->
    <?php include('footer.php'); ?>