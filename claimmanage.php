<?php include('header.php'); ?>
<?php 
session_start();

	include("dbconfig.php");
	include("adminfunctions.php");

	$user_data = check_login($conn);
   

?>

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
                    <h1>Claim Request Manage </h1>
                    <table  class= "insList">
                    <tr>
                        <th>Insurance Number</th>
                        <th>Contact Number</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th colspan="2">Actions</th>
    </tr>
                        <?php
include('dbconfig.php');

$records = mysqli_query($conn,"select * from claimdata"); // fetch data from database

while($data = mysqli_fetch_array($records))

{   
    $insurancenum = $data['ins_nu'];
?>
  <tr>
    <td><?php echo $insurancenum ?></td>
    <td><?php echo $data['contact']; ?></td>
    <td><?php echo $data['locat']; ?></td>
    <td><?php echo $data['descript']; ?></td>
    <td><?php echo '<img src="uploads/'.$data['photo'].'" width="100px;" height="100px;" alt="image">'?></td>
    <td><?php echo $data['stat']; ?></td>
    <td><a href="updateclaimstatus.php?update=<?php echo $data['ins_nu'] ?>">Update status</a></td>
    <td><a href="deleteclaimrequests.php?delete=<?php echo $data['ins_nu']; ?>">Delete claim req</a></td>
  </tr>	
<?php
}
?>           
                       
                    </table>    
                </main>
            </td>    
        </tr> 
    </table>    
    
    
<!-- Footer -->
<?php include('footer.php'); ?>